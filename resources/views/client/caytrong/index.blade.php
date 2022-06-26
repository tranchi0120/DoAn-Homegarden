 <section id="tree" class="latest-news-section">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="section-title  ">
                     <h3 class="news">Cây Nông Nghiệp</h3>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="latest-news">
                 @foreach ($cayNongNghiep as $data)
                 <div class="col-md-10 ">

                     <div class="latest-post tree-main ">
                         <img class="images hinh img-responsive" src="{{ asset('/images') }}/{{ $data->HinhAnh }}"
                             alt="">
                         <h4 class="title">{{ $data->TenCay }}</h4>
                         <div class="post-details">
                         </div>
                         <p class="tree-extra">Loại Cây: {{ $data->DanhMucLoaiCay->Tenloaicay }} </p>
                         <a href="{{ route('cay.chitiet', $data->id) }}" class="btn btn-primary tree-btn">ĐỌc
                             Thêm</a>
                     </div>


                 </div>
                 @endforeach

             </div>
         </div>
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-title  ">
                         <h3 class="news">Cây Ăn Trái</h3>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="latest-news">
                     @foreach ($cayAnTrai as $data)
                     <div class="col-md-10 ">

                         <div class="latest-post tree-main ">
                             <img class="images hinh img-responsive" src="{{ asset('/images') }}/{{ $data->HinhAnh }}"
                                 alt="">
                             <h4 class="title">{{ $data->TenCay }}</h4>
                             <div class="post-details">
                             </div>
                             <p class="tree-extra">Loại Cây: {{ $data->DanhMucLoaiCay->Tenloaicay }} </p>
                             <a href="{{ route('cay.chitiet', $data->id) }}" class="btn btn-primary tree-btn">ĐỌc
                                 Thêm</a>
                         </div>


                     </div>
                     @endforeach

                 </div>
             </div>
    </div>
 </section>

 @section('cs')
 <style>
.hinh {
    height: 293px;
    object-fit: none;
    border-radius: 20px 20px 0 0;
}

.title {
    margin-left: 20px;
}
 </style>
 @endsection