<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
    <form class="form-search pull-right" method="post" action="<?php echo base_url('dashboard/package/view'); ?>">
        <input name="keyword" type="text" class="input-medium">
        <select name="field" class="input-small">
            <option value="name">Name</option>
        </select>
        <button type="submit" class="btn">Search</button>
    </form>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 10%;">ID</th>
            <th style="width: 25%;">Package</th>
            <th style="width: 25%;">Price</th>
            <th style="width: 25%;">Description</th>
            <th style="width: 15%;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($packages->result() as $value) : ?>
            <tr>
                <td><?php echo $value->package_id; ?></td>
                <td><?php echo $value->package_name; ?></td>
                <td><?php echo $value->package_price; ?></td>
                <td><?php echo $value->package_description; ?></td>
                <td>
                    <!--<a href=""><i class="icon-pencil"></i> Edit</a> <a href=""><i class="icon-remove"></i> Delete</a>-->
                    <div class="btn-group">
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/package/edit/' . $value->package_id); ?>"><i class="icon-pencil"></i> Edit</a>
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/package/del/' . $value->package_id); ?>"><i class="icon-remove"></i> Delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pagination; ?>