<<<<<<< HEAD
@extends("home.master")
@section("title","User")
@section("title-content","Cập Nhật Người dùng")
@section("content")


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Cập nhật chi tiết người dùng
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên" value="{{$user->name}}">
                    @error('name')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email" value="{{$user->email}}">
                    @error('email')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" value="{{$user->password}}">
                    @error('password')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ngày sinh</label>
                    <input type="date" name="birthday" class="form-control" placeholder="Nhập ngày sinh" value="{{$user->birthday}}">
                    @error('birthday')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại" value="{{$user->phone}}">
                    @error('phone')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ảnh</label>
                    <input type="file" name="img" class="form-control" placeholder="Thêm ảnh">
                    <img style="width: 100px" src="{{$user->img}}" alt="">
                </div>
                <div class="mb-3">
                    {{--                    <label for="exampleInputPassword1" class="form-label">Role</label>--}}
                    @foreach($roles as $role)
                        <input {{$user->checkRole($role->id)?"checked":""}} name="role[{{$role->id}}]" class="form-check-input" type="checkbox" value="{{ $role->id }}"
                               id="role-{{$role->name}}">{{$role->name}}
                    @endforeach
                </div>
                <a href="{{route('users.index')}}" class="btn btn-secondary">Quay lại</a>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
@endsection

{{--<form action="" method="post" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="Phập tên" value="{{$user->name}}">--}}
{{--    <input type="email" name="email" placeholder="Phập email" value="{{$user->email}}">--}}
{{--    <input type="password" name="password" placeholder="Password" value="{{$user->password}}">--}}
{{--    <input type="date" name="birthday" placeholder="Phập ngày sinh" value="{{$user->birthday}}">--}}
{{--    <input type="text" name="phone" placeholder="Phập số điện thoại" value="{{$user->phone}}">--}}
{{--    <input type="file" name="img" placeholder="Thêm ảnh">--}}
{{--    <img style="width: 100px" src="{{$user->img}}" alt="">--}}
{{--    <hr>--}}
{{--    @foreach($roles as $role)--}}
{{--        <input {{$user->checkRole($role->id)?"checked":""}} name="role[{{$role->id}}]" class="form-check-input" type="checkbox" value="{{ $role->id }}"--}}
{{--               id="role-{{$role->name}}">{{$role->name}}--}}
{{--    @endforeach--}}
{{--    <br>--}}
{{--    <button type="submit">Thêm mới</button>--}}
{{--    <a href="{{route('users.index')}}">Quay lại</a>--}}
{{--</form>--}}


=======
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Phập tên" value="{{$user->name}}">
    <input type="email" name="email" placeholder="Phập email" value="{{$user->email}}">
    <input type="password" name="password" placeholder="Password" value="{{$user->password}}">
    <input type="date" name="birthday" placeholder="Phập ngày sinh" value="{{$user->birthday}}">
    <input type="text" name="phone" placeholder="Phập số điện thoại" value="{{$user->phone}}">
    <input type="file" name="img" placeholder="Thêm ảnh">
    <img style="width: 100px" src="{{asset('storage/'.$user->img)}}" alt="">
    <hr>
    @foreach($roles as $role)
        <input {{$user->checkRole($role->id)?"checked":""}} name="role[{{$role->id}}]" class="form-check-input" type="checkbox" value="{{ $role->id }}"
               id="role-{{$role->name}}">{{$role->name}}
    @endforeach
    <br>
    <button type="submit">Thêm mới</button>
    <a href="{{route('users.index')}}">Quay lại</a>
</form>
>>>>>>> 456a80d7c1773bd2e7a04dea31973f92c5cb77a0
