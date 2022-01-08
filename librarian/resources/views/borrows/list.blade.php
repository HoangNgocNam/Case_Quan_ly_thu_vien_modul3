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
<div class="container">
    <form action="" method="GET">
        @csrf
        Ma sinh vien: <input type="text" name="student_code">
        <button>Tim kiem</button>
    </form>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Mã Sinh Viên</th>
            <th scope="col">Mã Sách</th>
            <th scope="col">Ngày Mượn</th>
            <th scope="col">Ngảy Trả</th>
            <th scope="col">Thời Gian Mượn</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($borrows))
            @foreach($borrows as $borrow)
        <tr>
            <th scope="row">{{$borrow->id}}</th>
            <td>{{$borrow->student->name}}</td>
            <th>{{$borrow->book->name}}</th>
            <td>{{$borrow->borrow_date}}</td>
            <td>{{$borrow->borrow_return}}</td>
            <td>{{$borrow->time_allowed_to_borrow}}</td>
        </tr>
            @endforeach
        @else
            <p>Không có dữ liệu</p>
        @endif
        </tbody>
    </table>
</div>
</body>
</html>
