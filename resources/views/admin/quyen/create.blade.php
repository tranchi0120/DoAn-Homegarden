@extends('layouts.admin')

@section('title')
  <title>Thêm Quyền</title>
@endsection

@section('content')
 
 <div class="container">

        <div class="card-body">
            <form action="{{route('q.store')}}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Kiểm tra lại dữ liệu
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">

                         <div class="form-group">
                            <strong>Tên Quyền</strong>
                            <input class="form-control" type="text" name="TenQuyen" placeholder="mời nhập">
                            
                        </div>
                    </div>

                </div>
                <div class="mt-2"><button type="submit" class="btn btn-primary">Lưu</button></div>
            </form>
        </div>

        </div>
@endsection

