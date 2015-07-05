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
            <th>Order ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Theme</th>
            <th>Payment</th>
            <th style="width: 15%;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders->result() as $value) : ?>
        <?php if($value->payment_status==0) : ?>
        <?php $status = 'Payment Process'; ?>
        <?php elseif($value->payment_status==1) : ?>
        <?php $status = 'Paid'; ?>
        <?php elseif($value->payment_status==2) : ?>
        <?php $status = 'Confirmed'; ?>
        <?php endif; ?>
            <tr>
                <td><?php echo $value->order_id; ?></td>
                <td><?php echo $value->customer_name; ?></td>
                <td><?php echo date('d F Y', strtotime($value->order_date)); ?></td>
                <td><?php echo $value->theme_name; ?></td>
                <td><?php echo $status; ?></td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/order/detail/'.$value->order_id); ?>"><i class="icon-eye-open"></i> View</a>
                       
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pagination; ?>
