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


        {{-- <div class="col-md-4 col-sm-6  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Thống Kê Nhập Và Xuất Hàng Tháng </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                </div>
            </div>
        </div> --}}

        {{-- <script>
            if ($('#mybarChart').length) {

                var ctx = document.getElementById("mybarChart");
                var mybarChart = new Chart(ctx, {
                    type: 'bar',
                    data: {

                        labels: {!! json_encode($month) !!},
                        datasets: [{
                                label: 'xuất',
                                backgroundColor: "#26B99A",
                                data: {!! json_encode($doanhthu) !!}
                            }
                            // , {
                            //     label: 'xuất',
                            //     backgroundColor: "#03586A",
                            //     data: []
                            // }
                        ]
                    },

                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });

            }
        </script> --}}



    </div>
@endsection

@section('jscharts')
@endsection
