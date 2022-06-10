@extends('layouts.admin')

@section('title')
    <title>Tin Tức</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Thông Tin Liên Hệ Khách Hàng</h3>
                </div>
            </div>
        </div>


        <table class="tb table table-striped">
            <tr class="table-dark">
                {{-- <th>ID</th> --}}
                <th>Họ Và Tên</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Nội Dung</th>

                <th width="280px">Thao Tác</th>
            </tr>
            @foreach ($lienhe as $data)
                <tr>

                    <td>{{ $data->HoTen }}</td>
                    <td>{{ $data->SDT }}</td>
                    <td>{{ $data->Email }}</td>
                    <td>{{ $data->NoiDung }}</td>


                    <td>

                        @csrf
                        {{-- <a href="{{ route('tin.destroy', $data->id) }}" class="btn btn-danger action_delete">
                            <i class="fas fa-trash"></i>
                        </a> --}}
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>



    </div>
@endsection
