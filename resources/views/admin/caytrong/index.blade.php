@extends('layouts.admin')

@section('title')
<title>Danh Mục Cây Trồng</title>
@endsection

@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Danh Mục Cây Trồng</h3>
            </div>
            <div class="pull-right" style="margin-top: 20px;">
                <a type="button" class="btn btn-primary" href="{{ route('ct.create') }}">Thêm mới
                </a>
            </div>
        </div>
    </div>
             @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif



    <table class="table table-striped">
        <tr class="table-dark">
            <th>ID</th>
            <th>Loại Cây</th>
            <th>Tên Cây</th>
            <th>Hình Ảnh</th>

            <th>Chi Tiet</th>
            <th width="280px">Hành động</th>
        </tr>
        @foreach ($caytrong as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->DanhMucLoaiCay->Tenloaicay }}</td>
            <td>{{ $data->TenCay }}</td>
            <td><img src="{{ asset('/images') }}/{{ $data->HinhAnh }}" class="images" alt="Girl in a jacket"
                    width="50px" height="50px"></td>

            <td><a href="{{ route('admin.caytrong.chitiet', ['id' => $data->id]) }}">Chi Tiết</a></td>



            <td>
                <a class="btn btn-primary " href="{{ route('ct.edit', $data->id) }}">
                    <i class="fa-solid fa-pen"></i>
                </a>
                @csrf
                <button data-url="{{ route('ct.destroy', $data->id) }}"
                    class="btn btn-danger action_delete delete-button">
                    <i class="fas fa-trash"></i>
                </button>
                </form>
            </td>

        </tr>
        @endforeach

    </table>
    <div>
        {{ $caytrong->links() }}
    </div>
</div>
@endsection


@section('scripts')
<script>
function deleteRecord(event) {
    event.preventDefault();
    let _this = $(this);
    let url = $(this).data('url');
    Swal.fire({
        title: 'Bạn có chắc?',
        text: "Bạn sẽ không thể nào khôi phục được!",
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

                success: function(data) {
                    if (data.code === 200) {
                        console.log(_this.parent().parent());
                        _this.parent().parent().remove();
                    }
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                },

                error: function(data) {

                }
            })
        }
    })
}
$(document).on("click", ".delete-button", deleteRecord);
</script>
@endsection