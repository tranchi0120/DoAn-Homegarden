@extends('layouts.admin')

@section('title')
<title>Xuất Cây trồng</title>
@endsection

@section('content')
<div class="container">





    <table class="table table-striped">
        <tr class="table-dark">
            {{-- <th>ID</th> --}}
            <th>Khu</th>
            <th>Tên Cây</th>
            <th>Người Xuất</th>
            <th>Ngày Xuất</th>
            <th>Số Lượng</th>
            <th>Giá Xuất</th>
            <th>Tổng Tiền</th>
            <th>Ghi Chú</th>
            <th>Sdt khách hàng</th>
            <th>Tên Khách Hàng</th>



        </tr>
        @foreach ($xuat as $data)
        <tr>
            {{-- <td>{{ $data->id }}</td> --}}
            <td>{{ $data->Khu->TenKhu }}</td>
            <td>{{ $data->Khu->CayTrong->TenCay }}</td>
            <td>{{ $data->User->name }}</td>
            <td>{{ $data->NgayXuat }}</td>
            <td>{{ $data->SoLuong }}</td>
            <td>{{ number_format($data->GiaXuat) }} Vnđ</td>
            <td>{{ number_format($data->TongTien) }} Vnđ</td>
            <td>{!! $data->GhiChu !!}</td>
            <td>{{ $data->Sdt }}</td>
            <td>{{ $data->TenKhachHang }}</td>

            @csrf

        </tr>
        @endforeach

    </table>



</div>
@endsection