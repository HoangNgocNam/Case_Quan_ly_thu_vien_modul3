

@extends("home.master")
@section("title","Book")
@section("title-content","Quản lý sách")
@section("content")
    <div class="row">
        <div class="col">
            <button class="btn btn-primary mb-3">
                <a style="color: white; text-decoration: none" href="{{route('books.create')}}">Thêm mới Sách</a>
            </button>
        </div>
        <div class="input-group mb-2 col" style="width: 500px">
            <input style="height: 42px" type="text" name="keyword" class="form-control" id="searchBook">
            <div class="input-group-prepend">
                <div class="input-group-text" style="height: 42px">
                    <i class="fas fa fa-search"></i>
                </div>
            </div>
        </div>
    </div>



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
                            <button class="btn btn-success">
                                <a style="color: white" href="{{route('books.update',$book->id)}}"><i class="fas fa-pen"></i></a>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger">
                                <a style="color: white" onclick="return confirm('Bạn có muốn Xóa ??')" href="{{route('books.delete',$book->id)}}"><i class="fas fa-trash-alt"></i></a>
                            </button>
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
<script src="{{asset('assets/my.js')}}"></script>
