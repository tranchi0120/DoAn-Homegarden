@extends('layouts.admin')

@section('title')
    <title>Danh Mục Khu</title>
@endsection

@section('content')
    <div class="container">

        <div class="card-body">
            <form action="{{ route('k.update', $name->id) }}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tên Khu</strong>
                            <input class="form-control" type="text" name="TenKhu" value="{{ $name->TenKhu }}">

                        </div>
                        <div class="form-group">
                            <strong>Số Lượng </strong>
                            <input class="form-control" type="number" name="SoLuong" value="{{ $name->SoLuong }}">

                        </div>

                        <div class="form-group">
                            <strong>Số Lượng chet </strong>
                            <input class="form-control" type="number" name="SoLuongChet"
                                value="{{ $name->SoLuongChet }}">

                        </div>
                        <div class="form-group">
                            <strong>Ngày Trồng </strong>
                            <input class="form-control" type="date" name="NgayTrongCay"
                                value="{{ $name->NgayTrongCay }}">

                        </div>
                        <div class="form-group">
                            <strong>Ngày Thu </strong>
                            <input class="form-control" type="date" name="NgayThuHoach"
                                value="{{ $name->NgayThuHoach }}">

                        </div>

                        <div class="form-group">
                            <strong>Người Chăm Cây</strong>
                            <select class="select2_single form-control" name="User_ID" aria-label="Default select example">

                                @foreach ($user as $data)
                                    <option value="{{ $data->id }}" selected={{ $data->id === $name->User_ID }}>
                                        {{ $data->name }} </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <strong>Tên Cây Trồng</strong>
                            <select class="select2_single form-control" name="Caytrong_ID"
                                aria-label="Default select example">
                                @foreach ($caytrong as $data)
                                    <option value="{{ $data->id }}" selected={{ $data->id === $name->Caytrong_ID }}>
                                        {{ $data->TenCay }} </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group now    ">
                            <strong>Ghi Chus</strong>
                            <div class="col-ml-9 col-sm-9">
                                <textarea id="noidung" name="GhiChu" cols="30" rows="3" class="form-control ">{{ $name->GhiChu }}</textarea>

                            </div>
                        </div>
                        <script>
                            CKEDITOR.replace('GhiChu', {
                                language: 'en'
                            });
                        </script>

                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Cập Nhật</button></div>
            </form>
        </div>

    </div>
@endsection
