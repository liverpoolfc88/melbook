
<?php
/* @var $this yii\web\View */
?>
<style>
    .styled-table {
        /* text-align: center */
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
                    <th>Bog'lanish vaqti</th>
                </tr>
                </thead>
                <tbody>
                <? foreach ($model as $key=>$value): ?>
                    <tr>
                        <td>| <?=$key+1?></td>
                        <td>| <?=$value->name?></td>
                        <td>| <?=$value->phone?></td>
                        <td>| <?=$value->create_at?></td>
                        <td>| <?=$value->connect_at?></td>
                    </tr>
                <? endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- 
<script>
$('document').ready(function () {
    
 setInterval(function () {getRealData()}, 50000000);

 $(document).on('click','.connect',(function(e){
        $("#tableajax").remove();
         var id = $(this).attr('data-id');
         $.get("/admin/default/connect", {id:id}, function (response) {
             console.log(response);
         });
       
     }));

 }); 

function getRealData() {
// console.log('sasa');
$.ajax({
         method:'GET',
         data:'',
         dataType: 'json',
         url: '/admin/default/index2',
         success: function (data) {
             var table = data.jadval;
             $.each(table, function(key, value) {
                 $("#tableajax").append(
                     "<tr><td>" + key+1 + "</td>" +
                     "<td>" + value.name + '</td>'+
                     "<td>" + value.phone + '</td>'+
                     "<td>" + value.create_at + '</td>'+
                     "<td>" + value.connect_at + '</td>'+
                     "<td><a data-id='"+value.id+"' class='connect btn btn-danger'>" +'connect'+ '</a></td>'+
                     "</tr>");
             });
             console.log(data.jadval);
     },
     });
 }
</script>
 -->
