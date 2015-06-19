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
<?php foreach ($request->result() as $value) : ?>
    <div class="row-fluid">
        <div class="span6">
            <table class="table table-borderless">
                <tr>
                    <td class="set"><strong>Request ID</strong></td>
                    <td>: <?php echo $value->request_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Date</strong></td>
                    <td>: <?php echo date('d-m-Y', strtotime($value->request_date)); ?></td>
                </tr>
                <tr>
                    <td><strong>Theme</strong></td>
                    <td>: <a href="<?php echo base_url('dashboard/theme/detail/'.$value->theme_id); ?>"><?php echo $value->theme_name; ?></a></td>
                </tr>
                <tr>
                    <td><strong>Price</strong></td>
                    <td>: <?php echo $value->theme_price; ?></td>
                </tr>
                <!-- <tr>
                    <td><strong>Suggested Price</strong></td>
                    <td>: $ <?php echo $value->theme_usulan_harga; ?></td>
                </tr> -->
            </table>
        </div>
        <div class="span6">
            <table class="table table-borderless">
                <tr>
                    <td class="set"><strong>Developer</strong></td>
                    <td>: <a href="<?php echo base_url('dashboard/customer/detail/' . $value->developer_id); ?>"><?php echo $value->developer_name; ?></a></td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td>: <?php echo $value->developer_kontak; ?></td>
                </tr>
                <!-- <tr>
                    <td><strong>Approval ID</strong></td>
                    <td>: <a href="<?php echo base_url('dashboard/payment/detail/' . $value->approval_id); ?>"><?php echo $value->approval_id; ?></a></td>
                </tr> -->
                <tr>
                    <td><strong>Link Download</strong></td>
                    <td>: <a href="<?php echo base_url('themes/' . $value->theme_files); ?>">Download</a></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row-fluid">
        <p class="lead pull-left">Approval</p>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <?php echo form_open('dashboard/request/approval/'.$value->approval_id);?>
            <input name="request_id" type="hidden" value="<?php echo $value->request_id; ?>" />
            <input name="theme_id" type="hidden" value="<?php echo $value->theme_id; ?>" />
            Approval Message : 
            <textarea name="message"> </textarea>
            <br /><br />
            Approval Status : 
            <select name="status">
                <option value="1">Approve</option>
                <option value="2">Reject</option>
            </select>
            <!-- <br /><br /> -->
            <!-- <input type="file" name="userfile" size="20" /> -->

            <br /><br />

            <input type="submit" value="Submit" />

            </form>
        </div>
    </div>
<?php endforeach; ?>