@extends("home.master")
@section("title","User")
@section("title-content","Quản lý Người dùng")
@section("content")

    <button class="btn btn-primary mb-3">
        <a style="color: white; text-decoration: none" href="{{ route('users.create') }}">Thêm mới người dùng</a>
    </button>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách người dùng
    </div>
    <div class="card-body">
        <table class="table" border="1px">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tên</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Email</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Quyền</th>
                <th colspan="2">Thao tác</th>
            </tr>

            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        @if($user->img)
                            <img style="width: 100px; height: 100px" src="{{asset('storage/'.$user->img)}}"
                                 alt="{{asset('storage/'.$user->img)}}">
                        @else
                            <p>Chưa có ảnh</p>
                        @endif
                    </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->birthday}}</td>
                    <td>{{$user->phone}}</td>
                    <td>
                        @if(count($user->roles) > 0)
                            @foreach($user->roles as $role)
                                <p>{{ $role->name }}</p>
                            @endforeach
                        @else
                            <p>Chưa phân quyền</p>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-success">
                            <a style="color: white" href="{{route('users.update',$user->id)}}"><i class="fas fa-pen"></i></a>
                        </button>
                        <button class="btn btn-danger">
                            <a style="color: white" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')" href="{{route('users.delete',$user->id)}}"><i class="fas fa-trash-alt"></i></a>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
