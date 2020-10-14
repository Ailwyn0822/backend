<?php

namespace App\Http\Controllers;

use App\bbtype;
use Illuminate\Http\Request;

class bbtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bb=bbtype::all();
        return view('admin/bbtype',compact('bb'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin/bbtype_creat');

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
        bbtype::create($requestData);
        return redirect('admin/bbtype');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bbb=bbtype::where('id','=',$id)->get();
        return view('admin/bbtype_edit',compact('bbb'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bbtype_id)
    {
        $item = bbtype::find($bbtype_id);
        $requestData = $request->all();

        $item->update($requestData);

        return redirect('admin/bbtype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        bbtype::find($id)->delete();
        return redirect('admin/bbtype');
    }
}
