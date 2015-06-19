 <div class="row">
           
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Payment ID</th>
            <th>Order ID</th>
            <th>Total</th>
          
            <th>Date</th>
            <th>Message</th>
            <th style="width: 15%;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($payments->result() as $value) : ?>
        <?php if($value->payment_status==0) : ?>
        <?php $status = 'Payment Process'; ?>
        <?php elseif($value->payment_status==1) : ?>
        <?php $status = 'Paid'; ?>
        <?php elseif($value->payment_status==2) : ?>
        <?php $status = 'Confirmed'; ?>
        <?php endif; ?>
            <tr>
                <td><?php echo $value->payment_id; ?></td>
                <td><?php echo $value->order_id; ?></td>
                <td><?php echo $value->payment_total; ?></td>
                <!--<td><?php echo $value->package_name; ?></td>-->
                <td><?php echo date('d F Y', strtotime($value->payment_date)); ?></td>
                <td><?php echo $status; ?></td>
                
                <td>
                    <div class="btn-group">
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/payment/detail/' . $value->payment_id); ?>"><i class="icon-eye-open"></i> View</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pagination; ?>