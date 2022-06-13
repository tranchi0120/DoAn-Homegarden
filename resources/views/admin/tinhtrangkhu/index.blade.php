@extends('layouts.admin')

@section('title')
    <title>Tình Trạng Cây Trồng</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Tình Trạng Khu Cây Trồng</h3>
                </div>
                {{-- <div class="pull-right" style="margin-top: 20px;">
                    <a class="btn btn-success" href="{{route('tinhtrang.create')}}">Thêm mới
                    </a>
                </div> --}}
            </div>
        </div>


        <table class="table table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Tên Khu</th>
                <th>Số Lượng</th>
                <th>Số Lượng Chết</th>
                <th>Người Chăm Sóc</th>
                <th>Chi Tiet</th>
                <th width="280px">Hành động</th>



            </tr>
            @foreach ($khu as $data)
                <tr>

                    <td>{{ $data->id }}</td>
                    <td>{{ $data->TenKhu }}</td>
                    <td>{{ $data->SoLuong }}</td>
                    <td>{{ $data->SoLuongChet }}</td>
                    <td>{{ $data->USER->name }}</td>
                    <td><a href="{{ route('admin.tinhtrangkhu.chitiet', ['id' => $data->id]) }}">Chi Tiet</a></td>






                    <td>
                        <a class="btn btn-primary" href="{{ route('tinhtrang.edit', $data->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf

                    </td>

                </tr>
            @endforeach

        </table>



    </div>
@endsection
