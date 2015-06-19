
<!-- Example row of columns -->
<div class="contact-us container">
    <div class="row">
        <div class="contact-form span7">
            <div class="row-fluid">
                
                <div class="well">
                     <div class="row-fluid">
     <?php foreach ($lihat->result() as $value) : ?>
        <div class="span2" >
        <img src="<?php echo base_url('assets/frontend/ak.jpg') ?>" class="img-circle">
        </div>
        
        <div class="span8">
            <h3><?php echo $value->developer_name; ?></h3>
            <h6>Email: <?php echo $value->developer_email; ?> </h6>
            <h6><?php echo $value->developer_bio; ?></h6>
            <h6><?php echo $value->developer_kontak; ?></h6>
            <hr>
            <h6><a href="#">More </a></h6>
        </div>
        
        
                    
                </div>
                <!--<div class="btn-group">
                    <button class="btn" id="prevtab" type="button">Prev</button>
                    <button class="btn" id="nexttab" type="button">Next</button>
                </div>-->
            </div>
        </div>

<?php endforeach; ?>
        </div>
        <div class="contact-address span5">
       

         <?php $this->load->view($side);?>
            </div>
                

</div>
    </div>
</div>
</div>
</div>
