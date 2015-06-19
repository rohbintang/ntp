

<!-- About Us Text -->
<div class="about-us container">
    <div class="row">
        <div class="about-us-text span12">
        <?php $i=1; ?>

        	<table class="table table-bordered">
      <thead>
        <tr>

          <th>#</th>
          <th>Name Theme</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      	<?php foreach($this->cart->contents() as $items): ?>
        <tr>

          <th scope="row"><?php echo $i;?></th>
          <td><?php echo $items['name']; ?></td>
           <td><?php echo number_format($items['price'],2,',','.'); ?></td>
          <td><a href="<?php echo base_url(); ?>index.php/cart/hapus/<?php echo $items['rowid']; ?>">x</a></td>
        </tr>
        	<?php $i++;?>
		<?php endforeach; ?>
      </tbody>
    </table>
		
				 
				<table class="table table-bordered">
      <thead>
				
			
		<th><h3>TOTAL : <?php echo 'Rp.'.number_format($this->cart->total(),2,',','.'); ?></h3></th>
 </table>
    

		<?php if ($this->session->userdata('customer_uname')&&$this->cart->total_items()!=0) : ?>
		<a href="<?php echo base_url('cart/checkout'); ?>" class="btn btn-large btn-block" type="button">checkout</a>
		<?php else : ?>
		<p>Please <a href="<?php echo base_url('login'); ?>">login</a> first before checkout. If you don't have an account please <a href="<?php echo base_url('register'); ?>">register</a>!</p>
		<?php endif; ?>
  </br>
  </br>
  </br>
  </br>
  </br>
</br>
</br>
</div>
    </div>
</div>