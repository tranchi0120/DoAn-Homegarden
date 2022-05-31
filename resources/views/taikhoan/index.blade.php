
@extends('layouts.admin')

@section('title')
  <title>Danh mục Tài Khoản</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Danh mục Tài Khoản</h3>
                </div>
                <div class="pull-right" style="margin-top: 20px;">
                    <a class="btn btn-success" href="{{route('tk.create')}}">Thêm mới
                    </a>
                </div>
            </div>
        </div>

       
        <table class="table table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Họ Và Tên</th>
                <th>Email</th>
                <th>Mật Khẩu</th>
                  <th>Gioi Tinh</th>
                {{-- <th>Ngày Sinh</th> --}}
                <th>SDT</th>
                <th>Quyền</th>
               
                <th width="280px">Hành động</th>
            </tr>
             @foreach ($taikhoan as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->HoTen }}</td>
                    <td>{{ $data->Email }}</td> 
                    <td>{{ $data->MatKhau }}</td>
                    <td>{{ $data->GioiTinh }}</td>
                    {{-- <td>{{ $data->NgaySinh }}</td> --}}
                    <td>{{ $data->SDT}}</td>
                    <td>{{ $data->LoaiQuyen->TenQuyen}}</td>
                   
                    <td>
                        <a class="btn btn-primary" href="{{route('tk.edit',$data->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf
                        <a href="{{route('tk.destroy',$data->id)}}" class="btn btn-danger action_delete">
                            <i class="fas fa-trash"></i>
                        </a>
                        </form>
                    </td>

                </tr>
            @endforeach
     
        </table>

    
        
    </div>

@endsection