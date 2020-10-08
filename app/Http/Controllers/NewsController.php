<?php

namespace App\Http\Controllers;

use App\news;
use App\place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $news_list = DB::table('news')->orderBy('id', 'desc')->get();
        return view('admin/news', compact("news_list"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/news_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $requestData = $request->all();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $this->fileUpload($file, 'news');
            $requestData['file'] = $path;
        }
        // $file_name = $request->file('file')->store('','public');
        // $requestData['file'] = $file_name;

        news::create($requestData);

        return redirect('admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($news_id)
    {
        $news = DB::table('news')->where('id', '=', $news_id)->first();
        return view('admin/news_edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $news_id)
    {
        // news::where('id', '=', $news_id)->update(['title' => $request->title, 'sub_title' => $request->sub_title, 'content' => $request->content, 'img_url' => $request->img_url]);
        // return redirect('admin/news');


        $item = news::find($news_id);

        $requestData = $request->all();

        if($request->hasFile('file')) {
            $old_image = $item->file;
            $file = $request->file('file');
            $path = $this->fileUpload($file,'news');
            $requestData['file'] = $path;
            File::delete(public_path().$old_image);
        }

        $item->update($requestData);

        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $news_id)
    {
        $item = news::find($news_id);
        $old_image = $item->file;
        File::delete(public_path().$old_image);
        $item->delete();
        return redirect('admin/news');

    }


    private function fileUpload($file, $dir)
    {
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/')) {
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/' . $dir)) {
            mkdir('upload/' . $dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time() . md5(rand(100, 200))) . '.' . $extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path() . '/upload/' . $dir . '/' . $filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/' . $dir . '/' . $filename;
    }
}
