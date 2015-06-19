<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
    <!-- <form class="form-search pull-right" method="post" action="<?php echo base_url('dashboard/order/view'); ?>">
        <input name="keyword" type="text" class="input-medium">
        <select name="field" class="input-small">
            <option value="request_id">Order ID</option>
            <option value="name">Name</option>
        </select>
        <button type="submit" class="btn">Search</button>
    </form> -->
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Approval ID</th>
            <th>Theme Name</th>
            <th>Date</th>
            <th>Message</th>
            <th>Status</th>
            <th style="width: 15%;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($approvals->result() as $value) : ?>
            <tr>
                <td><?php echo $value->approval_id; ?></td>
                <td><?php echo $value->theme_name; ?></td>
                <td><?php echo date('d F Y', strtotime($value->approval_date)); ?></td>
                <td><?php echo $value->approval_message; ?></td>
                <td><?php echo $value->approval_status; ?></td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/approval/detail/'.$value->approval_id); ?>"><i class="icon-eye-open"></i> View</a>
                        <!--<a class="btn btn-small" href=""><i class="icon-remove"></i> Delete</a>-->
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pagination; ?>
