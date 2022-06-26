@extends('layouts.admin')

@section('title')
    <title>Tin Tức</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Tin Tức</h3>
                </div>
                <div class="pull-right" style="margin-top: 20px;">
                    <a class="btn btn-success" href="{{ route('tin.create') }}">Thêm mới
                    </a>
                </div>
            </div>
        </div>


        <table class="tb table table-striped">
            <tr class="table-dark">
                {{-- <th>ID</th> --}}
                <th>Người Đăng</th>
                <th>Ngày Đăng</th>
                <th>Tiêu Đề</th>
                <th>Hình Ảnh</th>
                {{-- <th style="width:500px">Nội Dung</th> --}}

                <th width="280px">Thao Tác</th>
            </tr>
            @foreach ($baidang as $data)
                <tr>
                    {{-- <td>{{ $data->id }}</td> --}}
                    <td>{{ $data->USER->name }}</td>
                    <td>{{ $data->NgayDang }}</td>
                    <td>{{ $data->TieuDe }}</td>
                    <td><img src="{{ asset('/images') }}/{{ $data->HinhAnh }}" class="images"
                            alt="Girl in a jacket" width="50px" height="50px"></td>
                    {{-- <td>{!! $data->NoiDung !!}</td> --}}


                    <td>
                        <a class="btn btn-primary" href="{{ route('tin.edit', $data->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf
                        <a href="{{ route('tin.destroy', $data->id) }}" class="btn btn-danger action_delete">
                            <i class="fas fa-trash"></i>
                        </a>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <div>
            {{ $baidang->links() }}
        </div>



    </div>
@endsection
@section('css')
    <style>

    </style>
@endsection
