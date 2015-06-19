<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
</div>
<form class="form-horizontal" action="<?php echo base_url('dashboard/user/add'); ?>" method="post">
    <div class="control-group">
        <label class="control-label" for="name">Name</label>
        <div class="controls">
            <input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>">
            <?php echo form_error('name'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="email">Email</label>
        <div class="controls">
            <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>">
            <?php echo form_error('email'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="username">Username</label>
        <div class="controls">
            <input type="text" id="username" name="username" value="<?php echo set_value('username'); ?>">
            <?php echo form_error('username'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password">Password</label>
        <div class="controls">
            <input type="password" id="password" name="password">
            <?php echo form_error('password'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="confirm-password">Confirm Password</label>
        <div class="controls">
            <input type="password" id="confirm-password" name="confirm-password">
            <?php echo form_error('confirm-password'); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn">Add</button>
        </div>
    </div>
</form>