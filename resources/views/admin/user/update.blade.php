@extends('layouts.admin')

@section('title')
  <title>Danh mục Tài khoản</title>
@endsection

@section('content')
 
 <div class="container">

        <div class="card-body">
            <form action="{{route('u.update',$name->id)}}" method="post">
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
                            <input class="form-control" type="text" name="name" value="{{$name->name}}">
                            @error('Name')
                            Vui lòng nhập 
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>email</strong>
                            <input class="form-control" type="text" name="email" value="{{$name->email}}">
                            @error('Email')
                            Vui lòng nhập 
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>password</strong>
                            <input class="form-control" type="text" name="password" value="{{$name->password}}">
                            @error('Password')
                            Vui lòng nhập 
                            @enderror
                        </div>
                        {{-- <div class="form-group">
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
                        </div> --}}
                        {{-- <div class="form-group">
                            <strong>ngaysinh</strong>
                            <input class="form-control" type="date" name="NgaySinh" value="{{$name->NgaySinh}}">
                            @error('Ngaysinh')
                            Vui lòng nhập 
                            @enderror
                        </div> --}}
                         <div class="form-group">
                            <strong>sdt</strong>
                            <input class="form-control" type="text" name="sdt" value="{{$name->sdt}}">
                            @error('Sdt')
                            Vui lòng nhập 
                            @enderror
                        </div>
                         <div class="form-group">
                            <strong>Quyền</strong>
                            <select class="select2_single form-control" name="Quyen_ID" aria-label="Default select example">
                           {{-- <option>{{ $data->TenQuyen }}</option> --}}
                           @foreach($quyen as $data)
                            <option value="{{$data->id}}"> {{ $data->TenQuyen }} </option>
                          @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Cập Nhật</button></div>
            </form>
        </div>

        </div>
@endsection

