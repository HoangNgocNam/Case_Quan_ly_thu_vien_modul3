
@extends("home.master")
@section("title","Book")
@section("title-content","Cập Nhật Sách")
@section("content")
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Cập nhật chi tiết sách
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Ảnh</label>
                    <input type="file" name="imag" class="form-control-file" placeholder="Nhập tên sách">
                    <img style="width: 100px;" src="{{asset('storage/'.$book->imag)}}" alt="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Tên sách</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sách" value="{{$book->name}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Mô tả</label>
                    <textarea name="desc" class="form-control">{{$book->desc}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect1">Trạng Thái</label>
                    <select class="form-control" name="status">
                        <option {{$book->status == "Mới" ? "selected": ""}} value="Mới">Mới</option>
                        <option {{$book->status == "Cũ" ? "selected": ""}} value="Cũ">Cũ</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect2">Thể Loại</label>
                    <select multiple class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option
                                {{$book->category_id == "$category->id" ? "selected": ""}} value="{{$category->id}}">{{$category->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect2">Nhà Xuất Bản</label>
                    <select multiple class="form-control" name="publisher_id">
                        @foreach($publishers as $publisher)
                            <option
                                {{$book->publisher_id == "$publisher->id" ? "selected": ""}} value="{{$publisher->id}}">{{$publisher->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <a class="btn btn-secondary" href="{{route('books.index')}}">Quay lại</a>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection


