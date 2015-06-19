<style>
    .table-borderless th, .table-borderless td { 
        border-top: none; 
    }
    .set { 
        width: 80px;
    }
</style>
<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
</div>
<?php foreach ($customer->result() as $value) : ?>
<div class="row-fluid">
    <div class="span6">
        <table class="table table-borderless">
            <tr>
                <td class="set"><strong>Name</strong></td>
                <td>: <?php echo $value->customer_name; ?></td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>: <?php echo $value->customer_email; ?></td>
            </tr>
            <tr>
                <td><strong>Phone</strong></td>
                <td>: <?php echo $value->customer_phone; ?></td>
            </tr>
            <tr>
                <td><strong>Address</strong></td>
                <td>: <?php echo $value->customer_address; ?></td>
            </tr>
        </table>
    </div>
    <div class="span6">
        <table class="table table-borderless">
            
        </table>
    </div>
</div>
<?php endforeach; ?>