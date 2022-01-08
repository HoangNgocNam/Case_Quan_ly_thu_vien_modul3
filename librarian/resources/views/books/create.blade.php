<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center">Thêm Mới Sách</h1>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Ảnh</label>
            <input type="file" name="imag" class="form-control-file"  placeholder="Nhập tên sách">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tên sách</label>
            <input type="text" name="name" class="form-control"  placeholder="Nhập tên sách">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mô tả</label>
            <textarea name="desc" class="form-control" ></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Trạng Thái</label>
            <select class="form-control" name="status">
                <option value="Mới">Mới</option>
                <option value="Cũ">Cũ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Thể Loại</label>
            <select multiple class="form-control"  name="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Nhà Xuất Bản</label>
            <select multiple class="form-control" name="publisher_id">
                @foreach($publishers as $publisher)
                    <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Add New</button>
        <a class="btn btn-warning" href="{{route('books.index')}}">Back</a>
    </form>
</div>
</body>
</html>

