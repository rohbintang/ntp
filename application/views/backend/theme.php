   <div class="row">
           
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th style="width: 10%;">ID</th>
            <th style="width: 25%;">Theme</th>
            <th style="width: 25%;">Developer</th>
            <th style="width: 25%;">Price</th>
            <th style="width: 15%;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users->result() as $value) : ?>
            <tr>
                <td><?php echo $value->theme_id; ?></td>
                <td><?php echo $value->theme_name; ?></td>
                <td><?php echo $value->developer_name; ?></td>
                <td><?php echo $value->theme_price; ?></td>
                <td>
                    <!--<a href=""><i class="icon-pencil"></i> Edit</a> <a href=""><i class="icon-remove"></i> Delete</a>-->
                    <div class="btn-group">
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/theme/detail/' . $value->theme_id); ?>"><i class="icon-eye"></i> View</a>
                        <!-- <a class="btn btn-small" href="<?php echo base_url('dashboard/theme/edit/' . $value->theme_id); ?>"><i class="icon-pencil"></i> Edit</a> -->
                        <!--<a class="btn btn-small" href="<?php echo base_url('dashboard/theme/del/' . $value->theme_id); ?>"><i class="icon-remove"></i> Delete</a>-->
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pagination; ?>