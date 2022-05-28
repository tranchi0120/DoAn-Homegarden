@extends('layouts.admin')

@section('title')
  <title>Danh Mục QUyền</title>
@endsection

@section('content')
 
 <div class="container">

        <div class="card-body">
            <form action="{{route('q.update',$name->id)}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tên Quyền</strong>
                            <input class="form-control" type="text" name="TenQuyen" value="{{$name->TenQuyen}}">
                        </div>
                   </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Cập Nhật</button></div>
            </form>
        </div>

        </div>
@endsection

