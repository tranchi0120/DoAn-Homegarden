
@extends('layouts.admin')


 
@section('title')
  <title>Chi Tiet Cay Trong</title>
@endsection

@section('content')
    <div class="form">
      
                       <h3>loại cây trồng : </h3> <p>{{$data->DanhMucLoaiCay->Tenloaicay}}</p>
     
                     
                      <h3>Tên Cây Trồng:</h3>
                      <h3>Giá Tiền :</h3>
                      <h3>Giai Đoạn Phun Thuốc:</h3>
                      <h3>Ghi Chú:</h3>



                   
                    <span class="name"> Tên Cây Trồng: {{$data->TenCay }}</span> 
                    {{-- <span class="name"> Hình Ảnh:<img src="{{asset('/images')}}/{{$data->HinhAnh}}" class="images" alt="Girl in a jacket" width="50px" height="50px"></span> --}}
                    <span class="name"> Giá Tiền:{{ number_format($data->GianTien) }} VNĐ</span>
                    <span class="name-note">
                      Giai Đoạn Phun Thuốc:<div class="note"> {!!$data->GiaiDoanPhunThuoc !!}
                      </div>  </span>
                     <span class="name-note"> Ghi Chú: {!!$data->GhiChu !!} </span> 

    
         
    </div>
    
@endsection

@section('css')

  <style>


.form{
  max-width: 1200px;
}
  .name{
        padding: 10px;
        display: block;
  }

  .name-note{
    padding: 10px;
    display: flex;
  }
  

  </style>
 
  
@endsection