@extends('layouts/app')


@section('content')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">首頁</a></li>
          <li class="breadcrumb-item"><a href="/admin/news">最新消息</a></li>
          <li class="breadcrumb-item"><a href="/admin/news/create">編輯消息</a></li>
        </ol>
      </nav>
      <form method="POST" action="/admin/news/update/{{$news->id}}" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInput">主標題</label>
            <input type="text" class="form-control" id="exampleInput"  name="title" value="{{$news->title}}">
          </div>
          <div class="form-group">
            <label for="exampleInput">副標題</label>
            <input type="text" class="form-control" id="exampleInput"  name="sub_title" value="{{$news->sub_title}}">
          </div>
          <div class="form-group">
            <label for="exampleInput">內容</label>
            <input type="text" class="form-control" id="exampleInput"  name="content" value="{{$news->content}}">
          </div>
          <div class="form-group">
            <label for="exampleInput">圖片網址</label>
            <input type="text" class="form-control" id="exampleInput"  name="img_url" value="{{$news->img_url}}">
          </div>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>
</div>
@endsection
