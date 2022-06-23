@extends('layouts.admin')

@section('title')
<title>Thêm Khu</title>
@endsection

@section('content')
<div class="container">

    <div class="card-body">
        <form action="{{ route('k.store') }}" method="post">
            @csrf
            @if ($errors->any())
            <div style="margin-top: 30px;" class="alert alert-danger">
                Kiểm tra lại dữ liệu
            </div>
            @endif

            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <div class="form-group">
                            <strong>Tên Khu</strong>
                            <input class="form-control" type="text" name="TenKhu" placeholder="mời nhập">

                        </div>
                    </div>

                    <div class="form-group">
                        <strong>Số Lượng</strong>
                        <input class="form-control" type="number" name="SoLuong" placeholder="mời nhập">

                    </div>
                    {{-- <div class="form-group">
                            <strong>Số Lượng chet</strong>
                            <input class="form-control" type="number" name="SoLuongChet" placeholder="mời nhập">

                        </div> --}}
                    {{-- <div class="form-group">
                            <strong>Ngày Trồng</strong>
                            <input class="form-control" type="date" name="NgayTrongCay" placeholder="mời nhập">
                        </div>


                        <div class="form-group">
                            <strong>Ngày Thu</strong>
                            <input class="form-control" type="date" name="NgayThuHoach" placeholder="mời nhập">
                        </div> --}}

                    <div class="form-group">
                        <strong>Người Chăm Cây</strong>
                        <select class="select2_single form-control" name="User_ID" aria-label="Default select example">
                            <option> --chọn người chăm sóc-- </option>
                            @foreach ($user as $data)
                            <option value="{{ $data->id }}"> {{ $data->name }} </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <strong>Tên Cây Trồng</strong>
                        <select class="select2_single form-control" name="Caytrong_ID"
                            aria-label="Default select example">
                            <option> --chọn tên cây-- </option>
                            @foreach ($caytrong as $data)
                            <option value="{{ $data->id }}"> {{ $data->TenCay }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" style="display:flex">
                        <strong>Ghi Chú</strong>

                        <div class="col-ml-9 col-sm-9">
                            <textarea id="GhiChu" name="GhiChu" cols="30" rows="3" class="form-control "></textarea>

                        </div>
                    </div>
                    <script>
                    CKEDITOR.replace('GhiChu', {
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