<style>
    .table-borderless th, .table-borderless td { 
        border-top: none; 
    }
    .set { 
        width: 150px;
    }
</style>
<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
</div>
<?php foreach ($approval->result() as $value) : ?>
    <div class="row-fluid">
        <div class="span6">
            <table class="table table-borderless">
                <tr>
                    <td class="set"><strong>Approval ID</strong></td>
                    <td>: <?php echo $value->approval_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Date</strong></td>
                    <td>: <?php echo date('d-m-Y', strtotime($value->approval_date)); ?></td>
                </tr>
                <tr>
                    <td><strong>Message</strong></td>
                    <td>: <?php echo $value->approval_message; ?></td>
                </tr>
                <!-- <tr>
                    <td><strong>Status</strong></td>
                    <td>: <?php echo ($value->approval_status == 1) ? 'Verified' : 'Not Verified'; ?></td>
                </tr> -->
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
                    <td><strong>Request ID</strong></td>
                    <td>: <a href="<?php echo base_url('dashboard/request/detail/' . $value->request_id); ?>"><?php echo $value->request_id; ?></a></td>
                </tr>
                <tr>
                    <td><strong>Theme</strong></td>
                    <td>: <a href="<?php echo base_url('dashboard/theme/detail/' . $value->theme_id); ?>"><?php echo $value->theme_name; ?></a></td>
                </tr>
            </table>
        </div>
    </div>
<?php endforeach; ?>