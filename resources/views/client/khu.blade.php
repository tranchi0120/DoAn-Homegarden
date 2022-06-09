@extends('Client.main')

@section('title')
    <title>Tin Tuc</title>
@endsection

@section('content-khu')
    <section class="area">
        <div class="container">
            <div class="area-main">
                <div class="area-top">
                    <div class="col-md-12">
                        <div>
                            <h3 class="area-title">Khu Cây Trồng</h3>
                        </div>
                    </div>
                </div>
                <div class="area-row">
                    @foreach ($khu as $data)
                        <div class=" area-group">
                            <img src="./trangchinh/images/about-01.jpg" class="img-responsive area-img" alt="">
                            <span class="area-name">{{ $data->TenKhu }}</span>
                            <p class="area-group-title"> Loại Cây: {{ $data->CayTrong->DanhMucLoaiCay->Tenloaicay }} </p>
                            <p class="area-group-title"> Tên Cây: {{ $data->CayTrong->TenCay }}</p>
                            <p class="area-group-title"> Số Lượng: {{ $data->SoLuong }} </p>
                            <p class="area-group-title"> Tình Trạng: {{ $data->SoLuong > 0 ? 'Đã trồng cây' : 'trống' }}
                            </p>
                        </div>
                    @endforeach


                </div>
            </div>

        </div>
    </section>
@endsection
