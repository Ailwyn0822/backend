<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class x extends Controller
{

    public function index(){
        return view('front/index');

    }
    public function news(){
        return view('front/news');

    }

    public function news_info(){
        return view('front/news_info');

    }

    public function contact_us(){
        return view('front/contact_us');

    }


    


}
