<?php echo $error;?>
<?php echo form_open_multipart('developer/theme/resubmit/'.$id);?>
Theme Name : 
<input type="text" name="name" value="<?php echo set_value('name', $name); ?>" />
<br /><br />
Theme Desc : 
<textarea name="desc"><?php echo set_value('desc', $desc); ?></textarea>
<br /><br />
Theme Price : 
<input type="text" name="price" value="<?php echo set_value('price', $price); ?>" />
<br /><br />
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="resubmit" />

</form>