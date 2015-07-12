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
            <?php if(!in_array($tipe,[3,4])){ ?>
            <th style="width: 10%;">ID</th>
            <?php if($tipe == 0){ ?>
            <th style="width: 35%;">Themes</th>
            <?php }elseif($tipe == 1){ ?>
            <th style="width: 20%;">Themes</th>
            <th style="width:15%;">Month</th>
            <?php }elseif($tipe == 2){ ?>
            <th style="width: 25%;">Themes</th>
            <th style="width:10%;">Year</th>
            <?php } ?>
            
            <th style="width: 20%;">Price</th>
            <th style="width: 5;">Sold</th>
            <th style="width: 20%;">Total</th>
            <th style="width: 10%;">Dev</th>
            <?php }else{ ?>
            <?php if($tipe == 3){ ?>
            <th style="width: 40%;">Month</th>
            <?php } else{ ?>
            <th style="width: 40%;">Year</th>
            <?php } ?>
            <th style="width: 30%;">Total Themes</th>
            <th style="width: 40%;">Total Price</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users->result() as $value) : ?>
            <?php if(!in_array($tipe,[3,4])){ ?>
            <tr>
                <td><?php echo $value->theme_id; ?></td>
                <td><?php echo $value->theme_name; ?></td>
                <?php if($tipe == 1){ ?>
                <td><?php echo $this->report_model->month($value->bulan).' '.$value->tahun; ?></td>
                <?php }elseif($tipe == 2){ ?>
                <td><?php echo $value->tahun; ?></td>
                <?php } ?>
                <td><?php echo number_format($value->theme_price,2,'.',','); ?></td>
                <td><?php echo $value->total; ?></td>
                <td><?php $total = $value->theme_price*$value->total; echo number_format($total,2,'.',','); ?></td>
                <td><?php echo $this->report_model->get_dev($value->developer_id,'developer_name'); ?></td>
            </tr>
            <?php }else{ ?>
            <tr>
                <?php if($tipe == 3){ ?>
                <td><?php echo $this->report_model->month($value->bulan).' '.$value->tahun; ?></td>
                <?php }elseif($tipe == 4){ ?>
                <td><?php echo $value->tahun; ?></td>
                <?php } ?>
                <td><?php echo $value->total; ?></td>
                <td><?php echo number_format($value->total_harga,2,'.',','); ?></td>
            </tr>
            <?php } ?>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pagination; ?>