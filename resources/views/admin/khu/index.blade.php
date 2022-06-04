
@extends('layouts.admin')

@section('title')
  <title>Khu Cây Trồng</title>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Khu Cây Trồng</h3>
                </div>
                <div class="pull-right" style="margin-top: 20px;">
                    <a class="btn btn-success" href="{{route('k.create')}}">Thêm mới
                    </a>
                </div>
            </div>
        </div>

       
        <table class="table table-striped">
            <tr class="table-dark">
                {{-- <th>ID</th> --}}
                <th>Tên Khu</th>
                <th>Loại Cây</th>
                <th>Tên Cây </th>
                <th>Hinh Anh </th>
                <th>Trạng Thái</th>
                <th>Số Lượng</th>
                {{-- <th>Số Lượng Chet</th> --}}
                  {{-- <th>Ngày Trồng</th> --}}
                {{-- <th>Ngày Thu Hoạch</th> --}}
                {{-- <th>Người Chăm sóc</th> --}}
                {{-- <th>Ghi Chus</th> --}}
                <th>Chi Tiết</th>

                <th width="280px">Hành động</th>
            </tr>
             @foreach ($khu as $data)   
                <tr>
                    {{-- <td>{{$data->id}}</td> --}}
                    <td>{{$data->TenKhu}}</td>
                    <td>{{$data->CayTrong->DanhMucLoaiCay->Tenloaicay}}</td>
                    {{-- <td>{{$data->CayTrong->HinhAnh}}</td> --}}
                    <td>{{$data->CayTrong->TenCay}}</td>

                    <td><img src="{{asset('/images')}}/{{$data->CayTrong->HinhAnh}}" class="images" alt="Girl in a jacket" width="50px" height="50px"></td>
                    <td>

                        {{$data->SoLuong > 0 ? 'Đã trồng cây' : 'trống'}}
                    </td>
                    
                    <td>{{$data->SoLuong }}</td>
                      <td><a href="{{route('admin.khu.chitiet' , ['id' => $data->id])}}">Chi Tiet</a></td>   
                    {{-- <td>{{$data->SoLuongChet }}</td> --}}
                    {{-- <td>{{$data->NgayTrongCay }}</td> --}}
                    {{-- <td>{{$data->NgayThuHoach }}</td> --}}
                    {{-- <td>{{ $data->USER->name }}</td> --}}
                    {{-- <td>{!! $data->GhiChu !!}</td> --}}
                    
                    
                    <td>
                        <a class="btn btn-primary" href="{{route('k.edit',$data->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        @csrf
                         <button data-url="{{route('k.destroy',$data->id)}}" class="btn btn-danger action_delete delete-button">
                            <i class="fas fa-trash"></i>
                        </button>
                        </form>
                    </td>

                </tr>
            @endforeach
     
        </table>

    
        
    </div>

@endsection

@section('scripts')
    <script>
        function deleteRecord(event){
        event.preventDefault();
        let _this = $(this);
        let url = $(this).data('url');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'GET',
                    url: url,

                    success: function (data){
                        if(data.code === 200){
                            console.log(_this.parent().parent());
                            _this.parent().parent().remove();
                        }
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    },

                    error: function (data){

                    }
                })
            }
        })
    }
    $(document).on("click",".delete-button", deleteRecord);
    </script>
@endsection