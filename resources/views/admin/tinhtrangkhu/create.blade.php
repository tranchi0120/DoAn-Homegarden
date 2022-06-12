@extends('layouts.admin')

@section('title')
    <title>Tinh Trạng Khu</title>
@endsection

@section('content')
    <div class="container">

        <div class="card-body">
            <form action="{{ route('tinhtrang.store') }}" method="post">
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
                                <option> --chọn khu-- </option>
                                @foreach ($khu as $data)
                                    <option value="{{ $data->id }}"> {{ $data->TenKhu }} </option>
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
