    <div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
    <!-- <form class="form-search pull-right" method="post" action="<?php echo base_url('dashboard/user/view'); ?>">
        <input name="keyword" type="text" class="input-medium">
        <select name="field" class="input-small">
            <option value="username">Theme</option>
            <option value="name">Developer</option>
            <option value="email">Categories</option>
        </select>
        <button type="submit" class="btn">Search</button>
    </form> -->
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 10%;">ID</th>
            <th style="width: 20%;">Theme</th>
            <th style="width: 25%;">Description</th>
            <th style="width: 20%;">Price</th>
            
            <th style="width: 15%;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users->result() as $value) : ?>
        
            <tr>
                <td><?php echo $value->theme_id; ?></td>
                <td><?php echo $value->theme_name; ?></td>
                <td><?php echo $value->theme_description; ?></td>
                <td><?php echo $value->theme_price; ?></td>
               
                <td>
                    <!--<a href=""><i class="icon-pencil"></i> Edit</a> <a href=""><i class="icon-remove"></i> Delete</a>-->
                    <div class="btn-group">
                        
                            <a class="btn btn-small" href="<?php echo base_url('developer/theme/resubmit/' . $value->theme_id); ?>"><i class="icon-pencil"></i> Resubmit</a>
                        
                        <a class="btn btn-small" href="<?php echo base_url('developer/theme/view/' . $value->theme_id); ?>"><i class="icon-eye"></i> View</a>
                        <a class="btn btn-small" href="<?php echo base_url('developer/theme/edit/' . $value->theme_id); ?>"><i class="icon-pencil"></i> Edit</a>
                        <a class="btn btn-small" href="<?php echo base_url('developer/theme/del/' . $value->theme_id); ?>"><i class="icon-remove"></i> Delete</a>
                        
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pagination; ?>