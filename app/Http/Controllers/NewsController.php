<?php

namespace App\Http\Controllers;

use App\news;
use App\place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $news_list = DB::table('news')->get();
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
        news::create($request->all());
        return '新增成功喔';
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
        $news=DB::table('news')->where('id', '=',$news_id)->first();
        return view('admin/news_edit',compact('news'));
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
        news::where('id', '=',$news_id)->update(['title' => $request->title]);
        news::where('id', '=',$news_id)->update(['sub_title' => $request->sub_title]);
        news::where('id', '=',$news_id)->update(['content' => $request->content]);
        news::where('id', '=',$news_id)->update(['img_url' => $request->img_url]);
        return '更新成功喔';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $news_id)
    {
        news::where('id', '=',$news_id)->delete();
        return'刪除成功';
    }
}
