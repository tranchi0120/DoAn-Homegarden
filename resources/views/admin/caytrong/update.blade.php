@extends('layouts.admin')

@section('title')
  <title>Cập Nhật Cây Trồng</title>
@endsection

@section('content')
 
 <div class="container">
        <div class="card-body">
            <form action="{{route('ct.update',$name->id)}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Loại Cây</strong>
                            
                            <select class="select2_single form-control" name="Loaicay_ID" aria-label="Default select example">
                        
                           @foreach($danhmucloaicay as $data)
                            <option value="{{$data->id}}">{{$data->Tenloaicay}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Tên Cây</strong>
                            <input class="form-control" type="text" name="TenCay" value="{{$name->TenCay}}">
                           
                        </div>
                        <div class="form-group">
                            <strong>Giá Tiền</strong>
                            <input class="form-control" type="text" name="GianTien" value="{{$name->GianTien}}">
                           
                        </div>
                        {{-- <div class="form-group">
                            <strong>giai đoạn phun thuốc</strong>
                            <input class="form-control" type="editor" name="GiaiDoanPhunThuoc" value="{{$name->GiaiDoanPhunThuoc}}">
                          
                        </div> --}}

                        <div class="form-group now    ">
                             <strong>Giai Đoạn Phun Thuốc</strong>
                            {{-- <strong>Giai đoạn phun thuốc</strong>
                            <input class="form-control" type="editor" name="GiaiDoanPhunThuoc" placeholder="mời nhập"> --}}
                            <div class="col-ml-9 col-sm-9">
                                <textarea  id="noidung" name="GiaiDoanPhunThuoc" cols="30" rows="3" class="form-control "  placeholder="mieu ta">{{$name->GiaiDoanPhunThuoc}}</textarea>

                            </div>
                        </div>
                        <script>
    CKEDITOR.replace( 'GiaiDoanPhunThuoc' ,{
        language: 'en'
    });
</script>

                    <div class="form-group now    ">
                             <strong>Ghi Chus</strong>
                            {{-- <strong>Giai đoạn phun thuốc</strong>
                            <input class="form-control" type="editor" name="GiaiDoanPhunThuoc" placeholder="mời nhập"> --}}
                            <div class="col-ml-9 col-sm-9">
                                <textarea  id="noidung" name="GhiChu" cols="30" rows="3" class="form-control "  placeholder="mieu ta">{{$name->GhiChu}}</textarea>

                            </div>
                        </div>
                        <script>
    CKEDITOR.replace( 'GhiChu' ,{
        language: 'en'
    });
</script>
                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Cập Nhật</button></div>
            </form>
        </div>

    </div>
@endsection

   

