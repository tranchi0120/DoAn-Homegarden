@extends('layouts.admin')

@section('title')
  <title>Tinh Trạng Khu</title>
@endsection

@section('content')
 
 <div class="container">

        <div class="card-body">
            <form action="{{route('tinhtrang.store')}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tên Khu</strong>
                            <select class="select2_single form-control" name="Khu_ID" aria-label="Default select example">
                           <option >Tên Khu</option>
                           @foreach($khu as $data)
                            <option value="{{$data->id}}"> {{ $data->TenKhu }} </option>
                             @endforeach
                            </select>
                        </div>
                         {{-- <div class="form-group  ">
                            <Strong class="col-sm-3 text-end control-label col-form-label">Hình Ảnh </Strong>
                            <div class="custom-file">
                                <input name="HinhAnh"  type="file" name="myImage" accept="image/*" />
                            </div>
                        </div> --}}

                        
                          {{-- <div class="form-group now    ">
                             <strong>Ghi Chus</strong>
                            <div class="col-ml-9 col-sm-9">
                                <textarea  id="ghichu" name="GhiChu" cols="30" rows="3" class="form-control "  ></textarea>

                            </div>
                        </div>
                        <script>
    CKEDITOR.replace( 'ghichu' ,{
        language: 'en'
    });
</script> --}}
                        
                         
                        
                        
                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Lưu</button></div>
            </form>
        </div>

        </div>
@endsection

