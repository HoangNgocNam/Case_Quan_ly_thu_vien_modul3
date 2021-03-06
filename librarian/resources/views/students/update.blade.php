@extends("home.master")
@section("title","Student")
@section("title-content","Cập Nhật Thông Tin Khách Hàng")
@section("content")


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Cập nhật chi tiết khách hàng
    </div>
    <div class="card-body">
        <form method="post">
            @csrf
            <div class="mb-3">
                <label style="font-weight: bolder" for="exampleInputEmail1" class="form-label">Tên</label>
                <input type="text" name="name" value="{{$student->name}}" class="form-control" id="name" placeholder="Nhập tên">
                @error('name')
                <p style="color: red" >{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label style="font-weight: bolder" for="exampleInputEmail1" class="form-label">Mã học sinh</label>
                <input type="number" name="student_code" value="{{$student->student_code}}" class="form-control" id="student_code" placeholder="Nhập mã học sinh">
                @error('student_code')
                <p style="color: red" >{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label style="font-weight: bolder" for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" value="{{$student->email}}" class="form-control" id="email" placeholder="Nhập email">
                @error('email')
                <p style="color: red" >{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label style="font-weight: bolder" for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                <input type="text" name="address" value="{{$student->address}}" class="form-control" id="address" placeholder="Nhập địa chỉ">
                @error('address')
                <p style="color: red" >{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label style="font-weight: bolder" for="exampleInputEmail1" class="form-label">Ngày sinh</label>
                <input type="text" name="birthday" value="{{$student->birthday}}" class="form-control" id="birthday" placeholder="Nhập ngày sinh">
                @error('birthday')
                <p style="color: red" >{{$message}}</p>
                @enderror
            </div>
            <a href="{{route('students.list')}}" class="btn btn-secondary">Quay lại</a>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
@endsection
