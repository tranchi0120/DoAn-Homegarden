@extends('layouts.admin')

@section('title')
  <title>Cập Nhật Cây Trồng</title>
@endsection

@section('content')
 
 <div class="container">

        <div class="card-body">
            <form action="{{route('ct.update',$name->id)}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Loại Cây</strong>
                            
                            <select class="form-select" name="Loaicay_ID" aria-label="Default select example">
                           {{-- <option   tion selected>Loại Cây</option> --}}
                           @foreach($danhmucloaicay as $data)
                            <option value="{{$data->id}}">{{$data->Tenloaicay}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Tên Cây</strong>
                            <input class="form-control" type="text" name="TenCay" value="{{$name->TenCay}}">
                           
                        </div>
                        <div class="form-group">
                            <strong>hình ảnh</strong>
                            <input class="form-control" type="text" name="HinhAnh" value="{{$name->HinhAnh}}">
                           
                        </div>
                        <div class="form-group">
                            <strong>Số lượng</strong>
                            <input class="form-control" type="text" name="SoLuong" value="{{$name->SoLuong}}">
                           
                        </div>
                        <div class="form-group">
                            <strong>giai đoạn phun thuốc</strong>
                            <input class="form-control" type="text" name="GiaiDoanPhunThuoc" value="{{$name->GiaiDoanPhunThuoc}}">
                          
                        </div>
                       
                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Cập Nhật</button></div>
            </form>
        </div>

        </div>
@endsection

