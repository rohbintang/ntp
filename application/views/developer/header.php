<div class="navbar navbar-static-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo base_url('developer'); ?>">NTP</a>
            <div class="nav-collapse collapse navbar-responsive-collapse">
                <ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> <?php echo $this->session->userdata('developer_uname'); ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('developer/profile');?>"><i class="icon-edit"></i> Profile</a></li>
                            <li><a href="<?php echo base_url();?>" target="blank"><i class="icon-eye-open"></i> Visit Website</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url('developer/auth/logout');?>"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>