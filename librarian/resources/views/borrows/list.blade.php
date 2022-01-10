@extends("home.master")
@section("title","borrow")
@section("title-content","Quản lý phiếu mượn")
@section("content")
    <button class="btn btn-primary mb-3">
        <a style="color: white; text-decoration: none" href="{{route('borrows.create')}}">Thêm mới phiếu Mượn</a>
    </button>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Danh sách phiếu Mượn
        </div>
        <div class="btn btn-White">
            <div class="search-box">
                <form action="#" method="GET">
                    <div class="input-group">
                        <span class="algolia-autocomplete"
                              style="position: relative; display: inline-block; direction: ltr;">
                            <input type="search" name="keyword" class="form-control ds-input" placeholder="Search..."
                                   aria-label="Search for...">
                        </span>
                        <div>
                            <button  class="btn btn-info" type="submit">Tìm Kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Mã Sinh Viên</th>
{{--                    <th scope="col">Mã Sách</th>--}}
                    <th scope="col">Ngày Mượn</th>
                    <th scope="col">Ngảy Trả</th>
                    <th scope="col">Thời Gian Mượn</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($borrows))
                    @foreach($borrows as $borrow)
                        <tr>
                            <th scope="row">{{$borrow->id}}</th>
                            <td>{{$borrow->student->name}}</td>
{{--                            <th>{{$borrow->book->name}}</th>--}}
                            <td>{{$borrow->borrow_date}}</td>
                            <td>{{$borrow->borrow_return}}</td>
                            <td>{{$borrow->time_allowed_to_borrow}}</td>
                            <td>{{$borrow->status}}</td>
                            <td><a href="{{route('borrows.update',$borrow->id)}}">Sửa</a></td>
                            <td><a href="{{route('borrows.showDetail',$borrow->id)}}">Chi tiết</a></td>
                            <td><a onclick="return confirm('Bạn chắc Chắn Muốn Xóa ??')" href="{{route('borrows.delete',$borrow->id)}}">Xóa</a></td>
                        </tr>
                    @endforeach
                @else
                    <p>Không có dữ liệu</p>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"--}}
{{--          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    <a href="{{route('borrows.create')}}">Thêm Mới</a>--}}
{{--    <div class="btn btn-White">--}}
{{--        <div class="search-box">--}}
{{--            <form action="#" method="GET">--}}
{{--                <div class="input-group">--}}
{{--                        <span class="algolia-autocomplete"--}}
{{--                              style="position: relative; display: inline-block; direction: ltr;">--}}
{{--                            <input type="search" name="keyword" class="form-control ds-input" placeholder="Search..."--}}
{{--                                   aria-label="Search for...">--}}
{{--                        </span>--}}
{{--                    <div>--}}
{{--                        <button  class="btn btn-info" type="submit">Tìm Kiếm</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <table class="table table-striped">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">ID</th>--}}
{{--            <th scope="col">Mã Sinh Viên</th>--}}
{{--            <th scope="col">Mã Sách</th>--}}
{{--            <th scope="col">Ngày Mượn</th>--}}
{{--            <th scope="col">Ngảy Trả</th>--}}
{{--            <th scope="col">Thời Gian Mượn</th>--}}
{{--            <th scope="col">Trạng Thái</th>--}}
{{--            <th scope="col">Action</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @if(isset($borrows))--}}
{{--            @foreach($borrows as $borrow)--}}
{{--        <tr>--}}
{{--            <th scope="row">{{$borrow->id}}</th>--}}
{{--            <td>{{$borrow->student->name}}</td>--}}
{{--            <th>{{$borrow->book->name}}</th>--}}
{{--            <td>{{$borrow->borrow_date}}</td>--}}
{{--            <td>{{$borrow->borrow_return}}</td>--}}
{{--            <td>{{$borrow->time_allowed_to_borrow}}</td>--}}
{{--            <td>{{$borrow->status}}</td>--}}
{{--            <td><a href="{{route('borrows.update',$borrow->id)}}">Sửa</a></td>--}}
{{--            <td><a onclick="return confirm('Bạn chắc Chắn Muốn Xóa ??')" href="{{route('borrows.delete',$borrow->id)}}">Xóa</a></td>--}}
{{--        </tr>--}}
{{--            @endforeach--}}
{{--        @else--}}
{{--            <p>Không có dữ liệu</p>--}}
{{--        @endif--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
