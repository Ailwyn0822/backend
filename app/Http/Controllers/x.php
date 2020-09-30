<?php

namespace App\Http\Controllers;

use App\place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class x extends Controller
{

    public function index(){
        $news_list = DB::table('news')->take(3)->orderBy('id','desc')->get();
        return view('front/index', compact("news_list"));


    }
    public function news(){
        $news_list = DB::table('news')->orderBy('id','desc')->paginate(6);
        return view('front/news', compact("news_list"));

    }

    public function news_info($news_id){
        $news = DB::table('news')->where('id', '=',$news_id)->first();
        return view('front/news_info',compact('news'));

    }

    public function contact_us(){
        return view('front/contact_us');

    }
    public function BikiniBottom(){
        $BikiniBottoms=DB::table('BikiniBottom')->get();

        return view('front/BikiniBottom',compact('BikiniBottoms'));

    }
    public function BikiniBottom_info($BikiniBottom_id){
        $BikiniBottom=DB::table('BikiniBottom')->where('id',$BikiniBottom_id)->first();

        return view('front/BikiniBottom_info',compact('BikiniBottom'));

    }

    public function send(Request $request){

        // DB::table('place')->insert(
        //     ['email' => $request->email,
        //     'place' => $request->place,
        //     'file' => "",
        //     'place_text' => $request->place_text,
        //     'place_name' => $request->place_name
        //     ]
        // );
        place::create($request->all());
        return '好棒喔';
    }




}
