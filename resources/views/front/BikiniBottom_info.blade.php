@extends('layouts/nav_footer')

@section('css')
<link rel="stylesheet" href="./css/news_info.css">
@endsection

@section('content')
<section class="news_info">
    <div class="container" style="margin-top: 100px">
        <h2 class="info_title" style="color: rgb(16, 53, 121)">{{$BikiniBottom->name}}</h2>
        <div class="row">
            <div class="col-12 my-3 my-md-0 col-md-6">
                <div class="image_box h-100">
                    <a href="{{$BikiniBottom->img_url}}" data-lightbox="image-1" data-title="My caption">
                        <img width="100%" src="{{$BikiniBottom->img_url}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 my-3 my-md-0 col-md-6">
                <div class="info_content">
                    <h3>{{$BikiniBottom->house}}</h3>
                    {{$BikiniBottom->text}}
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

@endsection
