@extends('layouts.admin')

@section('title')
    <title>Cập Nhật</title>
@endsection

@section('content')
    <div class="container">
        <div class="card-body">
            <form action="{{ route('tinhtrang.update', $name->id) }}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">


                        {{-- <div class="form-group  ">
                            <Strong class="col-sm-3 text-end control-label col-form-label">Hình Ảnh </Strong>
                            <div class="custom-file">
                                <input name="HinhAnh"  type="file" name="myImage" accept="image/*" />
                            </div>
                        </div> --}}


                        <div class="form-group">
                            <strong>Số Lượng</strong>
                            <input class="form-control" type="text" name="SoLuong" disabled value="{{ $name->SoLuong }}">

                        </div>
                        <div class="form-group">
                            <strong>Số Lượng Chết</strong>
                            <input class="form-control" type="text" name="SoLuongChet" value="{{ $name->SoLuongChet }}">

                        </div>

                        <div class="form-group " style="display:flex">
                            <strong>Ghi Chú</strong>
                            <div class="col-ml-9 col-sm-9">
                                <textarea id="noidung" name="GhiChu" cols="30" rows="3" class="form-control ">{{ $name->GhiChu }}</textarea>
                            </div>
                        </div>
                        <script>
                            CKEDITOR.replace('noidung', {
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
