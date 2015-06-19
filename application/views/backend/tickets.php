<div class="row-fluid">
    <p class="lead pull-left"></p>
    <form class="form-search pull-right" method="post" action="<?php echo base_url('dashboard/customer/view'); ?>">
        <input name="keyword" type="text" class="input-medium">
        <select name="field" class="input-small">
            <option value="name">Name</option>
            <option value="phone">Phone</option>
            <option value="email">Email</option>
        </select>
        <button type="submit" class="btn">Search</button>
    </form>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 10%;">ID</th>
            <th style="width: 30%;">Name</th>
            <th style="width: 30%;">Phone</th>
            <th style="width: 30%;">Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/customer/detail/'.$value->developer_id); ?>"><i class="icon-eye-open"></i> View</a>
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/customer/del/'.$value->developer_id); ?>"><i class="icon-remove"></i> Delete</a>
                    </div>
                </td>
            </tr>
      
    </tbody>
</table>
<