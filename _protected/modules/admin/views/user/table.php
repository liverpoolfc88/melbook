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
    <div  class="container">
        <button id="ref" class="btn btn-default">Refresh</button>
        <div id="w0" class="row">
            <table class="table styled-table">
                <thead>
                <tr>
                    <th>T/r</th>
                    <th>Ismi</th>
<!--                    <th>roli</th>-->
                    <th>Ishlari</th>
                </tr>
                </thead>
                <tbody>
                <? foreach ($model as $key=>$value): ?>
                    <tr>
                        <td>| <?=$key+1?></td>
                        <td>| <?=$value->username?></td>
<!--                        <td>| --><?//=$value->roleName?><!--</td>-->
                        <td>| <?=count($value->client)?></td>
                    </tr>
                <? endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script src="/themes/jquery/jquery.min.js"></script>
<script>
    $(function () {
        $('#ref').click(function () {
            // alert('sasa');
            location.reload();
        })
    })
</script>