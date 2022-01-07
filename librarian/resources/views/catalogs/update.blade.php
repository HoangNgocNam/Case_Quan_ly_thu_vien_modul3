<form method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Mã Sách</label>
        <input type="text" name="code" class="form-control"  placeholder="Nhập mã sách" value="{{$catalog->code}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tên sách</label>
        <input type="text" name="name" class="form-control"  placeholder="Nhập Tên sách" value="{{$catalog->name}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{route('catalogs.index')}}">back</a>
</form>
