@extends("home.master")
@section("title","Borrow")
@section("title-content","Thêm Mới Phiếu Mượn")
@section("content")


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Thêm Mới Phiếu Mượn
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mã Sinh Viên </label>
                    <input type="text" name="student_id" class="form-control" id="name" placeholder=" Nhập Mã Sinh Viên" value="{{old('student_id')}}">
                    @error('student_id')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
{{--                <div class="mb-3">--}}
{{--                    <label for="exampleInputEmail1" class="form-label">Tên Sách</label>--}}
{{--                    <input type="text" name="book_id" class="form-control" id="student_code" placeholder="Nhập id Sách" value="{{old('book_id')}}">--}}
{{--                    @error('book_id')--}}
{{--                    <p style="color: red">{{$message}}</p>--}}
{{--                    @enderror--}}
{{--                </div>--}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ngày Mượn</label>
                    <input type="date" name="borrow_date" class="form-control" id="email" placeholder="Nhập Ngày Mượn" value="{{old('borrow_date')}}">
                    @error('borrow_date')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ngày Trả</label>
                    <input type="date" name="borrow_return" class="form-control" id="address" placeholder="Nhập Ngày Trả" value="{{old('borrow_return')}}">
                    @error('borrow_return')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Thời Gian Cho Mượn</label>
                    <input type="date" name="time_allowed_to_borrow" class="form-control" id="birthday" placeholder="Nhập Thời Gian Mượn" value="{{old('time_allowed_to_borrow')}}">
                    @error('time_allowed_to_borrow')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Trạng Thái</label>
                        <select class="form-control" name="status">
                            <option value="Đang Mượn">Đang Mượn</option>
                            <option value="Đã Trả">Đã Trả</option>
                            <option value="Quá Hạn">Quá Hạn</option>
                        </select>
                    </div>
                </div>
                <a href="{{route('borrows.index')}}" class="btn btn-secondary" type="button">Quay lại</a>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
@endsection
