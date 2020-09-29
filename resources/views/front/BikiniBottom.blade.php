@extends('layouts/nav_footer')

@section('content')
<section class="news">
    <div class="container">
        <h2 class="news_title">比奇堡</h2>
        <div class="row news_lists">

            @foreach ($BikiniBottoms as $BikiniBottom)
            <div class="col-md-4">
                <div class="news_list">
                    <h3 style="color: rgb(16, 108, 161)">{{$BikiniBottom->name}}</h3>
                    <h6>{{$BikiniBottom->house}}</h6>
                    <img width="100%" src="{{$BikiniBottom->img_url}}" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">{{$BikiniBottom->text}}</p>
                    <a class="btn btn-success" href="BikiniBottom_info/{{$BikiniBottom->id}}" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            @endforeach
{{--
            <div class="col-md-4">
                <div class="news_list">
                    <h3>東台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                    <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_list">
                    <h3>南台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                   <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_list">
                    <h3>中台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                    <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_list">
                    <h3>東台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                    <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_list">
                    <h3>南台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                   <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_list">
                    <h3>中台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                    <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_list">
                    <h3>東台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                    <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_list">
                    <h3>南台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                   <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_list">
                    <h3>中台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                    <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_list">
                    <h3>東台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                    <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_list">
                    <h3>南台灣推薦秘境景點</h3>
                    <h4>景點名稱</h4>
                    <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                    <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                   <a class="btn btn-success" href="news_info" role="button">點擊查看更多 &raquo;</a>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection


@section('css')
<link rel="stylesheet" href="./css/news.css">
@endsection
