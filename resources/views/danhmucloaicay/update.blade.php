@extends('layouts.admin')

@section('title')
  <title>Danh mục loại cây</title>
@endsection

@section('content')
 
 <div class="container">

        <div class="card-body">
            <form action="{{route('danhmuc.update',$name->id)}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tên Loại Cây</strong>
                            <input class="form-control" type="text" name="Tenloaicay" value="{{$name->Tenloaicay}}">
                        </div>
                   </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Cập Nhật</button></div>
            </form>
        </div>

        </div>
@endsection

