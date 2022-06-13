@extends('layouts.admin')

@section('title')
    <title>Nhập Cây trồng</title>
@endsection

@section('content')
    <div class="container">



        <table class="table table-striped">
            <tr class="table-dark">

                <th>Khu</th>
                <th>Tên Cây</th>
                <th>Người Nhập</th>
                <th>Ngày Nhập</th>
                <th>Số Lượng</th>
                <th>Giá Nhập</th>
                <th>Tổng Tiền</th>
                <th>Ghi Chú</th>


                {{-- <th width="280px">Thao Tác</th> --}}
            </tr>
            @foreach ($nhap as $data)
                <tr>

                    <td>{{ $data->Khu->TenKhu }}</td>
                    <td>{{ $data->Khu->CayTrong->TenCay }}</td>
                    <td>{{ $data->User->name }}</td>
                    <td>{{ $data->NgayNhap }}</td>
                    <td>{{ $data->SoLuong }}</td>
                    <td>{{ number_format($data->GiaNhap) }} Vnđ</td>
                    <td>{{ number_format($data->TongTien) }} Vnđ</td>
                    <td>{!! $data->GhiChu !!}</td>
                    @csrf


                </tr>
            @endforeach

        </table>



    </div>
@endsection
