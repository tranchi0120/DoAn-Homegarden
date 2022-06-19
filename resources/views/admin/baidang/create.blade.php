@extends('layouts.admin')

@section('title')
<title>Thêm Bài Đăng</title>
@endsection

@section('content')
<div class="container">

    <div class="card-body">
        <form enctype="multipart/form-data" action="{{ route('tin.store') }}" method="post">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                Kiểm tra lại dữ liệu
            </div>
            @endif

            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <strong>Tiêu Đề</strong>
                        <input class="form-control" type="text" name="TieuDe" placeholder="mời nhập">
                    </div>


                    <div class="form-group" style="display:flex">
                        <strong>Nội Dung</strong>
                        <div class="col-ml-9 col-sm-9">
                            <textarea id="ghichu" name="NoiDung" cols="30" rows="3" class="form-control "></textarea>

                        </div>
                    </div>
                    <script>
                    CKEDITOR.replace('ghichu', {
                        language: 'en'
                    });
                    </script>


                    <div class="form-group  ">
                        <Strong class="col-sm-3 text-end control-label col-form-label">Hình Ảnh </Strong>
                        <div class="custom-file">
                            <input type="file" name="image" />
                        </div>
                    </div>
                    <div class="form-group">
                        <strong>Ngày Đăng</strong>
                        <input class="form-control" type="date" name="NgayDang" placeholder="mời nhập">
                    </div>

                    <div class="form-group">
                        <strong>Người Đăng</strong>
                        <select class="select2_single form-control" name="User_ID" aria-label="Default select example">
                            <option> --chọn người đăng-- </option>
                            @foreach ($user as $data)
                            <option value="{{ $data->id }}"> {{ $data->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
            <div class="mt-2"><button type="submit" class="btn btn-primary">Lưu</button></div>
        </form>
    </div>

</div>
@endsection