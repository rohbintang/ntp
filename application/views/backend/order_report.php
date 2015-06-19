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
        <p class="text-center"><?php echo $start.' - '.$end; ?></p>
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
                <?php $i = 1; ?>
                <?php $total = 0; ?>
                <?php foreach ($orders->result() as $value) : ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $value->request_id; ?></td>
                        <td><?php echo date('d m Y', strtotime($value->approval_date)); ?></td>
                        <td><?php echo $value->package_name; ?></td>
                        <td><?php echo $value->customer_name; ?></td>
                        <td><?php echo $value->customer_phone; ?></td>
                        <td><?php echo $value->customer_email; ?></td>
                        <td><?php echo $value->customer_address; ?></td>
                        <td><?php echo date('d m Y', strtotime($value->approval_date)); ?></td>
                        <td><?php echo $value->approval_message; ?></td>
                        <td><?php echo rupiah($value->approval_total); ?></td>
                    </tr>
                    <?php $total +=$value->approval_total; ?>
                    <?php $i++; ?>
                <?php endforeach; ?>
                    <tr>
                        <td colspan="10" class="text-center">Jumlah</td>
                        <td><?php echo rupiah($total); ?></td>
                    </tr>
            </tbody>
        </table>
    </body>
</html>
