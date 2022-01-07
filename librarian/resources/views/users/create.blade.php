<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Phập tên">
    <input type="email" name="email" placeholder="Phập email">
    <input type="password" name="password" placeholder="Password">
    <input type="date" name="birthday" placeholder="Phập ngày sinh">
    <input type="text" name="phone" placeholder="Phập số điện thoại">
    <input type="file" name="img" placeholder="Thêm ảnh">
    <hr>
    @foreach($roles as $role)
        <input name="role[{{$role->id}}]" class="form-check-input" type="checkbox" value="{{ $role->id }}"
               id="role-{{$role->name}}">{{$role->name}}
    @endforeach
    <br>
    <button type="submit">Thêm mới</button>
</form>
