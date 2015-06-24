

	<?php echo $error;?>
<?php echo form_open_multipart('developer/theme/add');?>

  
    <legend>Upload Theme</legend>
 <div class="control-group">
                            <label class="control-label" for="uname">Nama Theme</label>
                             <div class="controls">
                          <input id="name" type="text" name="name" value="<?php echo set_value('name'); ?>" placeholder="nama theme">
                            <?php echo form_error('name'); ?>
                            </div>
                              </div>



<div class="control-group">
                            <label class="control-label" for="desc">Deskripsi</label>
                             <div class="controls">
                          <textarea id="desc" type="text" name="desc" value="<?php echo set_value('desc'); ?>" placeholder="Deskripsi Theme"> </textarea>
                            <?php echo form_error('desc'); ?>
                            </div>
                              </div>

<div class="control-group">
                            <label class="control-label" for="price">Harga</label>
                             <div class="controls">
<input type="text" name="price" />
<?php echo form_error('price'); ?>
                            </div>
                              </div>
File Download : 
<input type="file" name="userfile" size="20" />

<br /><br />
Image File : 
<input type="file" name="imagefile" size="20" required="true" />

<br /><br />
 <legend>Fitur</legend>





<div class="control-group">
<label class="control-label" for="cat">Theme Category</label>
<div class="controls">
<select id="cat" class="form-control" name="cat">
  <option>Toserba</option>
  <option>Distro</option>
  <option>Properti</option>
  <option>Otomotif</option>
  <option>Elektronik</option>
</select>
 </div>
</div>



<div class="control-group">
<label class="control-label" for="resolution">Theme Resolution</label>
<div class="controls">
<select id="res" class="form-control" name="res">
  <option>HD</option>
  <option>Fixed</option>
 
</select>
 </div>
</div>

<div class="control-group">
<label class="control-label" for="widget">Theme Widget</label>
<div class="controls">
<select class="form-control" id="widget" name="widget">
  <option>Toserba</option>
  <option>Distro</option>
  <option>Properti</option>
  <option>Otomotif</option>
  <option>Elektronik</option>
</select>
 </div>
                              </div>




                              <div class="control-group">
                            <label class="control-label" for="compt">Theme Compatibility</label>
                             <div class="controls">
<select class="form-control" id="compt" name="compt">
  <option>Toserba</option>
  <option>Distro</option>
  <option>Properti</option>
  <option>Otomotif</option>
  <option>Elektronik</option>
</select>
 </div>
                              </div>



                              <div class="control-group">
                            <label class="control-label" for="framework">Theme Framework</label>
                             <div class="controls">
<select class="form-control" name="framework">
  <option>Toserba</option>
  <option>Distro</option>
  <option>Properti</option>
  <option>Otomotif</option>
  <option>Elektronik</option>
</select>
 </div>
                              </div>
                              <div class="control-group">
                            <label class="control-label" for="wpver">Wp Version</label>
                             <div class="controls">
<select class="form-control" name="wpver">
  <option>Toserba</option>
  <option>Distro</option>
  <option>Properti</option>
  <option>Otomotif</option>
  <option>Elektronik</option>
</select>
 </div>
                              </div>

                              <div class="control-group">
                            <label class="control-label" for="column">Column</label>
                             <div class="controls">
<select class="form-control" name="column">
  <option>Toserba</option>
  <option>Distro</option>
  <option>Properti</option>
  <option>Otomotif</option>
  <option>Elektronik</option>
</select>
 </div>
                              </div>


                              <div class="control-group">
                            <label class="control-label" for="layout">Layout</label>
                             <div class="controls">
<select class="form-control" name="layout">
  <option>Toserba</option>
  <option>Distro</option>
  <option>Properti</option>
  <option>Otomotif</option>
  <option>Elektronik</option>
</select>
 </div>
                              </div>
                              <div class="control-group">
                            <label class="control-label" for="price">Demo URL</label>
                             <div class="controls">
<input type="text" name="demo" />
<?php echo form_error('price'); ?>
                            </div>
                              </div>
<input type="submit" value="upload" />
