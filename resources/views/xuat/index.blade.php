
@extends('layouts.admin')

@section('title')
  <title>Danh mục Xuất Cây trồng</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Danh mục Xuất Cây trồng</h3>
                </div>
                <div class="pull-right" style="margin-top: 20px;">
                    <a class="btn btn-success" href="{{route('x.create')}}">Thêm mới
                    </a>
                </div>
            </div>
        </div>

       
        <table class="table table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Khu</th>
                <th>Tên Cây</th>
                <th>Người Xuất</th>
                <th>Ngày Xuất</th>
                <th>Số Lượng</th>
                <th>Giá Xuất</th>
                <th>Tổng Tiền</th>
                <th>Ghi Chú</th>
                
               
                <th width="280px">Hành động</th>
            </tr>
             @foreach ($xuat as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->Khu_ID }}</td>
                    <td>{{ $data->Caytrong_ID }}</td> 
                    <td>{{ $data->Nhanvien_ID }}</td>
                    <td>{{ $data->NgayXuat }}</td>
                    <td>{{ $data->SoLuong }}</td>
                    <td>{{ $data->GiaXuat}}</td>
                    <td>{{ $data->TongTien}}</td>
                    <td>{{ $data->GhiChu}}</td>
                   
                    <td>
                        <a class="btn btn-primary" href="{{route('x.edit',$data->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf
                        <a href="{{route('x.destroy',$data->id)}}" class="btn btn-danger action_delete">
                            <i class="fas fa-trash"></i>
                        </a>
                        </form>
                    </td>

                </tr>
            @endforeach
     
        </table>

    
        
    </div>

@endsection