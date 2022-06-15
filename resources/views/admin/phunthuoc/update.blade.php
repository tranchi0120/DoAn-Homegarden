@extends('layouts.admin')

@section('title')
    <title>Cập Nhật Lịch Phun Thuốc</title>
@endsection

@section('content')
    <div class="container">

        <div class="card-body">
            <form action="{{ route('pt.update', $name->id) }}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Ngày Phun Thuốc</strong>
                            <input class="form-control" type="date" name="NgayPhunThuoc"
                                value="{{ $name->NgayPhunThuoc }}">

                        </div>
                        <div class="form-group">
                            <strong>Tên Thuốc</strong>
                            <input class="form-control" type="text" name="TenThuoc" value="{{ $name->TenThuoc }}">
                            @error('Email')
                                Vui lòng nhập
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Liều Lượng</strong>
                            <input class="form-control" type="text" name="LieuLuong" value="{{ $name->LieuLuong }}">
                            @error('Password')
                                Vui lòng nhập
                            @enderror
                        </div>
                        <div class="form-group ghichu ">
                            <strong>Ghi Chú</strong>
                            <div class="col-ml-9 col-sm-9">
                                <textarea id="noidung" name="GhiChu" cols="30" rows="3" class="form-control ">{{ $name->GhiChu }}</textarea>

                            </div>
                        </div>
                        <script>
                            CKEDITOR.replace('GhiChu', {
                                language: 'en'
                            });
                        </script>
                        <div class="form-group">
                            <strong>Người Phun Thuốc</strong>
                            <select class="select2_single form-control" name="User_ID" aria-label="Default select example">

                                @foreach ($user as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $data->id === $name->User_ID ? 'selected' : '' }}>
                                        {{ $data->name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <strong>Khu Vực</strong>
                            <select class="select2_single form-control" name="Khu_ID" aria-label="Default select example">

                                @foreach ($khu as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $data->id === $name->Khu_ID ? 'selected' : '' }}>
                                        {{ $data->TenKhu }} </option>
                                @endforeach
                            </select>
                        </div>



                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Cập Nhật</button></div>
            </form>
        </div>

    </div>
@endsection

@section('css')
    <style>
        .ghichu {
            display: flex;
        }
    </style>
@endsection
