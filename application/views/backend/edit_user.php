<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
</div>
<ul id="user" class="nav nav-tabs">
    <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
    <li class=""><a href="#pass" data-toggle="tab">Password</a></li>
</ul>
<div id="userContent" class="tab-content">
    <div class="tab-pane fade active in" id="profile">
        <form class="form-horizontal" action="<?php echo base_url('dashboard/user/edit/'.$id) ?>" method="post">
            <div class="control-group">
                <label class="control-label" for="name">Name</label>
                <div class="controls">
                    <input type="text" id="name" name="name" value="<?php echo set_value('name', $name); ?>">
                    <?php echo form_error('name'); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="email">Email</label>
                <div class="controls">
                    <input type="text" id="email" name="email" value="<?php echo set_value('email', $email); ?>">
                    <?php echo form_error('email'); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="username">Username</label>
                <div class="controls">
                    <input type="text" id="username" name="username" value="<?php echo set_value('username', $username); ?>">
                    <?php echo form_error('username'); ?>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input name="edit" type="submit" class="btn" value="Edit">
                </div>
            </div>
        </form>
    </div>
    <div class="tab-pane fade" id="pass">
        <form class="form-horizontal" action="<?php echo base_url('dashboard/user/edit/'.$id); ?>" method="post">
            <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input name="password" type="password" id="password" value="<?php echo set_value('password', $password); ?>">
                    <?php echo form_error('password'); ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="confirm-password">Confirm Password</label>
                <div class="controls">
                    <input name="confirm" type="password" id="confirm" value="<?php echo set_value('confirm', $confirm); ?>">
                    <?php echo form_error('confirm'); ?>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input name="pass" type="submit" class="btn" value="Edit">
                </div>
            </div>
        </form>
    </div>
</div>