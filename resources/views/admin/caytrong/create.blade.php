@extends('layouts.admin')

@section('title')
<title>Thêm Cây Trồng</title>
@endsection

@section('content')
<div class="container">

    <div class="card-body">
        <form action="{{ route('ct.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Loại Cây</strong>
                        <select class="select2_single form-control" name="Loaicay_ID"
                            aria-label="Default select example">
                            <option> --chọn loại cây-- </option>
                            @foreach ($danhmucloaicay as $data)
                            <option value="{{ $data->id }}"> {{ $data->Tenloaicay }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Tên Cây</strong>
                        <input class="form-control" type="text" name="TenCay" placeholder="mời nhập">

                    </div>
                    <div class="form-group  ">
                        <Strong class="col-sm-3 text-end control-label col-form-label">Hình Ảnh </Strong>
                        <div class="custom-file">
                            <input type="file" name="image" />
                        </div>
                    </div>

                    <div class="form-group" style="display: flex">
                        <strong>Giai Doan Phun Thuoc</strong>

                        <div class="col-ml-9 col-sm-9">
                            <textarea id="phunthuoc" name="GiaiDoanPhunThuoc" cols="30" rows="3"
                                class="form-control "></textarea>

                        </div>
                    </div>
                    <script>
                    CKEDITOR.replace('phunthuoc', {
                        language: 'en'
                    });
                    </script>

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
{{-- @section('js')
    <script src="{{ asset('../themes/build/js/simple.money.format.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.tiencay').simpleMoneyFormat();
})
</script>
@endsection --}}