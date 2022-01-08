<a href="{{route('students.list')}}">Back</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Create Student
    </div>
    <div class="card-body">
        <form method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Student Code</label>
                <input type="number" name="student_code" class="form-control" id="student_code" placeholder="Enter student code">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Enter address">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Birthday</label>
                <input type="date" name="birthday" class="form-control" id="birthday" placeholder="Enter Birthday">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

