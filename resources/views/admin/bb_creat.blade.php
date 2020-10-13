@extends('layouts/app')


@section('content')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/bb">後臺</a></li>
          <li class="breadcrumb-item"><a href="/admin/bb">比奇堡居民名單</a></li>
          <li class="breadcrumb-item"><a href="/admin/bb/create">搬到比奇堡</a></li>
        </ol>
      </nav>


      <form method="POST" action="/admin/bb/store" enctype="multipart/form-data">
        @csrf

            <div class="form-group">
            <label for="type_id">您是什麼動物?</label>
            <select name="type_id" id="" class="form-control">
                @foreach ($bbbb as $bb)
                <option value="{{$bb->id}}">{{$bb->type_name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="name">您的大名是?</label>
            <input type="text" class="form-control" id="name"  name="name">
          </div>
          <div class="form-group">
            <label for="house">想搬到哪裡住?</label>
            <input type="text" class="form-control" id="house"  name="house">
          </div>
          <div class="form-group">
            <label for="text">簡單描述您的個性!</label>
            <input type="text" class="form-control" id="text"  name="text">
          </div>
          <div class="form-group">
            <label for="img_url">請填寫個人照網址</label>
            <input type="text" class="form-control" id="img_url"  name="img_url" value="">
          </div>
          <div class="form-group">
            <label for="collection">上傳一個您的收藏品</label>
            <input type="file" class="form-control-file" id="collection" name="collection">
          </div>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>
</div>
@endsection
