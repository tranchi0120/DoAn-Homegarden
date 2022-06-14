@extends('layouts.admin')



@section('title')
    <title>Chi Tiet Cay Trong</title>
@endsection

@section('content')
    <a class="back" href="http://127.0.0.1:8000/admin/caytrong">QUAY LẠI</a>
    <div class="form">

        <h2 class="title">CHI TIẾT CÂY TRỒNG</h2>
        <div class="row">
            <h3 class="name">loại cây trồng : </h3>
            <span class="content">{{ $data->DanhMucLoaiCay->Tenloaicay }}</s>
        </div>


        <div class="row">
            <h3 class="name">Tên Cây : </h3>
            <span class="content">{{ $data->TenCay }}</s>
        </div>




        <div class="row">
            <h3 class="name">Giai Đoạn Phun Thuốc </h3>
            <span class="content">{!! $data->GiaiDoanPhunThuoc !!}</s>
        </div>

        <div class="row">
            <h3 class="name">Ghi Chú </h3>
            <span class="content">{!! $data->GhiChu !!}</s>
        </div>

    </div>
@endsection

@section('css')
    <style>
        .form {
            border: 1px solid;
            padding: 80px;
            background: #e7eee7;
            max-width: 1000px;
            margin: 60px auto;
        }

        .content {
            color: black;
            padding: 10px;
            justify-content: center;
            font-size: 1.5rem;
        }

        .title {
            TEXT-ALIGN: CENTER;
            COLOR: BLACK;
            FONT-SIZE: 2.5REM;
            margin-bottom: 20px;
        }

        .back {
            COLOR: BLACK;
            FONT-SIZE: 1.5REM;
            BORDER-BOTTOM: 1PX SOLID;
        }

        .name {
            color: black
        }
    </style>
@endsection
