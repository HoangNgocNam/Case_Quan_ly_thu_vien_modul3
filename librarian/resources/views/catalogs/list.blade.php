@extends("home.master")
@section("title","Catalog")
@section("title-content","Quản lý danh mục sách")
@section("content")

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Danh sách danh mục sách
        </div>
        <div class="card-body">
            <table class="table" border="1px">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Mã sách</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($catalogs))
                    @foreach($catalogs as $catalog)
                        <tr>
                            <th>{{$catalog->id}}</th>
                            <td>{{$catalog->code}}</td>
                            <td>{{$catalog->name}}</td>
                            <td><a href="{{route('catalogs.update',$catalog->id)}}">Sửa</a></td>
                            <td><a onclick="return confirm('Bạn chắc muốn xóa?')" href="{{route('catalogs.delete',$catalog->id)}}">Xóa</a></td>
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
{{--<h1 style="text-align: center">Danh Mục Sách</h1>--}}
{{--<div class="container">--}}
{{--    <a href="{{route('catalogs.creare')}}">Create</a>--}}
{{--    <table class="table table-hover">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">ID</th>--}}
{{--            <th scope="col">Mã sách</th>--}}
{{--            <th scope="col">Tên Sách</th>--}}
{{--            <th scope="col">Action</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @if(isset($catalogs))--}}
{{--            @foreach($catalogs as $catalog)--}}
{{--                <tr>--}}
{{--                    <th>{{$catalog->id}}</th>--}}
{{--                    <td>{{$catalog->code}}</td>--}}
{{--                    <td>{{$catalog->name}}</td>--}}
{{--                    <td>--}}
{{--                        <a href="{{route('catalogs.update',$catalog->id)}}">Update</a>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <a onclick="return confirm('Bạn chắc muốn xóa?')" href="{{route('catalogs.delete',$catalog->id)}}">Delete</a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--        @else--}}
{{--            <p>Không có dữ liệu</p>--}}
{{--        @endif--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}




{{--@extends('home.master')--}}
{{--@section('title', "User Management")--}}
{{--@section('title-content', 'User Management')--}}
{{--@section('content')--}}
{{--    <table>--}}

{{--        <thead>--}}
{{--            <tr>--}}
{{--                <th>Id</th>--}}
{{--                <th>Mã sách</th>--}}
{{--                <th>Tên sách</th>--}}
{{--                <th>Action</th>--}}
{{--            </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @if(isset($catalogs))--}}
{{--            @foreach($catalogs as $catalog)--}}
{{--                <tr>--}}
{{--                    <th>{{$catalog->id}}</th>--}}
{{--                    <td>{{$catalog->code}}</td>--}}
{{--                    <td>{{$catalog->name}}</td>--}}
{{--                    <td>--}}
{{--                        <a href="{{route('catalogs.update',$catalog->id)}}">Update</a>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <a onclick="return confirm('Bạn chắc muốn xóa?')" href="{{route('catalogs.delete',$catalog->id)}}">Delete</a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--                @else--}}
{{--                    <p>Không có dữ liệu</p>--}}
{{--                @endif--}}
{{--                </tbody>--}}
{{--        </table>--}}
{{--@endsection--}}

