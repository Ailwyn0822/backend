@extends('layouts/app')


@section('content')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">後臺</a></li>
          <li class="breadcrumb-item"><a href="/admin/news">最新消息</a></li>
          <li class="breadcrumb-item"><a href="/admin/news/create">新增消息</a></li>
        </ol>
      </nav>
      <form method="POST" action="/admin/news/store" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="title">主標題</label>
            <input type="text" class="form-control" id="title"  name="title">
          </div>
          <div class="form-group">
            <label for="sub_title">副標題</label>
            <input type="text" class="form-control" id="sub_title"  name="sub_title">
          </div>
          <div class="form-group">
            <label for="content">內容</label>
            <input type="text" class="form-control" id="content"  name="content">
          </div>
          <div class="form-group">
            <label for="img_url">圖片網址</label>
            <input type="text" class="form-control" id="img_url"  name="img_url" value="">
          </div>
          <div class="form-group">
            <label for="file">上傳檔案</label>
            <input type="file" class="form-control-file" id="file" name="file">
          </div>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>
</div>
@endsection
