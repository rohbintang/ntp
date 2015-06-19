<style>
    .table-borderless th, .table-borderless td { 
        border-top: none; 
    }
    .set { 
        width: 150px;
    }
</style>
<?php foreach ($theme->result() as $value) : ?>
    <div class="row-fluid">
        <div class="span6">
            <table class="table table-borderless">
                <tr>
                    <td class="set"><strong>Theme ID</strong></td>
                    <td>: <?php echo $value->theme_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>: <?php echo $value->theme_name; ?></td>
                </tr>
                
                
                
                <tr>                    
                
            </table>
        </div>
        <div class="span6">
            <table class="table table-borderless">
                <tr>
                    <td class="set"><strong>Name</strong></td>
                    <td>: <a href="<?php echo base_url('dashboard/developer/detail/' . $value->developer_id); ?>"><?php echo $value->developer_name; ?></a></td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td>: <?php echo $value->developer_kontak; ?></td>
                </tr>
                <tr>
                    <td><strong>Download Link</strong></td>
                    <td>: <a href="<?php echo base_url('themes/' . $value->theme_files); ?>"><?php echo $value->theme_name; ?></a></td>
                </tr>

            </table>
        </div>
    </div>
<?php endforeach; ?>