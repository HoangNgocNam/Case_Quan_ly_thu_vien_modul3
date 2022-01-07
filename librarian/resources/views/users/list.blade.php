<a href="{{ route('users.create') }}">Create User</a>
<table border="1px">
    <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Avatar</th>
    <th>Email</th>
    <th>Birthday</th>
    <th>Phone</th>
    <th>Role</th>
    <th>Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>
                @if($user->img)
                <img style="width: 100px; height: 100px" src="{{asset('storage/').$user->img}}"
                     alt="{{asset('storage/').$user->img}}">
                @else
                <p>Chua co anh</p>
                @endif
            </td>
            <td>{{$user->email}}</td>
            <td>{{$user->birhtday}}</td>
            <td>{{$user->phone}}</td>
            <td>
                @if(count($user->roles) > 0)
                    @foreach($user->roles as $role)
                        <p>{{ $role->name }}</p>
                    @endforeach
                @else
                    <p>Chua phan quyen</p>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
