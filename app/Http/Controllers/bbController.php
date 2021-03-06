<?php

namespace App\Http\Controllers;

use App\bb;
use App\bbimg;
use App\bbtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class bbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bb_list = DB::table('bikinibottom')->get();
        $bab = bbimg::all();



        // $bbbb=bb::with('bb_type')->find(9);
        // dd($bbbb);
        return view('admin/bb', compact('bb_list','bab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bbbb = bbtype::with('bb')->get();


        return view('admin/bb_creat', compact('bbbb'));
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

        $new_product =  bb::create($requestData);
        $new_product_id = $new_product->id;
        $files = $request->file('collections');
        // dd($files);
        if ($request->hasFile('collections')) {
            foreach ($files as $file) {
                //上傳圖片
                $path = $this->fileUpload($file, 'bb');
                //新增資料進DB
                $product_img = new bbimg;
                $product_img->sort = $new_product_id;
                $product_img->img_url = $path;
                $product_img->save();
            }
        }

        return redirect('admin/bb');
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
    public function edit($bb_id)
    {
        // $bb=DB::table('bikinibottom')->where('id','=',$bb_id)->first();
        // return view('admin/bb_edit',compact('bb'));

        $bbbb = bb::with('bb_type')->find($bb_id);
        $bbbbbb = bbtype::with('bb')->get();
        $bbb=bb::with('bbimg')->find($bb_id);
        return view('admin/bb_edit', compact('bbbb', 'bbbbbb','bbb'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bb_id)
    {


        $item = bb::find($bb_id);
        $requestData = $request->all();

        if ($request->hasFile('collections')) {
            $old_image = $item->collection;
            $file = $request->file('collections');
            $path = $this->fileUpload($file, 'bb');
            $requestData['collections'] = $path;
            File::delete(public_path() . $old_image);
        }

        $item->update($requestData);

        return redirect('admin/bb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($bb_id)
    {
        $item = bb::find($bb_id);
        $old_image = $item->collection;
        File::delete(public_path() . $old_image);
        $item->delete();
        return redirect('admin/bb');
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
