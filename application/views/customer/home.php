<p class="text-success">
    Welcome <?php echo $this->session->userdata['customer_uname']; ?>, you have <a href="<?php echo base_url('customer/order/view/'); ?>"><?php echo $order; ?> approved theme(s)</a> and <a href="<?php echo base_url('developer/payment/view/'); ?>"><?php echo $payment; ?> unverified theme(s)</a>!
</p>