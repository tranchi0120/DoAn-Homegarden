@extends('layouts.admin')

@section('title')
<title>Danh mục Tài Khoản</title>
@endsection

@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Danh mục Tài Khoản</h3>
            </div>
            <div class="pull-right" style="margin-top: 20px;">
                <a class="btn btn-success" href="{{ route('u.create') }}">Thêm mới
                </a>
            </div>
        </div>
    </div>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>ID</th>
            <th>Họ Và Tên</th>
            <th>Email</th>

            <th>SĐT</th>
            <th>Quyền</th>

            <th width="280px">Thao Tác</th>
        </tr>
        @foreach ($user as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->sdt }}</td>
            <td>{{ $data->LoaiQuyen->TenQuyen }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('u.edit', $data->id) }}">
                    <i class="fas fa-edit"></i>
                </a>
                @csrf
                <button data-url="{{ route('u.destroy', $data->id) }}"
                    class="btn btn-danger action_delete delete-button">
                    <i class="fas fa-trash"></i>
                </button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <div>
        {{ $user->links() }}
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
        title: 'Bạn có chắc muốn xóa?',
        text: "bạn sẽ không thể khôi phục được điều này!",
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