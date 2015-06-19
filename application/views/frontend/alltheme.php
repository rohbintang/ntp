<div class="container">

    <div class="marketing">

<div class="row">
        <div class="portfolio-navigator span12">
            <h4 class="filter-portfolio">
                <a class="all" id="active-imgs" href="#">All Theme</a>
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
                        <a href="assets/img/portfolio/work1.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="<?php echo base_url('theme/detail/'.$value->theme_id); ?>"><i class="icon-link"></i></a>
                    </div>
 
                </div>

                   <?php endforeach; ?>

                </div>

            </div>

        </div>

 </div>
  <br> <br> <br>