<?php
/* @var $this yii\web\View */
?>
<style>
    .styled-table {
        width: 85%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

    #w0 {
        overflow-x: auto;
    }

</style>

<section>
    <div class="container">
        <div id="w0" class="row">
            <table class="styled-table">
                <thead>
                <tr>
                    <th>T/r</th>
                    <th>Ismi</th>
                    <th>Telefon</th>
                    <th>Murojaat vaqti</th>
                    <th>Kitoblari</th>
                    <th>Bog`lanish</th>
                    <th>O'chirish</th>
                </tr>
                </thead>
                <tbody id="tableajax">

                </tbody>
            </table>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(function () {
        getRealData();


        setInterval(function () {
            getRealData()
        }, 3000);

        $(document).on('click', '.connect', (function (e) {
            var id = $(this).attr('data-id');
            $.get("/admin/default/connect", {id: id}, function (response) {
                console.log(response);
            });
            getRealData();
        }));

        $(document).on('click', '.delete', (function (e) {
            // alert('sasa');
            var id = $(this).attr('data-id');
            $.get("/admin/default/delete", {id: id}, function (response) {
                console.log(response);
            });
            getRealData();
        }));


        function getRealData() {
            $.ajax({
                method: 'GET',
                data: '',
                dataType: 'json',
                url: '/admin/default/index2',
                success: function (data) {
                    var table = data.jadval;
                    let tab = '';
                    $.each(table, function (key, value) {
                      
                       
                        // document.write(a.join(','));
                        var num = parseInt(key) + 1;
                        tab += "<tr><td>" + '| ' + num + "</td>" +
                            "<td>" + '| ' + value.name + '</td>' +
                            "<td>" + '| ' + value.phone + '</td>' +
                            "<td>" + '| ' + value.create_at + '</td>' +
                            "<td>" + '| ' +  value.book  +'</td>' +
                            "<td><a data-id='" + value.id + "' class='connect btn btn-success'>" + 'connect' + '</a></td>' +
                            "<td><a data-id='" + value.id + "' class='delete btn btn-danger'>" + 'o`chirish' + '</a></td>' +
                            "</tr>"
                    });
                    $("#tableajax").html(tab);
                    console.log(table);
                },
            });
        }

        setInterval(function () {
            reload()
        }, 300000);

        function reload() {
            location.reload();
        }

    });
</script>