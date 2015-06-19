<style>
    .table-borderless th, .table-borderless td { 
        border-top: none; 
    }
    .set { 
        width: 150px;
    }
</style>
<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
</div>
<?php foreach ($order->result() as $value) : ?>
    <div class="row-fluid">
        <div class="span6">
            <table class="table table-borderless">
                <tr>
                    <td class="set"><strong>Order ID</strong></td>
                    <td>: <?php echo $value->order_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Date</strong></td>
                    <td>: <?php echo date('d-m-Y', strtotime($value->order_date)); ?></td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td>: <?php echo $value->payment_total; ?></td>
                </tr>
                <tr>
                    <td><strong>Status</strong></td>
                    <?php if($value->payment_status==0) : ?>
                    <?php $status = 'Payment Process'; ?>
                    <?php elseif($value->payment_status==1) : ?>
                    <?php $status = 'Paid'; ?>
                    <?php elseif($value->payment_status==2) : ?>
                    <?php $status = 'Confirmed'; ?>
                    <?php endif; ?>
                    <td>
                        : <?php echo $status; ?>
                        <?php if ($value->payment_status==1) : ?>
                            <a href="<?php echo base_url('dashboard/payment/detail/'.$value->payment_id); ?>">view payment</a>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="span6">
            <table class="table table-borderless">
                <tr>
                    <td class="set"><strong>Name</strong></td>
                    <td>: <a href="<?php echo base_url('dashboard/customer/detail/' . $value->customer_id); ?>"><?php echo $value->customer_name; ?></a></td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td>: <?php echo $value->customer_phone; ?></td>
                </tr>
                <!-- <tr>
                    <td><strong>Theme</strong></td>
                    <?php foreach ($themes->result() as $theme) : ?>
                    <td>: <a href="<?php echo base_url('dashboard/theme/detail/' . $theme->theme_id); ?>"><?php echo $theme->theme_name; ?></a></td>
                <?php endforeach; ?>
                </tr> -->
            </table>
        </div>
    </div>
    <div class="row-fluid">
        <p class="lead pull-left">Theme Details</p>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <table class="table">
                <tr>
                    <td class="set"><strong>Theme ID</strong></td>
                    <td class="set"><strong>Theme Name</strong></td>
                    <td class="set"><strong>Price</strong></td>
                </tr>
                <?php foreach ($themes->result() as $theme) : ?>
                <tr>
                    <td><?php echo $theme->theme_id; ?></td>
                    <td><?php echo $theme->theme_name; ?></td>
                    <td><?php echo $theme->theme_price; ?></td>

                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2"><strong>Total</strong></td>
                    <td><strong><?php echo $value->payment_total; ?></strong></td>
                </tr>
            </table>
        </div>
    </div>
<?php endforeach; ?>