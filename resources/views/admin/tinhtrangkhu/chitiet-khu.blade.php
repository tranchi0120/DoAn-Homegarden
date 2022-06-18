@extends('layouts.admin')



@section('title')
<title>Chi Tiết Khu Tình Trạng Khu</title>
@endsection

@section('content')
<a class="back" href="http://127.0.0.1:8000/admin/tinhtrangkhu">QUAY LẠI</a>
<div class="form">

    <h2 class="title">CHI TIẾT TÌNH TRẠNG KHU CÂY TRỒNG</h2>
    <div class="row">
        <h3 class="name">Tên Khu: </h3 class="name">
        <span class="content">{{ $data->TenKhu }}</s>
    </div>


    <div class="row">
        <h3 class="name">Tên Cây : </h3 class="name">
        <span class="content">{{ $data->CayTrong->TenCay }}</s>
    </div>


    <div class="row">
        <h3 class="name">Số Lượng Cây: </h3 class="name">
        <span class="content">{{ $data->SoLuong }} Cây</s>
    </div>

    <div class="row">
        <h3 class="name">Số Lượng Cây Chêt : </h3 class="name">
        <span class="content">{{ $data->SoLuongChet }} Cây</s>
    </div>



    <div class="row">
        <h3 class="name">Người Chăm Cây : </h3 class="name">
        <span class="content">{{ $data->USER->name }}</s>
    </div>


    <div class="row">
        <h3 class="name">Ghi Chú :</h3 class="name">
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
    color: black;
}
</style>
@endsection