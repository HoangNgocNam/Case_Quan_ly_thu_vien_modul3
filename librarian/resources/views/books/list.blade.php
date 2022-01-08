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
<h1 style="text-align: center">Danh Sách Sách</h1>
<div class="container">
    <a href="{{route('books.create')}}">Create Book</a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Tên Sách</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Thể Loại</th>
            <th scope="col">Nhà Xuất Bản</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($books))
            @foreach($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>
                        @if($book->imag)
                        <img style="width: 100px" src="{{asset('storage/'.$book->imag)}}"
                             alt="{{asset('storage/'.$book->imag)}}">
                        @else
                        <p>Chưa Cập Nhật Ảnh</p>
                        @endif
                    </td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->desc}}</td>
                    <td>{{$book->status}}</td>
                    <td>
                      @if(isset($book->category))
                            <p>{{$book->category->name}}</p>
                        @else
                          <p>Chưa Cập Nhật</p>
                        @endif
                    </td>
                    <td>
                        @if(isset($book->publisher))
                            <p>{{$book->publisher->name}}</p>
                        @else
                            <p>Chưa Cập Nhật</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('books.update',$book->id)}}">Update</a>
                    </td>
                    <td>
                        <a onclick="return confirm('Bạn có muốn Xóa ??')" href="{{route('books.delete',$book->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        @else
            <p>Chưa có Sách Bạn Ơi</p>
        @endif
        </tbody>
    </table>
</div>
</body>
</html>
