<div class="row">
              
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Request ID</th>
            <th>Theme Name</th>
            <th>Date</th>
            <!-- <th>Package</th> -->
            <th>Developer</th>
            <th style="width: 15%;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($requests->result() as $value) : ?>
            <tr>
                <td><?php echo $value->request_id; ?></td>
                <td><?php echo $value->theme_name; ?></td>
                <td><?php echo date('d F Y', strtotime($value->request_date)); ?></td>
                <!-- <td><?php echo $value->theme_name; ?></td> -->
                <td><?php echo $value->developer_name; ?></td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/request/detail/'.$value->request_id); ?>"><i class="icon-eye-open"></i> View</a>
                        <!--<a class="btn btn-small" href=""><i class="icon-remove"></i> Delete</a>-->
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pagination; ?>
