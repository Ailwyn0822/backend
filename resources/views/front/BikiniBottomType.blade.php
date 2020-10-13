@extends('layouts/nav_footer')

@section('content')
<section class="news">
    <div class="container">
        <h2 class="news_title text-success">比奇堡分類表</h2>
        @foreach ($bbbb as $bb)

            <h1 class="text-info">
            {{$bb->type_name}}
           </h1>


        <div class="row news_lists">
            @foreach ($bb->bb as $item)
            <div class="col-md-4">
                <div class="news_list">
                    <h3 style="color: rgb(16, 108, 161)">{{$item->name}}</h3>
                    <h6>{{$item->house}}</h6>
                    <img width="100%" src="{{$item->img_url}}" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">{{$item->text}}</p>
                    <a class="btn btn-success" href="BikiniBottom_info/{{$item->id}}" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            @endforeach
        </div>
            @endforeach


    </div>
</section>
@endsection


@section('css')
<link rel="stylesheet" href="./css/news.css">
@endsection
