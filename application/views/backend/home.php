<p class="text-success">
    Welcome <?php echo $this->session->userdata['user_username']; ?>, you have <a href="<?php echo base_url('dashboard/order/view/'); ?>"><?php echo $order; ?> order(s)</a> and <a href="<?php echo base_url('dashboard/payment/view/'); ?>"><?php echo $payment; ?> unverified payment(s)</a>!
</p>