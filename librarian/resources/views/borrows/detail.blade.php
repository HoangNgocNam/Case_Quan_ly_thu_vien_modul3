@extends('home.master')
@section('title', 'borrow')
@section('title-content','Chi tiết phiếu mượn')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm mới phiếu mượn</h4>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="row">

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" style="height: 42px">
                                                <i class="fas fa fa-search"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="search-student-borrow"
                                               placeholder="Tìm tên học sinh, mã học sinh">

                                    </div>
                                    <ul id="list-student-borrow-search" style="position: absolute;z-index: 1000"
                                        class="list-group"></ul>
                                </div>
                                <div class="form-group">
                                    <h6>Thông tin người mượn</h6>
                                    <hr>
                                    <div class="form-group row">
                                        <label style="font-weight: bolder" for="name" class="col-sm-4 col-form-label">Tên học viên</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name"
                                                   id="name-student-borrow" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label style="font-weight: bolder" for="email" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" name="email"
                                                   id="email-student-borrow" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label style="font-weight: bolder" for="phone" class="col-sm-4 col-form-label">Phone</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="phone"
                                                   id="phone-student-borrow" disabled>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-md-6">

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" style="height: 42px">
                                                <i class="fas fa fa-search"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id=""
                                               placeholder="Tìm tên sách">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <h6>Danh sách sách</h6>
                                    <hr>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>STT</td>
                                            <td>Tên sách</td>
                                            <td>Hình ảnh</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Vui lòng chọn sách</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-12">
                            <div class="form-group">
                                <h6>Thông tin phiếu mượn</h6>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group row">
                                        <label style="font-weight: bolder" for="borrow_date" class="col-sm-4 col-form-label">Ngày
                                            mượn</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" name="borrow_date"
                                                   id="borrow_date">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label style="font-weight: bolder" for="borrow_return" class="col-sm-4 col-form-label">Ngày
                                            trả</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" name="borrow_return"
                                                   id="borrow_return">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <a href="{{route('borrows.index')}}" type="button" class="btn btn-danger">Hủy</a>
                                        <button class="btn btn-success">Cho mượn</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
    </div>
@endsection
