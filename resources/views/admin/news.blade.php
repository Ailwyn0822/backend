@extends('layouts/app')

@section('css')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
 
@endsection

@section('content')
  <div class="container">

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">首頁</a></li>
      <li class="breadcrumb-item"><a href="/admin/news">最新消息</a></li>
    </ol>
  </nav>
  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>標題</th>
            <th>小標題</th>
            <th>內容</th>
            <th>圖片</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news_list as $news)

        <tr>
            <td>{{$news->title}}</td>
            <td>{{$news->sub_title}}</td>
            <td>{{$news->content}}</td>
            <td><img width="100" src="{{$news->img_url}}" alt=""></td>
        </tr>
        @endforeach

    </tbody>

</table>
  </div>

@endsection


@section('js')
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
@endsection

