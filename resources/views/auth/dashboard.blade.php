@extends('layouts.admin')

@section('title')
    <title>Khu Cây Trồng</title>
@endsection

@section('content')
    <div class="container">


        <div class="row">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                    </div>
                    <div class="count">{{ $khu }} Khu</div>

                    <h3>Tổng Số Khu</h3>

                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-comments-o"></i>
                    </div>
                    <div class="count">{{ $caytrong }} Cây</div>

                    <h3>Tổng Cây Trồng</h3>

                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                    </div>
                    <div class="count">{{ number_format($tongtien) }} vnđ</div>

                    <h3>Số Tiền Nhập</h3>

                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="count">{{ number_format($tongtienxuat) }} vnđ</div>

                    <h3>Số Tiền Xuất </h3>

                </div>
            </div>
        </div>






    </div>
@endsection

@section('jscharts')
@endsection
