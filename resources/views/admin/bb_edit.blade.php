@extends('layouts/app')

@section('css')
<style>
    #delbox{
        width: 20px;
        height: 20px;
        background-color: rgb(24, 201, 201)
    }
</style>
@endsection

@section('content')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/bb">後臺</a></li>
          <li class="breadcrumb-item"><a href="/admin/bb">比奇堡居民名單</a></li>
          <li class="breadcrumb-item"><a href="/admin/bb/create">搬到比奇堡</a></li>
        </ol>
      </nav>





      <form method="POST" action="/admin/bb/update/{{$bbbb->id}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="type_id">您是什麼動物?</label>
            <select name="type_id" id="" class="form-control">
                @foreach ($bbbbbb as $item)
                <option value="{{$item->id}}">{{$item->type_name}}</option>
                @endforeach
            </select>
          <div class="form-group">
            <label for="name">您的大名是?</label>
            <input type="text" class="form-control" id="name"  name="name" value="{{$bbbb->name}}">
          </div>
          <div class="form-group">
            <label for="house">想搬到哪裡住?</label>
            <input type="text" class="form-control" id="house"  name="house" value="{{$bbbb->house}}">
          </div>
          <div class="form-group">
            <label for="text">簡單描述您的個性!</label>
            <input type="text" class="form-control" id="text"  name="text" value="{{$bbbb->text}}">
          </div>
          <div class="form-group">
            <label for="img_url">請填寫個人照網址</label>
            <input type="text" class="form-control" id="img_url"  name="img_url" value="{{$bbbb->img_url}}">
          </div>
          <div class="form-group">
            <label for="collection">上傳一個您的收藏品</label>
            <input type="file" class="form-control-file" id="collection" name="collections[]" multiple>
          </div>
          <div>

            @foreach ($bbb->bbimg as $item)
            <img src="{{$item->img_url}}" width="200px" alt="">
            <a href="/admin/ajax_delete_product_imgs"><div id="delbox" ></div></a>
            @endforeach

          </div>
        <button type="submit" class="btn btn-primary">送出</button>
    </form>





</div>
@endsection

@section('js')
<script>
       $('#delbox').click(function () {

var product_imgs_id = $(this).data('productimgid');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
    method: 'POST',
    url: '/admin/ajax_delete_product_imgs',
    data: {product_imgs_id: product_imgs_id},
    success: function (res) {
        $( `.product_imgs[data-productimgid='${product_imgs_id}']` ).remove();
    },
    error: function (jqXHR, textStatus, errorThrown) {
        console.error(textStatus + " " + errorThrown);
    }
});
});
</script>
@endsection
