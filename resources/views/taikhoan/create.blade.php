@extends('layouts.admin')

@section('title')
  <title>Danh mục Tài Khoản</title>
@endsection

@section('content')
 
 <div class="container">

        <div class="card-body">
            <form action="{{route('tk.store')}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Họ Và tên</strong>
                            <input class="form-control" type="text" name="HoTen" placeholder="mời nhập">
                         
                        </div>
                         <div class="form-group">
                            <strong>Email</strong>
                            <input class="form-control" type="email" name="Email" placeholder="mời nhập">
                           
                        </div>
                         <div class="form-group">
                            <strong>mật khẩu</strong>
                            <input class="form-control" type="password" name="MatKhau" placeholder="mời nhập">
                           
                        </div>
                         <div class="form-group">
                            <strong>Giới tính</strong>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="GioiTinh" id="nam" checked="checked" value="nam">
                            <label class="form-check-label" for="flexRadioDefault1">
                               Nam
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="GioiTinh" id="nữ" checked="checked" value="nữ">
                            <label class="form-check-label" for="flexRadioDefault1">
                               Nữ
                            </label>
                            </div>
                        </div>
                         <div class="form-group">
                            <strong>Ngày Sinh</strong>
                            <input class="form-control" type="date" name="NgaySinh" placeholder="mời nhập">
                            
                        </div>
                         <div class="form-group">
                            <strong>Số điện thoại</strong>
                            <input class="form-control" type="text" name="SDT" placeholder="mời nhập">
                        </div>
                        <div class="form-group">
                            <strong>Quyền</strong>
                            <select class="select2_single form-control" name="Quyen_ID" aria-label="Default select example">
                           {{-- <option >Quyền</option> --}}
                           @foreach($quyen as $data)
                            <option value="{{$data->id}}"> {{ $data->TenQuyen }} </option>
                             @endforeach
                            </select>
                        </div>
                        
                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Lưu</button></div>
            </form>
        </div>

        </div>
@endsection

