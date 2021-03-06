@extends("home.master")
@section("title","Student")
@section("title-content","Thêm Mới Khách Hàng")
@section("content")


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Thêm mới khách hàng
    </div>
    <div class="card-body">
        <form method="post">
            @csrf
            <div class="mb-3">
                <label style="font-weight: bolder" for="exampleInputEmail1" class="form-label">Tên Học Sinh </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên" value="{{old('name')}}">
                @error('name')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label style="font-weight: bolder" for="exampleInputEmail1" class="form-label">Mã Học Sinh</label>
                <input type="number" name="student_code" class="form-control" id="student_code" placeholder="Nhập mã học sinh" value="{{old('student_code')}}">
                @error('student_code')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label style="font-weight: bolder" for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email" value="{{old('email')}}">
                @error('email')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label style="font-weight: bolder" for="exampleInputEmail1" class="form-label">Địa Chỉ</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Nhập địa chỉ" value="{{old('address')}}">
                @error('address')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label style="font-weight: bolder" for="exampleInputEmail1" class="form-label">Ngày Sinh</label>
                <input type="date" name="birthday" class="form-control" id="birthday" placeholder="Nhập ngày sinh" value="{{old('birthday')}}">
                @error('birthday')
                <p style="color: red">{{$message}}</p>
                @enderror
            </div>
            <a href="{{route('students.list')}}" class="btn btn-danger" type="button">Hủy</a>
            <button type="submit" class="btn btn-success">Thêm mới</button>
        </form>
    </div>
</div>
@endsection
