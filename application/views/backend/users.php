    <div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
    <form class="form-search pull-right" method="post" action="<?php echo base_url('dashboard/user/view'); ?>">
        <input name="keyword" type="text" class="input-medium">
        <select name="field" class="input-small">
            <option value="username">Username</option>
            <option value="name">Name</option>
            <option value="email">Email</option>
        </select>
        <button type="submit" class="btn">Search</button>
    </form>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 10%;">ID</th>
            <th style="width: 25%;">Username</th>
            <th style="width: 25%;">Name</th>
            <th style="width: 25%;">Email</th>
            <th style="width: 15%;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users->result() as $value) : ?>
            <tr>
                <td><?php echo $value->user_id; ?></td>
                <td><?php echo $value->user_username; ?></td>
                <td><?php echo $value->user_name; ?></td>
                <td><?php echo $value->user_email; ?></td>
                <td>
                    <!--<a href=""><i class="icon-pencil"></i> Edit</a> <a href=""><i class="icon-remove"></i> Delete</a>-->
                    <div class="btn-group">
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/user/edit/' . $value->user_id); ?>"><i class="icon-pencil"></i> Edit</a>
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/user/del/' . $value->user_id); ?>"><i class="icon-remove"></i> Delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pagination; ?>