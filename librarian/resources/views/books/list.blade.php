

@extends("home.master")
@section("title","Book")
@section("title-content","Quản lý sách")
@section("content")
    <div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Danh sách sách
    </div>
{{--    <div class="col-12 col-md-4">--}}
{{--        <input type="text" name="keyword" class="form-control" id="searchBook">--}}
{{--    </div>--}}
    <div class="card-body">
        <table class="table" border="1px">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên Sách</th>
                <th scope="col">Mô Tả</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Thể Loại</th>
                <th scope="col">Nhà Xuất Bản</th>
                <th scope="col">Số Lượng</th>
                <th colspan="2">Thao tác</th>
            </tr>
            </thead>
            <tbody id="list-book">
            @if(isset($books))
                @foreach($books as $book)
                    <tr>
                        <th scope="row">{{$book->id}}</th>
                        <td>
                            @if($book->imag)
                                <img style="width: 100px" src="{{asset('storage/'.$book->imag)}}"
                                     alt="{{asset('storage/'.$book->imag)}}">
                            @else
                                <p>Chưa cập nhật ảnh</p>
                            @endif
                        </td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->desc}}</td>
                        <td>{{$book->status}}</td>
                        <td>
                            @if(isset($book->category))
                                <p>{{$book->category->name}}</p>
                            @else
                                <p>Chưa cập nhật</p>
                            @endif
                        </td>
                        <td>
                            @if(isset($book->publisher))
                                <p>{{$book->publisher->name}}</p>
                            @else
                                <p>Chưa Cập Nhật</p>
                            @endif
                        </td>
                        <td>{{$book->quanlity}}</td>
                        <td>
                            <a href="{{route('books.update',$book->id)}}">Sửa</a>
                        </td>
                        <td>
                            <a onclick="return confirm('Bạn có muốn Xóa ??')" href="{{route('books.delete',$book->id)}}">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>Chưa có sách bạn ơi</p>
            @endif
            </tbody>
        </table>
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/my.js"></script>
