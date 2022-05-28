
@extends('layouts.admin')

@section('title')
  <title>Danh mục loại cây</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Danh mục loại cây</h3>
                </div>
                <div class="pull-right" style="margin-top: 20px;">
                    <a class="btn btn-success" href="#">Thêm mới
                    </a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif


        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Tên loại cây</th>
                <th width="280px">Hành động</th>
            </tr>
     
        </table>

    
        
    </div>

@endsection