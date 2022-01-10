$(document).ready(function () {
    let url = location.origin;
    function showBookHtml(res) {
        let books = res.data;
        let html = "";
        for (let i = 0; i < books.length; i++) {
            html += "<tr>";
            html += "<td>";
            html += books[i].id
            html += "</td>";
            html += "<td>";
            html += books[i].name
            html += "</td>";
            html += "<td>";
            html += books[i].desc
            html += "</td>";
            html += "<td>";
            html += books[i].imag
            html += "</td>";
            html += "<td>";
            html += books[i].status
            html += "</td>";
            html += "<td>";
            html += books[i].category_id
            html += "</td>";
            html += "<td>";
            html += books[i].publisher_id
            html += "</td>";
            html += "<td>";
            html += books[i].quanlity
            html += "</td>";
            html += "</tr>";
        }
        $('#list-book').html(html)
    }



    $('body').on("keyup","#searchBook",function () {
        let keyword = $(this).val()
        $.ajax({
            url: url + "/admin/books/search",
            method: "GET",
            type: 'json',
            data: {
                keyword: keyword
            },
            success: function (res) {
                showBookHtml(res)
            }
        })
    })



    function showStudentHtml(res) {
        let students = res.data;
        let html = "";
        for (let i = 0; i < students.length; i++) {
            html += "<tr>";
            html += "<td>";
            html += students[i].id
            html += "</td>";
            html += "<td>";
            html += students[i].name
            html += "</td>";
            html += "<td>";
            html += students[i].student_code
            html += "</td>";
            html += "<td>";
            html += students[i].email
            html += "</td>";
            html += "<td>";
            html += students[i].address
            html += "</td>";
            html += "<td>";
            html += students[i].birthday
            html += "</td>";
            html += "</tr>";
        }
        $('#list-student').html(html)
    }

    $('body').on("keyup","#searchStudent",function () {
        let keystudent = $(this).val();
        $.ajax({
            url: url + "/admin/students/search",
            method: "GET",
            type: 'json',
            data: {
                keystudent: keystudent
            },
            success: function (res) {
                showStudentHtml(res)
            }
        })
    })
})
