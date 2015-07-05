<div class="span3">
    <div class="accordion" id="sidebar">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#dashboard">
                    <i class="icon-home"></i> Dashboard
                </a>
            </div>
            <div id="dashboard" class="accordion-body collapse <?php if ($this->uri->segment(2)=='' OR $this->uri->segment(2)=='home') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='home' OR $this->uri->segment(3)=='') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/home'); ?>">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#request">
                    <i class="icon-shopping-cart"></i> Request
                </a>
            </div>
            <div id="request" class="accordion-body collapse <?php if ($this->uri->segment(2)=='request' OR $this->uri->segment(2)=='approval' OR $this->uri->segment(2)=='invitation') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='request' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/request'); ?>">View Requests<span class="label label-info pull-right">+1</span></a></li>
                         <li <?php if ($this->uri->segment(2)=='payment' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/approval'); ?>">Unaprove Request</a></li>
                        <li <?php if ($this->uri->segment(2)=='order' AND $this->uri->segment(3)=='export') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/order/export'); ?>">Export</a></li> 
                    </ul>
                </div>
            </div>
        </div>
        
          <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#theme">
                    <i class="icon-heart"></i> Themes
                </a>
            </div>
            <div id="theme" class="accordion-body collapse <?php if ($this->uri->segment(2)=='theme') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
<!--                         <li <?php if ($this->uri->segment(2)=='theme' AND $this->uri->segment(3)=='unverified') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/theme/unverified'); ?>">Unverified Themes</a></li> -->
                        <li <?php if ($this->uri->segment(2)=='theme' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/theme'); ?>">View Themes</a></li>
                        <!-- <li <?php if ($this->uri->segment(2)=='theme' AND $this->uri->segment(3)=='add') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/theme/add'); ?>">Add Themes</a></li> -->
                        <!-- <li <?php if ($this->uri->segment(2)=='theme' AND $this->uri->segment(3)=='edit') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/theme/edit'); ?>">Update Themes</a></li> -->
                    </ul>
                </div>
            </div>
        </div>

 <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#order">
                    <i class="icon-heart"></i> Order
                </a>
            </div>
            <div id="order" class="accordion-body collapse <?php if ($this->uri->segment(2)=='order'||$this->uri->segment(2)=='payment') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='order' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/order'); ?>">View Orders</a></li>
                        <li <?php if ($this->uri->segment(2)=='payment' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/payment'); ?>">View Payments</a></li>
                        <!-- <li <?php if ($this->uri->segment(2)=='order' AND $this->uri->segment(3)=='add') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/theme/add'); ?>">Add Themes</a></li> -->
                        <!-- <li <?php if ($this->uri->segment(2)=='order' AND $this->uri->segment(3)=='edit') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/theme/edit'); ?>">Update Themes</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
       

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#customer">
                    <i class="icon-user"></i> Customer
                </a>
            </div>
            <div id="customer" class="accordion-body collapse <?php if ($this->uri->segment(2)=='customer') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='customer' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/customer/view'); ?>">View Customers</a></li>
                        <!-- <li <?php if ($this->uri->segment(2)=='customer' AND $this->uri->segment(3)=='add') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/package/add'); ?>">Add User</a></li> -->
                        
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#dev">
                    <i class="icon-eye-open"></i> Developer
                </a>
            </div>
            <div id="dev" class="accordion-body collapse <?php if ($this->uri->segment(2)=='developer') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='dev' AND $this->uri->segment(3)=='') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/developer'); ?>">View Developer</a></li>
                        <li <?php if ($this->uri->segment(2)=='dev' AND $this->uri->segment(3)=='') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/developer/add'); ?>">Add Developer</a></li>
                        
                        
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#report" href="#report">
                    <i class="icon-heart"></i> Reports
                </a>
            </div>
            <div id="report" class="accordion-body collapse <?php if ($this->uri->segment(2)=='report') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='report' AND $this->uri->segment(3)=='themes') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/report/themes'); ?>">All Themes Sold</a></li>
                        <li <?php if ($this->uri->segment(2)=='report' AND $this->uri->segment(3)=='permonth') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/report/permonth'); ?>">Themes Per Month</a></li>
                        <li <?php if ($this->uri->segment(2)=='report' AND $this->uri->segment(3)=='peryear') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/report/peryear'); ?>">Themes Per Year</a></li>
                        <li <?php if ($this->uri->segment(2)=='report' AND $this->uri->segment(3)=='income_permonth') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/report/income_permonth'); ?>">Income Per Month</a></li>
                        <li <?php if ($this->uri->segment(2)=='report' AND $this->uri->segment(3)=='income_peryear') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/report/income_peryear'); ?>">Income Per Year</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#admin">
                    <i class="icon-heart"></i> Admin
                </a>
            </div>
            <div id="admin" class="accordion-body collapse <?php if ($this->uri->segment(2)=='user') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='user' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/user'); ?>">View Users</a></li>
                        <li <?php if ($this->uri->segment(2)=='user' AND $this->uri->segment(3)=='add') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/user/add'); ?>">Add User</a></li>
                        <li <?php if ($this->uri->segment(2)=='user' AND $this->uri->segment(3)=='profile') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/user/profile'); ?>">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#news">
                    <i class="icon-list-alt"></i> News
            </div>
            <div id="invitation" class="accordion-body collapse <?php if ($this->uri->segment(2)=='news') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        
                        
                    </ul>
                </div>
            </div>
        </div> -->
        
    </div>
</div>