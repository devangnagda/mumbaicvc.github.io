<!DOCTYPE html>
<html>

<head>
    <title>Mumbai Covid-19 Vaccination Centers</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Data Tables -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <!-- Data Tables Fixed Header -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.dataTables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>

    <!-- Bootstrap 5 Data Tables -->
    <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

    <!-- Custom CSS -->
    <link href="./styles/stylesheet.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;500,600;0,700;1,400&display=swap" rel="stylesheet">

</head>

<body>
    <br /><br />
    <div class="container">
        <h3 class="text-center">Functional COVID Vaccine centers on <b>26<sup>th</sup> April, 2021</b></h3><br />
        <!-- Search -->
        <!-- <input type="text" id="searchInput" placeholder="Center Name Search..." /> -->

        <!-- Search -->
        <table id="data-table" class="table custom-table table-hover mx-auto">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Ward</th>
                    <th class="text-center">Name of Vaccination Centre</th>
                    <th>Facility Category</th>
                    <th>Functional Tomorrow ?</th>
                    <th>Covaxin / Covishield</th>
                    <!-- <th>Remarks</th> -->
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-muted">
                        Last Updated: April 26, 2021 <span class="badge bg-secondary"> 13:00 (IST) </span>
                    </td>
                    <td colspan="3">
                        <a class="source-link" target="_blank" href="https://twitter.com/mybmc/status/1386564258264076293"> Source 1</a> |
                        <a class="source-link" target="_blank" href="https://twitter.com/mybmc/status/1386577652715200518"> Source 2</a>
                    </td>
                </tr>
            </tfoot>
        </table>

    </div>
    <br /><br />
    <script type="text/javascript" src="main.js"></script>
</body>

</html>