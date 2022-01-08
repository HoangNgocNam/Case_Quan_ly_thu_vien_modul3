@extends("home.master")
@section("title","Người dùng")
@section("title-content","Quản lý Người dùng")
@section("content")


<a href="{{ route('users.create') }}">Create User</a>
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
                <th scope="col">Name</th>
                <th scope="col">Avatar</th>
                <th scope="col">Email</th>
                <th scope="col">Birthday</th>
                <th scope="col">Phone</th>
                <th scope="col">Role</th>
                <th colspan="2">Action</th>
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
                            <p>Chua co anh</p>
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
                        <a href="{{route('users.update',$user->id)}}">Update</a>
                    </td>
                    <td>
                        <a onclick="return confirm('Ban co muon xoa khong')" href="{{route('users.delete',$user->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
