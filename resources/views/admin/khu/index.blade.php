
@extends('layouts.admin')

@section('title')
  <title>Khu Cây Trồng</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Khu Cây Trồng</h3>
                </div>
                <div class="pull-right" style="margin-top: 20px;">
                    <a class="btn btn-success" href="{{route('k.create')}}">Thêm mới
                    </a>
                </div>
            </div>
        </div>

       
        <table class="table table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Tên Khu</th>
                <th>Loại Cây</th>
                <th>Tên Cây </th>
                <th>Trạng Thái</th>
                <th>Số Lượng</th>
                  <th>Ngày Trồng</th>
                <th>Ngày Thu Hoạch</th>
               
                <th>Người Chăm sóc</th>
                <th width="280px">Hành động</th>
            </tr>
             @foreach ($khu as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->TenKhu}}</td>
                    <td>{{$data->CayTrong->DanhMucLoaiCay->Tenloaicay}}</td>
                    <td>{{$data->CayTrong->TenCay}}</td>
                    <td>{{$data->TrangThai }}</td> 
                    <td>{{$data->SoLuong }}</td>
                    <td>{{$data->NgayTrongCay }}</td>
                    <td>{{$data->NgayThuHoach }}</td>
                    <td>{{ $data->USER->name }}</td>
                    
                    
                    <td>
                        <a class="btn btn-primary" href="{{route('k.edit',$data->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf
                        <a href="{{route('k.destroy',$data->id)}}" class="btn btn-danger action_delete">
                            <i class="fas fa-trash"></i>
                        </a>
                        </form>
                    </td>

                </tr>
            @endforeach
     
        </table>

    
        
    </div>

@endsection