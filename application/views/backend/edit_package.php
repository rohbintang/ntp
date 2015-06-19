<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
</div>
<form class="form-horizontal" action="<?php echo base_url('dashboard/package/edit/'.$id); ?>" method="post">
    <div class="control-group">
        <label class="control-label" for="name">Package Name</label>
        <div class="controls">
            <input type="text" id="name" name="name" value="<?php echo set_value('name', $name); ?>">
            <?php echo form_error('name'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="price">Package Price</label>
        <div class="controls">
            <input type="text" id="price" name="price" value="<?php echo set_value('price', $price); ?>">
            <?php echo form_error('price'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="description">Description</label>
        <div class="controls">
            <textarea class="input-xxlarge" name="description" rows="5"><?php echo set_value('description', $description); ?></textarea>
            <?php echo form_error('description'); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <input name="edit" type="submit" class="btn" value="Edit">
        </div>
    </div>
</form>