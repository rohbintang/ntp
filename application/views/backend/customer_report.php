<!DOCTYPE html>
<html>
    <head>
        <title>Laporan Pemesanan Undangan Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/backend/css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
        <style>
            .table th {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h3 class="text-center">Laporan Pemesanan Undangan Online</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th colspan="3">Pemesanan</th>
                    <th colspan="4">Customer</th>                    
                    <th colspan="3">Pembayaran</th>
                </tr>
                <tr>
                    <th>ID Order</th>
                    <th>Tanggal</th>
                    <th>Paket</th>
                    <th>Nama</th>
                    <th>HP</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Tanggal</th>
                    <th>Bank</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
