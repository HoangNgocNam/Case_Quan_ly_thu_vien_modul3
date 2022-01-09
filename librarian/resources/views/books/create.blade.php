@extends("home.master")
@section("title","Book")
@section("title-content","Thêm Mới Sách")
@section("content")
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Thêm mới sách
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Ảnh</label>
                    <input type="file" name="imag" class="form-control-file">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Tên Sách</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sách" value="{{old('name')}}">
                    @error('name')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Mô Tả</label>
                    <textarea name="desc" class="form-control" placeholder="Nhập mô tả"></textarea>
                    @error('desc')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect1">Trạng Thái</label>
                    <select class="form-control" name="status">
                        <option value="Mới">Mới</option>
                        <option value="Cũ">Cũ</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect2">Thể Loại</label>
                    <select multiple class="form-control"  name="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect2">Nhà Xuất Bản</label>
                    <select multiple class="form-control" name="publisher_id">
                        @foreach($publishers as $publisher)
                            <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1">Số Lượng</label>
                    <input type="number" name="quanlity" class="form-control" placeholder="Nhập Số Lượng">
                </div>
                <a class="btn btn-secondary" href="{{route('books.index')}}">Quay lại</a>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
@endsection


