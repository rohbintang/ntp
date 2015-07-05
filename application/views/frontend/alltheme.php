<div class="container">

    <div class="marketing">

<div class="row">
        <div class="portfolio-navigator span12">
            <h4>THEMES GALERY
            </h4>
            
        </div>
    </div>
</hr>
    <div class="portfolio container">

           
            
            <div class="row">
                <?php foreach ($themes->result() as $value) : ?>
                <div class="work span3">
                       
                       <a href="<?php echo base_url('theme/detail/'.$value->theme_id); ?>">
                    <img src="<?php echo base_url('themes/images/'.$value->theme_images);?>" alt="">
                    <h4><?php echo $value->theme_name; ?></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    <div class="icon-awesome">
                        
                    </div>
 
                </div>

                   <?php endforeach; ?>

                </div>

            </div>

        </div>

 </div>
  <br> <br> <br>