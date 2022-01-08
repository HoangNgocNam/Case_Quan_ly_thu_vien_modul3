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
            html += "</tr>";
        }
        $('#list-book').html(html)
    }

    $('#searchBook').keyup(function () {
        let keyword = $(this).val()
        // console.log(keyword)
        // alert(keyword)
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: url + "/api/search",
            method: "POST",
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
