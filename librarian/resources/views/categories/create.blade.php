
@extends("home.master")
@section("title","Category")
@section("title-content","Thêm Mới Danh Mục")
@section("content")
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Thêm mới danh mục
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="mb-3">
                    <label style="font-weight: bolder" for="exampleInputEmail1">Mã danh mục</label>
                    <input type="text" name="code" class="form-control" placeholder="Nhập mã danh mục">
                    @error('code')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label style="font-weight: bolder" for="exampleInputPassword1">Tên danh mục</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
                    @error('name')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <a href="{{route('category.index')}}" class="btn btn-danger">Hủy</a>
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>

@endsection

{{--<form method="post">--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <label for="exampleInputEmail1">Mã Sách</label>--}}
{{--        <input type="text" name="code" class="form-control"  placeholder="Nhập mã sách">--}}
{{--        @error('code')--}}
{{--        <p style="color: red">{{$message}}</p>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="exampleInputPassword1">Tên sách</label>--}}
{{--        <input type="text" name="name" class="form-control"  placeholder="Nhập Tên sách">--}}
{{--        @error('name')--}}
{{--        <p style="color: red">{{$message}}</p>--}}
{{--        @enderror--}}
{{--    </div>--}}
{{--    <button type="submit" class="btn btn-primary">Add New</button>--}}
{{--    <a href="{{route('catalogs.index')}}">back</a>--}}
{{--</form>--}}


