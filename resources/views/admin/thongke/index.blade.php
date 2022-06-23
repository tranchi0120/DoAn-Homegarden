@extends('layouts.admin')

@section('title')
<title>Khu Cây Trồng</title>
@endsection

@section('content')
<div class="container">





    <div class="col-md-4 col-sm-6  ">
        <div class="x_panel" style="width: 1000px">
            <div class="x_title">
                <h2>Thống Kê Nhập Và Xuất Hàng Tháng </h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <canvas id="mybarChart"></canvas>
            </div>
        </div>
    </div>



</div>
@endsection

@section('jscharts')
<script>
if ($('#mybarChart').length) {

    var ctx = document.getElementById("mybarChart");
    var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {

            labels: {!!json_encode($month) !!},
            datasets: [{
                label: 'Nhập',
                backgroundColor: "#26B99A",
                data: {!!json_encode($doanhthunhap) !!}

            }, {
                label: 'Xuất',
                backgroundColor: "#03586A",
                data: {!!json_encode($doanhthu) !!}
            }]
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
</script>
@endsection