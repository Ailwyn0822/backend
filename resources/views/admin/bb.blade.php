@extends('layouts/app')

@section('css')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/bb">後臺</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="/admin/bb">比奇堡居民名單</a></li>
        </ol>
      </nav>

      <a class="btn btn-info mt-5 mb-5" href="/admin/bb/create">搬到比奇堡</a>

      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>居住者姓名</th>
                <th>居住地</th>
                <th>個性</th>
                <th>個人照</th>
                <th>收藏物</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bb_list as $bb)
            <tr>
                <td>{{$bb->name}}</td>
                <td>{{$bb->house}}</td>
                <td>{{$bb->text}}</td>
                <td><img src="{{$bb->img_url}}" width="150px" alt=""></td>
                <td><img src="{{$bb->collection}}" width="150px" alt=""></td>
                <td>
                    <a class="btn btn-success" href="/admin/bb/edit/{{$bb->id}}">裝潢</a>
                    {{-- <a class="btn btn-danger" href="/admin/bb/destroy/{{$bb->id}}">搬家</a> --}}
                    <button data-bbid="{{$bb->id}}" class="btn btn-lg btn btn-danger btn-del">搬家</button>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
 <script>
     $(document).ready(function() {
    $('#example').DataTable();
    $('#example').on("click",".btn-del",function(){
                var r=confirm("確認是否刪除");
                if(r==true){
                    window.location.href=`/admin/bb/destroy/${this.dataset.bbid}`;
                }
            });

    });

 </script>
@endsection

