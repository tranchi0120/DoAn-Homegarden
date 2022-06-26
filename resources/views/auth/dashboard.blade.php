@extends('layouts.admin')

@section('title')
    <title>Khu Cây Trồng</title>
@endsection

@section('content')
    <div class="container">


        <div class="row">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats o1">
                    
                    <div class="count">{{ $khu }} Khu</div>

                    <h3 style="color:white;">Tổng Số Khu</h3>

                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats o2">
                    
                    <div class="count">{{ $caytrong }} Cây</div>

                    <h3 style="color:white;">Tổng Cây Trồng</h3>

                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats o3">
                    
                    <div class="count">{{ number_format($tongtien) }} vnđ</div>

                    <h3 style="color:white;">Số Tiền Nhập</h3>

                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats o4">
                    
                    <div class="count">{{ number_format($tongtienxuat) }} vnđ</div>

                    <h3 style="color:white;">Số Tiền Xuất </h3>

                </div>
            </div>
        </div>


    



    </div>
@endsection

@section('css')
<style>
    .o1{
        background: red;
        color: white;
    }
    .o2{
        background: #0048ff;
        color: white;
    }
    .o3{
            background: #119e2b;
        color: white;
    }
    .o4{
            background: #085202;
        color: white;
    }
</style>
@endsection
