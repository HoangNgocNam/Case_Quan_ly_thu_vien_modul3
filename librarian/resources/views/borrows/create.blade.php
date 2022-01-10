
@extends('home.master')
@section('title', 'borrow')
@section('title-content','Thêm mới phiếu mượn')
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

                        <form action="{{route('borrows.store')}}" method="post" class="card-body">
                            @csrf
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
                                            <input type="hidden" class="form-control" id="student_id"
                                                   name="student_id">

                                        </div>
                                        <ul id="list-student-borrow-search"
                                            style="position: absolute;z-index: 1000; width: 48%"
                                            class="list-group">
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <h6>Thông tin người mượn</h6>
                                        <hr>
                                        <div class="form-group row">
                                            <label style="font-weight: bolder" for="name"
                                                   class="col-sm-4 col-form-label">Tên học viên</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="name"
                                                       id="name-student-borrow" disabled>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label style="font-weight: bolder" for="email"
                                                   class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" name="email"
                                                       id="email-student-borrow" disabled>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label style="font-weight: bolder" for="phone"
                                                   class="col-sm-4 col-form-label">Address</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="address"
                                                       id="address-student-borrow" disabled>
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
                                            <input type="text" class="form-control td" id="search-book-borrow"
                                                   placeholder="Tìm tên sách">
                                        </div>
                                        <ul id="list-book-borrow-search"
                                            style="position: absolute;z-index: 1000; width: 48%"
                                            class="list-group">
                                        </ul>

                                    </div>
                                    <div class="form-group">
                                        <h6>Danh sách sách</h6>
                                        <hr>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <td>Tên sách</td>
                                                <td>Mô tả</td>
                                                <td>Status</td>
                                            </tr>
                                            </thead>
                                            <tbody id="book_list">

                                            </tbody>
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
                                            <label style="font-weight: bolder" for="borrow_date"
                                                   class="col-sm-4 col-form-label">Ngày
                                                mượn</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" name="borrow_date"
                                                       id="borrow_date">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label style="font-weight: bolder" for="borrow_return"
                                                   class="col-sm-4 col-form-label">Ngày
                                                trả</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" name="borrow_return"
                                                       id="borrow_return">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <button class="btn btn-success">Cho mượn</button>
                                            <a class="btn btn-danger" href="{{route('borrows.index')}}">Quay lại</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>

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
    <script type="text/javascript">
        $(document).ready(function () {
            let baseUrl = origin
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function searchStudent() {
                let keyword = $("#search-student-borrow").val();
                $.ajax({
                    url: baseUrl + "/students/search/" + keyword,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        let str = "";
                        for (let i = 0; i < response.length; i++) {
                            str += `<li data-student_id="${response[i].id}" data-name="${response[i].name}" data-address="${response[i].address}" data-email="${response[i].email}" class="list-group-item list-group-item-action infor-user">${response[i].name}</li>`
                        }
                        $("#list-student-borrow-search").html(str);
                    }
                })
            }

            $(document).on("click", ".infor-user", function () {
                let name = $(this).data("name");
                let address = $(this).data("address");
                let email = $(this).data("email");
                let student_id = $(this).data("student_id");
                $("#search-student-borrow").val(name);
                $("#name-student-borrow").val(name);
                $("#address-student-borrow").val(address);
                $("#email-student-borrow").val(email);
                $("#student_id").val(student_id)
                $("#list-student-borrow-search").html("");
            })

            $("#search-student-borrow").on("input", searchStudent);

            $('body').on('keyup', '#search-book-borrow', function () {
                let keyword = $(this).val();
                console.log(keyword)
                searchBook(keyword);
            })

            function searchBook(keyword) {

                $.ajax({
                    url: baseUrl + "/admin/books/search/" + keyword,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        console.log(response)
                        if (response.data) {
                            let html = '';
                            response.data.forEach(function (item, index) {
                                html += '<li data-id="' +
                                    item.id +
                                    '" class="list-group-item list-group-item-action book-item" >';
                                html += item.name;
                                html += '</li>'
                            })

                            $("#list-book-borrow-search").html(html);
                        }
                    }
                })
            }

            $('body').on('click', '.book-item', function () {
                let idBook = $(this).attr('data-id');
                $.ajax({
                    url: baseUrl + "/admin/books/" + idBook,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        let html = "<tr>";
                        html += '<td>'
                        html += response.name
                        html += '</td>'
                        html += '<td>'
                        html += response.desc;
                        html += '</td>'
                        html += '<td>'
                        html += response.status;
                        html += '<input type="hidden" name="book_id[]" value="' + idBook + ' "/><input type="hidden" name="status[]" value="' + response.status + '" /></td>';
                        html += "</tr>";
                        console.log(html)
                        // $('#book-id').val(res.id);
                        $('#book_list').append(html)
                        $("#list-book-borrow-search").html('');
                        $("#search-book-borrow").val('');
                    }
                })
            })

            $("#search-book-borrow").on("input", searchBook);

        })
    </script>
    </div>
@endsection





