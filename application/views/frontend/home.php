
<!-- Site Description -->
<div class="container">

    <div class="marketing">
    </br>
 <img class="marketing-img" src="<?php echo base_url('assets/frontend/img/more_features.png') ?>">
        <h1>NUSANTARA THEME PROVIDER</h1>
        <p class="marketing-byline">Feel Free to Design Feel Free to Find</p>
<div class="row-fluid">
    
    <form class="form-search" method="post" action="<?php echo base_url('dashboard/customer/view'); ?>">
        <input name="keyword" type="text" class="span5">
        <select name="field" class="input-large">
            <option value=""></option>
            <option value="Toserba">Toserba</option>
            <option value="Distro">Distro</option>
            <option value="Property">Property</option>
            <option value="Otomotif">Otomotif</option>
            <option value="Elektronik">Elektronik</option>
        </select>
        <button type="submit" class="btn">Search</button>
    </form>


    <br>
    <br>
     <br>
    <br>
     <br>
    <br>
    <br>
        
 <div class="portfolio container">

            <div class="portfolio-title">
                <h3>New Theme</h3>
            </div>
            
            <div class="row">
                <?php foreach ($newtheme->result() as $value) : ?>
                <div class="work span3">
                       
                       <a href="<?php echo base_url('theme/detail/'.$value->theme_id); ?>">
                    <img src="<?php echo base_url('themes/images/'.$value->theme_images);?>" alt="" class="img-responsive" alt="Responsive image">
                    <h4><?php echo $value->theme_name; ?></h4>
                    <p><?php echo $value->theme_description; ?></p>
                    <div class="icon-awesome">
                       
                    </div>
 
                </div>

                   <?php endforeach; ?>
                </div>

            </div>

        </div>


   
           <!-- <li data-id="p-6" data-type="print-design" class="span3">
                <div class="work">
                    <a href="assets/frontend/img/portfolio/work6.jpg" rel="prettyPhoto">
                        <img src="assets/frontend/img/portfolio/01.jpg" alt="">
                    </a>
                   
                    <p>Keterangan</p>
                </div>
            </li>
            <li data-id="p-7" data-type="web-design" class="span3">
                <div class="work">
                    <a href="assets/frontend/img/portfolio/work7.jpg" rel="prettyPhoto">
                        <img src="assets/frontend/img/portfolio/01.jpg" alt="">
                    </a>
                    
                    <p>Keterangan</p>
                </div>
            </li>
            <li data-id="p-8" data-type="print-design" class="span3">
                <div class="work">
                    <a href="assets/frontend/img/portfolio/work8.jpg" rel="prettyPhoto">
                        <img src="assets/frontend/img/portfolio/01.jpg" alt="">
                    </a>
                    
                    <p>Keterangan</p>
                </div>
            </li>-->
            
               
        </ul>
    </div>
        </div>
    </div>
</div>
<br>
<br>

<!-- Services -->

<!-- Testimonials 
<div class="testimonials container">
    <div class="testimonials-title">
        <h3>Testimonials</h3>
    </div>
    <div class="row">
        <div class="testimonial-list span12">
            <div class="tabbable tabs-below">
                <div class="tab-content">
                    <div class="tab-pane active" id="A">
                        <img src="<?php echo base_url('assets/frontend/img/testimonials/1.jpg') ?>" title="" alt="">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                    </div>
                    <div class="tab-pane" id="B">
                        <img src="<?php echo base_url('assets/frontend/img/testimonials/2.jpg') ?>" title="" alt="">
                        <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                    </div>
                    <div class="tab-pane" id="C">
                        <img src="<?php echo base_url('assets/frontend/img/testimonials/3.jpg') ?>" title="" alt="">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                    </div>
                    <div class="tab-pane" id="D">
                        <img src="<?php echo base_url('assets/frontend/img/testimonials/1.jpg') ?>" title="" alt="">
                        <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#A" data-toggle="tab"></a></li>
                    <li class=""><a href="#B" data-toggle="tab"></a></li>
                    <li class=""><a href="#C" data-toggle="tab"></a></li>
                    <li class=""><a href="#D" data-toggle="tab"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
-->