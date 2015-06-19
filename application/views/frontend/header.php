<div class="container">
    <div class="header row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <h1>
                        <a class="brand" href="<?php echo base_url('home'); ?>">NTP</a>
                    </h1>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li <?php if ($this->uri->segment(1)=='home' OR $this->uri->segment(1)=='') echo 'class="current-page"'; ?>>
                                <a href="<?php echo base_url('home'); ?>">Home</a>
                            </li>
                         <li>
                                <a href="<?php echo base_url('theme/all'); ?>">Theme</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('cart'); ?>">Cart (<?php echo $this->cart->total_items(); ?>)</a>
                            </li>
                            <li>
                                <?php $this->session->userdata('customer_uname')?$account=$this->session->userdata('customer_uname'):$account='Login'; ?>
                                <a href="<?php echo base_url('user'); ?>"><?php echo $account; ?></a>
                            </li>

                            

                        </ul>
                    </div>

                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
<br>
<br>
<br>