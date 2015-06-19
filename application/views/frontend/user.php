
<!-- Example row of columns -->
<div class="contact-us container">
    <div class="row">
        <div class="contact-form span7">
            <div class="row-fluid">
                
                <div class="well">
                     <div class="row-fluid">
     
        
        
        <div class="span8">
       <p>
    Welcome <?php echo $this->session->userdata['customer_name']; ?>
</p>
        
        
                    
                </div>
            </div>
                <!--<div class="btn-group">
                    <button class="btn" id="prevtab" type="button">Prev</button>
                    <button class="btn" id="nexttab" type="button">Next</button>
                </div>-->
            </div>
        </div>


        </div>
        <div class="contact-address span5">
       

         <?php $this->load->view($side);?>
            </div>
                

</div>
    </div>
</div>
</div>
</div>
