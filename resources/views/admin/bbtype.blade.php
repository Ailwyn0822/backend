@extends('layouts/app')

@section('css')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/bb">後臺</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="/admin/bbtype">比奇堡居民分類表</a></li>
        </ol>
      </nav>

      <a class="btn btn-info mt-5 mb-5" href="/admin/bbtype/create">新增類別</a>

      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>種類名稱</th>
                <th>排序</th>
                <th>功能</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($bb as $b)
            <tr>
                <td>{{$b->type_name}}</td>
                <td>{{$b->sort}}</td>
                <td>
                    <a class="btn btn-success" href="/admin/bbtype/edit/{{$b->id}}">編輯</a>
                    <button data-bbid="{{$b->id}}" class="btn btn-lg btn btn-danger btn-del">刪除</button>
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
                    window.location.href=`/admin/bbtype/destroy/${this.dataset.bbid}`;
                }
            });

    });

 </script>
@endsection

