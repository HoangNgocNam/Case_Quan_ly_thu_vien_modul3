@extends("home.master")
@section("title","Student")
@section("title-content","Thêm mới Học sinh")
@section("content")


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Thêm mới học sinh
    </div>
    <div class="card-body">
        <form method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên Học Sinh </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mã Học Sinh</label>
                <input type="number" name="student_code" class="form-control" id="student_code" placeholder="Nhập mã học sinh" value="{{old('student_code')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email" value="{{old('email')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Địa Chỉ</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Nhập địa chỉ" value="{{old('address')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ngày Sinh</label>
                <input type="date" name="birthday" class="form-control" id="birthday" placeholder="Nhập ngày sinh" value="{{old('birthday')}}">
            </div>
            <a href="{{route('students.list')}}" class="btn btn-secondary" type="button">Quay lại</a>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>
</div>
@endsection
