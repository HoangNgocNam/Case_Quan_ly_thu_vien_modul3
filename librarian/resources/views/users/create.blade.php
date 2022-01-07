<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Phập tên">
    @error('name')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="email" name="email" placeholder="Phập email">
    @error('email')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="password" name="password" placeholder="Password">
    @error('password')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="date" name="birthday" placeholder="Phập ngày sinh">
    @error('birthday')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="text" name="phone" placeholder="Phập số điện thoại">
    @error('phone')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="file" name="img" placeholder="Thêm ảnh">
    <hr>
    @foreach($roles as $role)
        <input name="role[{{$role->id}}]" class="form-check-input" type="checkbox" value="{{ $role->id }}"
               id="role-{{$role->name}}">{{$role->name}}
    @endforeach
    <br>
    <button type="submit">Thêm mới</button>
    <br>
    <a href="{{route('users.index')}}">Back</a>
</form>
