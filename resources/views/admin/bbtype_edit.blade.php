@extends('layouts/app')


@section('content')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/bb">後臺</a></li>
          <li class="breadcrumb-item"><a href="/admin/bb">比奇堡居民分類表</a></li>
          <li class="breadcrumb-item"><a href="/admin/bb/create">新增分類</a></li>
        </ol>
      </nav>

      @foreach ($bbb as $bb)

      <form method="POST" action="/admin/bbtype/update/{{$bb->id}}"  enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="type_name">類別名稱?</label>
            <input type="text" class="form-control" id="type_name"  name="type_name" value="{{$bb->type_name}}">
          </div>
          <div class="form-group">
            <label for="sort">排序</label>
            <input type="text" class="form-control" id="sort"  name="sort" value="{{$bb->sort}}">
          </div>

        <button type="submit" class="btn btn-primary">送出</button>
        @endforeach

    </form>
</div>
@endsection
