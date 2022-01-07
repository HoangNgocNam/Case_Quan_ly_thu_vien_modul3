<table border="1px">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Avatar</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Phone</th>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->img}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->birhtday}}</td>
                <td>{{$user->phone}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
