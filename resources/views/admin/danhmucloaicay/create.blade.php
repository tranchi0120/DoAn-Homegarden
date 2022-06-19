@extends('layouts.admin')

@section('title')
<title>Thêm Danh Mục Cây Trồng</title>
@endsection

@section('content')

<div class="container">

    <div class="card-body">
        <form action="{{route('danhmuc.store')}}" method="post">
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
                        <input class="form-control" type="text" name="Tenloaicay" placeholder="mời nhập">
                        @error('Email')
                        Vui lòng nhập tên loại
                        @enderror
                    </div>
                </div>

            </div>
            <div class="mt-2"><button type="submit" class="btn btn-primary">Lưu</button></div>
        </form>
    </div>

</div>
@endsection