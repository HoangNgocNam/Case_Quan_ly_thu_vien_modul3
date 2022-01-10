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
})
