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
