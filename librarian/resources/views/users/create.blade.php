@extends("home.master")
@section("title","User")
@section("title-content","Thêm mới Người dùng")
@section("content")


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Thêm mới người dùng
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên" value="{{old('name')}}">
                    @error('name')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email" value="{{old('email')}}">
                    @error('email')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" value="{{old('password')}}">
                    @error('password')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ngày sinh</label>
                    <input type="date" name="birthday" class="form-control" placeholder="Nhập ngày sinh" value="{{old('birthday')}}">
                    @error('birthday')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại"value="{{old('phone')}}">
                    @error('phone')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ảnh</label>
                    <input type="file" name="img" class="form-control" placeholder="Thêm ảnh">
                </div>
                <div class="mb-3">
{{--                    <label for="exampleInputPassword1" class="form-label">Role</label>--}}
                    @foreach($roles as $role)
                        <input name="role[{{$role->id}}]" class="form-check-input" type="checkbox" value="{{ $role->id }}"
                               id="role-{{$role->name}}">{{$role->name}}
                    @endforeach
                </div>
                <a href="{{route('users.index')}}" class="btn btn-secondary">Quay lại</a>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
@endsection


