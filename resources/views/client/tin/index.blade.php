@section('content-news')
<section id="news" class="latest-news-section">
    <div enctype="multipart/form-data" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title  ">
                    <h3 class="news">Tin Tức</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="latest-news">
                @foreach ($baidang as $data)
                <div class="col-md-12">
                    <div class="latest-post">
                        <div class="imagess">
                            <img class="img img-responsive" src="{{ asset('/images') }}/{{ $data->HinhAnh }}" alt="">
                        </div>

                        <h4 class="tieude"><a href="{{ route('ct.chitiet', $data->id) }}">{{ $data->TieuDe }}</a></h4>
                        <div class="post-details">
                            <span class="date"> {{ $data->NgayDang }} </span>
                        </div>
                        <div class="text"> {!! $data->NoiDung !!} </div>
                        <a href="{{ route('ct.chitiet', $data->id) }}" class="btn btn-primary">Đọc Thêm</a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

@section('css')
<style>
.text {
    padding: 8px 0;
    width: 350px;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 1.5rem;
    -webkit-line-clamp: 3;
    height: 75px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
}

.btn {
    margin-top: 20px;
}

.img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.imagess {
    width: 350px;
    height: 250px;
}

.tieude {

    width: 100%;
    height: 70px;
}
</style>
@endsection