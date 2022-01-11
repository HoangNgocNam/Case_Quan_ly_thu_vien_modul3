@extends("home.master")
@section("title","Category")
@section("title-content","Cập Nhật Danh Mục")
@section("content")


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Cập nhật chi tiết danh mục
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="mb-3">
                    <label style="font-weight: bolder" for="exampleInputEmail1">Mã Sách</label>
                    <input type="text" name="code" class="form-control" placeholder="Nhập mã sách" value="{{$category->code}}">
                    @error('code')
                    <p style="color: red" >{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label style="font-weight: bolder" for="exampleInputPassword1">Tên sách</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập Tên sách" value="{{$category->name}}">
                    @error('name')
                    <p style="color: red" >{{$message}}</p>
                    @enderror
                </div>
                <a href="{{route('category.index')}}" class="btn btn-secondary">Quay lại</a>
                <button type="submit" class="btn btn-primary">Cập nhật</button>

            </form>
        </div>
    </div>
@endsection


