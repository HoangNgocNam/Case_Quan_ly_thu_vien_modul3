@extends("home.master")
@section("title","Student")
@section("title-content","Danh Sách Khách Hàng")
@section("content")

    <button class="btn btn-primary mb-3">
        <a style="color: white; text-decoration: none" href="{{route('students.create')}}">Thêm khách hàng</a>
    </button>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách khách hàng
    </div>
    <div class="card-body">
        <table class="table" border="1px">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Mã học sinh</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->student_code}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->birthday}}</td>
                    <td>
                        <button class="btn btn-success">
                            <a style="color: white" href="{{route('students.update',$student->id)}}"><i class="fas fa-pen"></i></a>
                        </button>
                        <button class="btn btn-danger">
                            <a style="color: white" onclick="return confirm('Bạn có chắc muốn xóa khách hàng này?')" href="{{route('students.delete',$student->id)}}"><i class="fas fa-trash-alt"></i></a>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
