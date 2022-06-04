
@extends('layouts.admin')

@section('title')
  <title>Chi Tiet Cay Trong</title>
@endsection

@section('content')
    <h1>{{ $data->TenCay }}</h1>
    {!!$data->GiaiDoanPhunThuoc !!}
@endsection