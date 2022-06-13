@extends('layouts.admin')

@section('title')
    <title>Liên Hệ</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Thông Tin Liên Hệ</h3>

                </div>
            </div>
        </div>


        <table class="tb table table-striped">
            <tr class="table-dark">

                <th>Họ Và Tên</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Nội Dung</th>

            </tr>
            @foreach ($lienhe as $data)
                <tr>

                    <td>{{ $data->HoTen }}</td>
                    <td>{{ $data->Email }}</td>
                    <td>{{ $data->Sdt }}</td>
                    <td>{!! $data->NoiDung !!}</td>
                </tr>
            @endforeach

        </table>

        <div>
            {{ $lienhe->links() }}
        </div>

    </div>
@endsection
@section('css')
    <style>

    </style>
@endsection
