@extends('Client.main')

@section('title')
    <title>Tin Tuc</title>
@endsection

@section('content-tintuc')
    <section id="news" class="latest-news-section">
        <div class="container">
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
                                {{-- <img src="images/about-01.jpg" class="img-responsive" alt=""> --}}
                                <img class="images img-responsive" src="{{ asset('/images') }}/{{ $data->HinhAnh }}"
                                    class="images img-responsive" alt="">
                                <h4><a href="#">{{ $data->TieuDe }}</a></h4>
                                <div class="post-details">
                                    <span class="date">{{ $data->NgayDang }} </span>
                                </div>
                                <p> {!! $data->NoiDung !!} </p>
                                <a href="#!" class="btn btn-primary">Đọc Thêm</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endsection
