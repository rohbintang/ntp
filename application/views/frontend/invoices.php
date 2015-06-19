
<!-- Example row of columns -->
<div class="contact-us container">
    <div class="row">
        <div class="contact-form span7">
            <div class="row-fluid">
                
                <div class="well">
                     <div class="row-fluid">
     <?php //foreach ($lihat->result() as $value) : ?>
        <div class="span2" >
        
        </div>
        
        <div class="span8">
           <table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 10%;">ID</th>
            <th style="width: 30%;">Theme</th>
            <th style="width: 30%;">Price</th>
            <th style="width: 30%;">Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php //foreach ($customers->result() as $value) : ?>
            <tr>
                <td><?php //echo $value->customer_id; ?></td>
                <td><?php //echo $value->customer_name; ?></td>
                <td><?php //echo $value->customer_phone; ?></td>
                <td><?php //echo $value->customer_email; ?></td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-small" href="<?php //echo base_url('dashboard/customer/detail/'.$value->customer_id); ?>"><i class="icon-eye-open"></i> View</a>
                        <a class="btn btn-small" href="<?php// echo base_url('dashboard/customer/del/'.$value->customer_id); ?>"><i class="icon-remove"></i> Delete</a>
                    </div>
                </td>
            </tr>
        <?php //endforeach; ?>
    </tbody>
</table>
<?php //echo $pagination; ?>
        </div>
        
        
                    
                </div>
                <!--<div class="btn-group">
                    <button class="btn" id="prevtab" type="button">Prev</button>
                    <button class="btn" id="nexttab" type="button">Next</button>
                </div>-->
            </div>
        </div>

<?php //endforeach; ?>
        </div>
        <div class="contact-address span5">
       

         <?php $this->load->view($side);?>
            </div>
                

</div>
    </div>
</div>
</div>
</div>
