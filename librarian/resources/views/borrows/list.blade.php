@extends("home.master")
@section("title","Borrow")
@section("title-content","Quản Lý Phiếu Mượn")
@section("content")
    <button class="btn btn-primary mb-3">
        <a style="color: white; text-decoration: none" href="{{route('borrows.create')}}">Thêm Mới Phiếu Mượn</a>
    </button>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Danh sách phiếu mượn
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
                            <button  class="btn btn-secondary" type="submit">Tìm Kiếm</button>
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
                    <th scope="col">Mã Sách</th>
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
                            <th>{{$borrow->book->name}}</th>
                            <td>{{$borrow->borrow_date}}</td>
                            <td>{{$borrow->borrow_return}}</td>
                            <td>{{$borrow->time_allowed_to_borrow}}</td>
                            <td>{{$borrow->status}}</td>
                            <td>
                                <a type="button" class="btn btn-success" href="{{route('borrows.update',$borrow->id)}}"><i class="fas fa-pen"></i></a>
                                <a type="button" class="btn btn-danger" onclick="return confirm('Bạn chắc Chắn Muốn Xóa ??')" href="{{route('borrows.delete',$borrow->id)}}"><i class="fas fa-trash-alt"></i></a>
                            </td>

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
