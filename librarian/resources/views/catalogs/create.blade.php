
@extends("home.master")
@section("title","Catalog")
@section("title-content","Thêm mới danh mục")
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
                    <label for="exampleInputEmail1">Mã Sách</label>
                    <input type="text" name="code" class="form-control" placeholder="Nhập mã sách">
                    @error('code')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1">Tên sách</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập Tên sách">
                    @error('name')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <a href="{{route('catalogs.index')}}" class="btn btn-secondary">back</a>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
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

