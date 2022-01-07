<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Phập tên" value="{{$user->name}}">
    <input type="email" name="email" placeholder="Phập email" value="{{$user->email}}">
    <input type="password" name="password" placeholder="Password" value="{{$user->password}}">
    <input type="date" name="birthday" placeholder="Phập ngày sinh" value="{{$user->birthday}}">
    <input type="text" name="phone" placeholder="Phập số điện thoại" value="{{$user->phone}}">
    <input type="file" name="img" placeholder="Thêm ảnh">
    <img style="width: 100px" src="{{$user->img}}" alt="">
    <hr>
    @foreach($roles as $role)
        <input {{$user->checkRole($role->id)?"checked":""}} name="role[{{$role->id}}]" class="form-check-input" type="checkbox" value="{{ $role->id }}"
               id="role-{{$role->name}}">{{$role->name}}
    @endforeach
    <br>
    <button type="submit">Thêm mới</button>
    <a href="{{route('users.index')}}">Quay lại</a>
</form>
