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
                        <img src="{{ asset('/images') }}/{{ $data->CayTrong->HinhAnh }}"
                            class="images img-responsive area-img" alt="Girl in a jacket"></td>
                        <span class="area-name">{{ $data->TenKhu }}</span>
                        <p class="area-group-title"> Loại Cây: {{ $data->CayTrong->DanhMucLoaiCay->Tenloaicay }} </p>
                        <p class="area-group-title"> Tên Cây: {{ $data->CayTrong->TenCay }}</p>
                        <p class="area-group-title"> Số Lượng: {{ $data->SoLuong }} cây </p>
                        <p class="area-group-title"> Tình Trạng: {{ $data->SoLuong > 0 ? 'còn' : 'hết' }}
                        </p>
                    </div>
                @endforeach


            </div>
        </div>

    </div>
</section>
