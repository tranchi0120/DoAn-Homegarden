
@extends('layouts.admin')

@section('title')
  <title>Danh Mục Cây Trồng</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Danh Mục Cây Trồng</h3>
                </div>
                <div class="pull-right" style="margin-top: 20px;">
                    <a type="button" class="btn btn-primary"  href="{{route('ct.create')}}">Thêm mới
                    </a>
                </div>
            </div>
        </div>

       
        <table class="table table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Loại Cây</th>
                <th>Tên Cây</th>
                <th>Hình Ảnh</th>
                  <th>Giá Tiền</th>
                <th>Giai Đoạn Phun Thuốc</th>
                <th>Ghi Chus</th>
                <th width="280px">Hành động</th>
            </tr>
             @foreach ($caytrong as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->DanhMucLoaiCay->Tenloaicay}}</td>
                    <td>{{$data->TenCay }}</td> 
                    <td><img src="../boostrap/assets/img/{{$data->HinhAnh }}" class="images" alt="Girl in a jacket" width="50px" height="50px"></td>
                    <td>{{$data->GianTien }} VNĐ</td>
                    <td><textarea  cols="30" rows="10">{{$data->GiaiDoanPhunThuoc }}</textarea> </td>
                    <td>{{$data->GhiChu }} </td>
                    
                    <td>
                        <a class="btn btn-primary " href="{{route('ct.edit',$data->id)}}">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        @csrf
                        <a href="{{route('ct.destroy',$data->id)}}" class="btn btn-danger action_delete">
                            <i class="fas fa-trash"></i>
                        </a>
                        </form>
                    </td>

                </tr>
            @endforeach
     
        </table>  
    </div>

@endsection