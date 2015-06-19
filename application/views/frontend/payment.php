
<!-- About Us Text -->
<div class="about-us container">
    <div class="row">
        <div class="about-us-text span12">
            <h4>Pembayaran</h4>
            <p>Silakan melakukan pembayaran sebesar Rp <?php echo 'Rp.'.number_format($payment->payment_total,2,',','.'); ?> pada rekening di bawah ini, setelah melakukan pembayaran silakan konfirmasi pembayaran melalui link berikut <a href="<?php echo base_url('payment/confirm')?>">ini</a>
			<br>Dengan kode Transaksi/Order <b><?php echo $this->uri->segment(3); ?></b>
				<!-- <br> Kami berusaha untuk menjadi solusi, yakni membantu mempermudah proses pembuatan undangan pernikahan dengan kualitas desain yang terbaik, dengan kehadiran kami diharapkan calon pengantin dapat membuat undangan pernikahan dengan energi minimal, sehingga bisa lebih mengalokasikan waktunya untuk mempersiapkan hal lain yang tidak kalah penting.  -->
            </p>
           

            <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Bank</th>
          <th>A.N.</th>
          <th>No rekening</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>BCA</td>
          <td>mabrur roh bintang jaya</td>
          <td>1234-5678-91011</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>BRI</td>
          <td>mabrur roh bintang jaya</td>
          <td>1234-5678-91011</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>BNI</td>
          <td>mabrur roh bintang jaya</td>
          <td>1234-5678-91011</td>
        </tr>
      </tbody>
    </table>
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
