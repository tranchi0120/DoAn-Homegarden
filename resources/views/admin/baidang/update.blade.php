@extends('layouts.admin')

@section('title')
    <title>Cập Nhật Cây Trồng</title>
@endsection

@section('content')
    <div class="container">
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('tin.update', $name->id) }}" method="post">
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
                            <input class="form-control" type="text" name="TieuDe" value="{{ $name->TieuDe }}">

                        </div>



                        <div class="form-group " style="height: 500px">
                            <div class="title">
                                <strong>Nội Dung</strong>
                            </div>

                            <div class="col-ml-9 col-sm-9">
                                <textarea id="noidung" name="NoiDung" cols="30" rows="3" class="form-control ">{{ $name->NoiDung }}</textarea>
                            </div>

                            <script>
                                CKEDITOR.replace('noidung', {
                                    language: 'en'
                                });
                            </script>
                        </div>

                        <!-- <div class="form-group  ">
                            <Strong class="col-sm-3 text-end control-label col-form-label">Hình Ảnh </Strong>
                            <div class="custom-file">
                                <input type="file" name="image" value="{{ $name->image }}" />
                            </div>
                        </div> -->

                        <div class="form-group">
                            <strong>Ngày Đăng</strong>
                            <input class="form-control" type="date" name="NgayDang" value="{{ $name->NgayDang }}">
                        </div>

                        <div class="form-group">
                            <strong>Người Đăng</strong>
                            <select class="select2_single form-control" name="User_ID" aria-label="Default select example">

                                @foreach ($user as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $data->id === $name->User_ID ? 'selected' : '' }}>
                                        {{ $data->name }} </option>
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
