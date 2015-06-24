
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('dashboard/home');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Request<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('dashboard/request'); ?>">View Request</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('dashboard/request/rejected'); ?>">Rejected</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('dashboard/theme'); ?>"><i class="fa fa-table fa-fw"></i> View Themes</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Order<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('dashboard/order'); ?>">View Order</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('dashboard/payment'); ?>">View Payments</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Customer<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">View Customer</a>
                                </li>
                            </li>
                        </ul>
                                
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Developer<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">View Developer</a>
                                </li>
                                <li>
                                    <a href="login.html">Add Developer</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">All Theme Sold</a>
                                </li>
                                <li>
                                    <a href="login.html">Themes Per Month</a>
                                </li>
                                <li>
                                    <a href="blank.html">Themes Per Year</a>
                                </li>
                                <li>
                                    <a href="login.html">Income Per Month</a>
                                </li>
                                <li>
                                    <a href="login.html">Income per Year</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Admin <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">View Users</a>
                                </li>
                                <li>
                                    <a href="login.html">Add Users</a>
                                </li>
                                <li>
                                    <a href="blank.html">Profile</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
