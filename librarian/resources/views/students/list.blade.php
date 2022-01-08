<a href="{{route('students.create')}}">Create Student</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách học sinh
    </div>
    <div class="card-body">
        <table class="table" border="1px">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Student Code</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Birthday</th>
                <th scope="col">Action</th>
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
                    <td><a href="{{route('students.update',$student->id)}}">Update</a></td>
                    <td><a onclick="confirm('Are you sure?')" href="{{route('students.delete',$student->id)}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
