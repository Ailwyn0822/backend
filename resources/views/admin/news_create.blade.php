@extends('layouts/app')


@section('content')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">首頁</a></li>
          <li class="breadcrumb-item"><a href="/admin/news">最新消息</a></li>
          <li class="breadcrumb-item"><a href="/admin/news/create">新增消息</a></li>
        </ol>
      </nav>
      <form method="POST" action="/admin/news/store" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInput">主標題</label>
            <input type="text" class="form-control" id="exampleInput"  name="title">
          </div>
          <div class="form-group">
            <label for="exampleInput">副標題</label>
            <input type="text" class="form-control" id="exampleInput"  name="sub_title">
          </div>
          <div class="form-group">
            <label for="exampleInput">內容</label>
            <input type="text" class="form-control" id="exampleInput"  name="content">
          </div>
          <div class="form-group">
            <label for="exampleInput">圖片網址</label>
            <input type="text" class="form-control" id="exampleInput"  name="img_url" value="">
          </div>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>
</div>
@endsection
