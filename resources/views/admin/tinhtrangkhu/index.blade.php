
@extends('layouts.admin')

@section('title')
  <title>Tình Trạng Cây Trồng</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Khu Cây Trồng</h3>
                </div>
                <div class="pull-right" style="margin-top: 20px;">
                    <a class="btn btn-success" href="{{route('tinhtrang.create')}}">Thêm mới
                    </a>
                </div>
            </div>
        </div>

       
        <table class="table table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Tên Khu</th>
                <th>Tên Cây</th>
                <th>Hình Cây Trồng</th>
                <th>Ghi Chú</th>
                <th>Người Chăm Sóc</th>
                
                {{-- <th>Tên Cây </th> --}}
                {{-- <th>Số Lượng</th> --}}
              
                {{-- <th>Người Chăm sóc</th> --}}
                <th width="280px">Hành động</th>
            </tr>
             @foreach ($tinhtrangkhu as $data)
                <tr>
                     
                    <td>{{$data->id}}</td>
                    <td>{{$data->Khu->TenKhu}}</td>
                    <td>{{$data->Khu->CayTrong->TenCay}}</td>
                      <td><img src="../boostrap/assets/img/{{$data->HinhAnh }}" class="images" alt="Girl in a jacket" width="50px" height="50px"></td>
                    <td>{{$data->GhiChu }}</td>
                    <td>{{$data->Khu->USER->name}}</td>

                   
                    <td>
                        <a class="btn btn-primary" href="{{route('tinhtrang.edit',$data->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf
                        <a href="{{route('tinhtrang.destroy',$data->id)}}" class="btn btn-danger action_delete">
                            <i class="fas fa-trash"></i>
                        </a>
                        </form>
                    </td>

                </tr>
            @endforeach
     
        </table>

    
        
    </div>

@endsection