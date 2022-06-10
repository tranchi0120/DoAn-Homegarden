 <section id="tree" class="latest-news-section">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="section-title  ">
                     <h3 class="news">Cây Trồng</h3>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="latest-news">
                 @foreach ($caytrong as $data)
                     <div class="col-md-10 ">

                         <div class="latest-post tree-main ">
                             <img class="images hinh img-responsive"
                                 src="{{ asset('/images') }}/{{ $data->HinhAnh }}" alt="">
                             <h4><a class="tree-title" href="#">{{ $data->TenCay }}</a></h4>
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
 </section>

 @section('cs')
     <style>
         .hinh {
             object-fit: none;
             border-radius: 20px 20px 0 0;
         }
     </style>
 @endsection
