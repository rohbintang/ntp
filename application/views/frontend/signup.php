    <!-- Contact Us -->
        <div class="contact-us container">
            <div class="row">
                <div class="contact-form span7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <a href="">suscipit lobortis</a> nisl ut aliquip ex ea commodo consequat.</p>
                    <form method="post" action="<?php echo base_url('register/developer'); ?>">
                         <div class="control-group">
                            <label class="control-label" for="uname">Username</label>
                             <div class="controls">
                          <input id="uname" type="text" name="uname" value="<?php echo set_value('uname'); ?>" placeholder="masukan username">
                            <?php echo form_error('uname'); ?>
                            </div>
                              </div>

                         <div class="control-group">
                            <label class="control-label" for="email">Email</label>
                             <div class="controls">
                          <input id="email" type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="masukan email">
                       <?php echo form_error('email'); ?>
                        </div>
                              </div>
                          <div class="control-group">
                            <label class="control-label" for="pwd">Password</label>
                             <div class="controls">
                          <input id="pwd" type="password" name="pwd" placeholder="masukan password">
                        <?php echo form_error('pwd'); ?>
                        </div>
                              </div>
                        <div class="control-group">
                            <label class="control-label" for="cpwd">Konfirm Password</label>
                             <div class="controls">
                          <input id="cpwd" type="password" name="cpwd" placeholder="konfirm password">
                          <?php echo form_error('cpwd'); ?>
                           </div>
                              </div>
                        <button type="submit">Send</button>
                    </form>
                </div>


   <div class="contact-address span5">
            <div class="well">
                     <div class="row-fluid">
        <h4>Themes by </h4>
    </hr>
        <div class="span2" >
        <img src="<?php echo base_url('assets/frontend/ak.jpg') ?>" class="img-circle">
        </div>
        
        <div class="span8">
            
            
        </div>
</div>        
        
                    
                </div>
                <!--<div class="btn-group">
                    <button class="btn" id="prevtab" type="button">Prev</button>
                    <button class="btn" id="nexttab" type="button">Next</button>
                </div>-->
            </div>
</div>
</div>