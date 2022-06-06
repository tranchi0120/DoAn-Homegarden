
@extends('layouts.admin')

@section('title')
  <title>Danh mục Quyền</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>THÔNG TIN TÀI KHOẢN</h3>
                </div>
                <div class="pull-right" style="margin-top: 20px;">
                    <a class="btn btn-success" href="{{route('q.create')}}">Thêm mới
                    </a>
                </div>
            </div>
        </div>

       
        <table class="tb table table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Tên Quyền</th>
                <th width="280px">Hành động</th>
            </tr>
             @foreach ($quyen as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->TenQuyen }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('q.edit',$data->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf
                        <a href="{{route('q.destroy',$data->id)}}" class="btn btn-danger action_delete">
                            <i class="fas fa-trash"></i>
                        </a>
                        </form>
                    </td>

                </tr>
            @endforeach
     
        </table>

    
        
    </div>

@endsection
@section('css')
<style>
    
</style>
@endsection