@extends('layouts.admin')

@section('title')
    <title>Cập Nhật Cây Trồng</title>
@endsection

@section('content')
    <div class="container">
        <div class="card-body">
            <form action="{{ route('ct.update', $name->id) }}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Loại Cây</strong>
                            <select class="select2_single form-control" name="Loaicay_ID"
                                aria-label="Default select example">
                                @foreach ($danhmucloaicay as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $data->id === $name->Loaicay_ID ? 'selected' : '' }}>
                                        {{ $data->Tenloaicay }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Tên Cây</strong>
                            <input class="form-control" type="text" name="TenCay" value="{{ $name->TenCay }}">
                        </div>
                        <div class="form-group " style="height: 500px">
                            <div class="title">
                                <strong>Giai Đoạn Phun Thuốc</strong>
                            </div>
                            <div class="col-ml-9 col-sm-9">
                                <textarea id="noidung" name="GiaiDoanPhunThuoc" cols="30" rows="3" class="form-control " placeholder="mieu ta">{{ $name->GiaiDoanPhunThuoc }}</textarea>
                            </div>
                            <script>
                                CKEDITOR.replace('GiaiDoanPhunThuoc', {
                                    language: 'en'
                                });
                            </script>
                        </div>
                        <div class="form-group ">
                            <div>
                                <strong>Ghi Chú</strong>
                            </div>
                            <div class="col-ml-9 col-sm-9">
                                <textarea id="noidung" name="GhiChu" cols="30" rows="3" class="form-control " placeholder="mieu ta">{{ $name->GhiChu }}</textarea>
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
