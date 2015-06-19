
<!-- Example row of columns -->
<div class="contact-us container">
    <div class="row">
        <div class="contact-form span7">
            <div class="row-fluid">
                <legend>Upload Themes</legend>
                <div class="well">
                    <form action="<?php echo base_url('dev/upload') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="package" value="1">
                        <fieldset>
                            <div class="tabbable">
                                <ul class="nav nav-tabs" id="tab_bar">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Nama dan Deskripsi</a></li>
                                    <li><a href="#tab2" data-toggle="tab">File</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Kategori dan Atribut</a></li>
                                    <li><a href="#tab4" data-toggle="tab">Tags dan Pesan Reviewer</a></li>
                                    <li><a href="#tab5" data-toggle="tab">Konfirmasi</a></li>
                                </ul>
                                <div class="tab-content">

                                    <!-- TAB 1 -->
                                    <div class="tab-pane active" id="tab1">
                                        <div class="control-group">
                                            <label>Nama theme</label>
                                            <input name="namatheme" class="input-xxlarge" type="text" placeholder="nama theme anda">
                                            <?php echo form_error('namatheme'); ?>
                                            <label>Deskripsi theme</label>
                                            <textarea name="deskripsitheme" class="input-xxlarge" type="text" placeholder="deskripsi theme anda"></textarea>
                                            <?php echo form_error('deskripsitheme'); ?>
                                            
                                        </div> 
                                    </div>

                                    <!-- TAB 2 -->
                                    <div class="tab-pane" id="tab2">
                                        <div class="control-group">
                                            <label>Gambar preview</label>
                                            <input name="gbprev" class="input-xxlarge" type="file" placeholder="">
                                            <?php echo form_error('email'); ?>
                                            <label>Gambar Keterangan</label>
                                            <input name="gbket" class="input-xxlarge" type="file" placeholder="">
                                            <?php echo form_error('nomortelfon'); ?>
                                            <label>File theme</label>
                                            <input name="filetheme" class="input-xxlarge" type="file" placeholder="theme dalam zip">
                                            <?php echo form_error('namaayahpria'); ?>
                                           
                                        </div>
                                    </div>

                                    <!-- TAB 3 -->
                                    <div class="tab-pane" id="tab3">
                                        <div class="control-group">
                                             <label>Kategori</label>
                                            
                                                    <select name="kategoritheme" class="input-xxlarge">
                                                    <option value=""></option>
                                                    <option value="Toserba">Toserba</option>
                                                    <option value="Distro">Distro</option>
                                                    <option value="Property">Property</option>
                                                    <option value="Otomotif">Otomotif</option>
                                                    <option value="Elektronik">Elektronik</option>
                                                    </select>
                                            <?php echo form_error('namaibupria'); ?>
                                            <label>Theme Resolution</label>
                                            <input name="resolution" class="input-xxlarge" type="text" placeholder="">
                                            <?php echo form_error('email'); ?>
                                            <label>Widget</label>
                                            <input name="widget" class="input-xxlarge" type="text" placeholder="">
                                            <?php echo form_error('nomortelfon'); ?>
                                            <label>Compatibility</label>
                                            <input name="compatibility" class="input-xxlarge" type="text" placeholder="">
                                            <?php echo form_error('email'); ?>
                                            <label>Framework</label>
                                            <input name="framework" class="input-xxlarge" type="text" placeholder="">
                                            <?php echo form_error('nomortelfon'); ?>
                                            <label>WP version</label>
                                            <input name="wpver" class="input-xxlarge" type="text" placeholder="">
                                            <?php echo form_error('namalengkapwanita'); ?>
                                            <label>File Included</label>
                                            <input name="fileincluded" class="input-xxlarge" type="text" placeholder="">
                                            <?php echo form_error('namapanggilanwanita'); ?>
                                            <label>Column</label>
                                            <input name="column" class="input-xxlarge" type="text" placeholder="">
                                            <?php echo form_error('namaayahwanita'); ?>
                                            <label>Layout</label>
                                            <input name="layout"class="input-xxlarge" type="text" placeholder="">
                                            <?php echo form_error('namaibuwanita'); ?>
                                             <label>URL Demo</label>
                                            <input name="urldemo" class="input-xxlarge">
                                            <label>Usulan harga</label>
                                            <input name="usulanharga" class="input-xxlarge" type="text" placeholder="harga yang anda usulkan">
                                            <?php echo form_error('alamatnikah'); ?>
                                        </div>
                                    </div>

                                    <!-- TAB 4 -->
                                    <div class="tab-pane" id="tab4">
                                        <div class="control-group">
                                           
                                            <label>Tags</label>
                                            <textarea name="tags" class="input-xxlarge" type="text" placeholder=""></textarea>
                                            <?php echo form_error('tanggalnikah'); ?>
                                            
                                            <label>Pesan untuk Reviewer</label>
                                            <textarea name="msgreviewer" class="input-xxlarge" type="text" placeholder=""></textarea>
                                            <?php echo form_error('waktunikah'); ?>
                                            

                                            <label>agrement</label>
                                            <textarea name="agrement" class="input-xxlarge" type="text" placeholder=""></textarea>
                                            <?php echo form_error('waktunikah'); ?>
                                            
                                        </div>
                                    </div>

                                    <!-- TAB 5 -->
                                    <div class="tab-pane" id="tab5">
                                        <div class="control-group">
                                            <!--<label>foto</label>-->
                                            <!--<p>*pilih foto yang akan di kirim kemudian extract dalam bentuk zip file terlebih dahulu kemudian upload di sini</p>-->
                                            <!--<div name="foto" class="input-prepend input-append"><span class="add-on"><i class="icon-picture"></i></span><input type="file" name="userfile"></div>-->
                                            <p>Pastikan data yang Anda isi benar</p>
                                            <hr>
                                            <div>
                                                <input class="btn btn-primary" type="submit" value="submit"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </form>
                </div>
                <!--<div class="btn-group">
                    <button class="btn" id="prevtab" type="button">Prev</button>
                    <button class="btn" id="nexttab" type="button">Next</button>
                </div>-->
            </div>


        </div>
        <div class="contact-address span5">
         <br>
         <br>
         <br>
         

         <?php $this->load->view($side);?>
            </div>
                

</div>
    </div>
</div>
</div>
</div>
