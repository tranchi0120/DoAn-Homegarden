@extends('layouts.admin')

@section('title')
    <title>Nhập Cây Trồng Trong Khu</title>
@endsection

@section('content')
    <div class="container">

        <div class="card-body">
            <form action="{{ route('nhapcay.store') }}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <strong>Khu</strong>
                            <select class="select2_single form-control" name="Khu_ID" aria-label="Default select example">
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
                            <input class="form-control" id="soluong" type="number" name="SoLuong" placeholder="mời nhập"
                                value="{{ old('SoLuong') }}">

                        </div>
                        <div class="form-group">
                            <strong>Giá Nhập</strong>
                            <input class="form-control" id="gianhap" type="number" name="GiaNhap" placeholder="mời nhập"
                                value="{{ old('GiaNhap') }}" />

                        </div>
                        <div class="form-group">
                            <strong>Tổng Tiền</strong>
                            <input class="form-control" id="tongtien" type="number" name="TongTien"
                                value="{{ old('SoLuong') * old('GiaNhap') }}">

                        </div>


                        <div class="form-group">
                            <strong>Người Nhập</strong>
                            <select class="select2_single form-control" name="User_ID" aria-label="Default select example">
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


@section('scripts')
    <script>
        (function($) {
            var soluong, gianhap = 0;
            console.log(soluong);
            $(document).ready(function() {
                $("#soluong").keydown(function() {
                    soluong = $(this).val();
                })
                $("#gianhap").keydown(function() {
                    gianhap = $(this).val();
                })
                console.log(soluong, gianhap);
                $(#tongtien).val(soluong * gianhap);
            });
        })
    </script>
@endsection