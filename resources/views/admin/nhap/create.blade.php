@extends('layouts.admin')

@section('title')
<title>Nhập Cây Trồng Trong Khu</title>
@endsection

@section('content')
<div class="container">

    <div class="card-body">
        <form action="{{ route('nhapcay.store') }}" method="post">
            @csrf
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif

            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <strong>Khu</strong>
                        <select class="select2_single form-control" name="Khu_ID" aria-label="Default select example">
                            <option> --chọn khu-- </option>
                            @foreach ($khu as $data)
                            <option value="{{ $data->id }}"> {{ $data->TenKhu }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Ngày Nhập</strong>
                        <input class="form-control" type="date" name="NgayNhap" placeholder="mời nhập">

                    </div>

                    <div class="form-group">
                        <strong>Số Lượng</strong>
                        <input id="soluong" class="form-control" type="number" name="SoLuong" placeholder="mời nhập"
                            value="0" />

                    </div>


                    <div class="form-group">
                        <strong>Giá Nhập</strong>
                        <input id="gianhap" class="form-control" type="number" name="GiaNhap" placeholder="mời nhập"
                            value="0" />

                    </div>
                    <div class="form-group">
                        <strong>Tổng Tiền</strong>
                        <input id="tongtien" class="form-control" type="number" name="TongTien" />

                    </div>

                    <div class="form-group">
                        <strong>Người Nhập</strong>
                        <select class="select2_single form-control" name="User_ID" aria-label="Default select example">
                            <option> --người nhập-- </option>
                            @foreach ($user as $data)
                            <option value="{{ $data->id }}"> {{ $data->name }} </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group" style="display:flex">
                        <strong>Ghi Chú</strong>
                        <div class="col-ml-9 col-sm-9">
                            <textarea id="ghichu" name="GhiChu" cols="30" rows="3" class="form-control "></textarea>

                        </div>
                    </div>

                    <script>
                    CKEDITOR.replace('ghichu', {
                        language: 'en'
                    });
                    </script>

                </div>

            </div>
            <div class="mt-2"><button type="submit" class="btn btn-primary">Lưu</button></div>
        </form>
    </div>

</div>
@endsection