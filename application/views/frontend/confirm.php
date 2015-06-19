

<!-- About Us Text -->
<div class="about-us container">
    <div class="row">
        <div class="about-us-text span12">
            <?php echo form_open('payment/confirm');?>
            Order ID :
            <select name="order">
                <?php foreach ($order_id->result() as $value) : ?>
                <option value="<?php echo $value->order_id; ?>"><?php echo $value->order_id; ?></option>
                <?php endforeach; ?>
            </select>
            <br /><br />
            <!-- Total : 
            <input type="text" name="price" />
            <br /><br /> -->
            Message : 
            <textarea name="message"> </textarea>
            <br /><br />
            <input type="submit" value="Confirm" />

        </form>
        </div>
    </div>
</div>

<!-- Meet Our Team -->



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
                        <img src="assets/img/testimonials/1.jpg" title="" alt="">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                    </div>
                    <div class="tab-pane" id="B">
                        <img src="assets/img/testimonials/2.jpg" title="" alt="">
                        <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                    </div>
                    <div class="tab-pane" id="C">
                        <img src="assets/img/testimonials/3.jpg" title="" alt="">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                    </div>
                    <div class="tab-pane" id="D">
                        <img src="assets/img/testimonials/1.jpg" title="" alt="">
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
