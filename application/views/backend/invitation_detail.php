<a href="<?php echo base_url('dashboard/invitation/del/' . $id); ?>" class="btn btn-danger pull-right"><i class="icon-trash"></i> Delete</a>
<ul id="myTab" class="nav nav-tabs">
    <li class="active">
        <a href="#Groom" data-toggle="tab">Nama dan Deskripsi</a>
    </li>
    <li class="">
        <a href="#Bride" data-toggle="tab">Files</a>
    </li>
    <li class="">
        <a href="#Wedding" data-toggle="tab">Extra</a>
    </li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="Groom">
        <div class="control-group">
            <label class="control-label" for="groom-mother">Nama Theme</label>
            <div class="controls">
                <input class="input-block-level" rows="10"  type="text" id="theme" name="namatheme" value="<?php echo $namatheme ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="groom-bio">Deskripsi</label>
            <div class="controls">
                <textarea class="input-block-level" name="destheme" rows="10"><?php echo $destheme ?></textarea>
            </div>
        </div>
        <!--<div class="control-group">
            <div class="controls">
                <button type="submit" class="btn">Change</button>
            </div>
        </div>-->
    </div>
    <div class="tab-pane fade" id="Bride">
        <div class="control-group">
            <label class="control-label" for="bride-name">Gambar Preview</label>
            <div class="controls">
                <input class="input-block-level" rows="10" type="text" id="name" name="bride-name" value="<?php echo $bride_name ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-nick">Gambar Keterangan</label>
            <div class="controls">
                <input class="input-block-level" rows="10" type="text" id="nick" name="bride-nick" value="<?php echo $bride_nick_name ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-father">File Theme</label>
            <div class="controls">
                <input class="input-block-level" rows="10" type="text" id="father" name="bride-father" value="<?php echo $bride_father_name; ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-mother">Kategori</label>
            <div class="controls">
                <input class="input-block-level" rows="10" type="text" id="mother" name="bride-mother" value="<?php echo $bride_mother_name; ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-bio">Theme Resolution</label>
            <div class="controls">
                <input class="input-block-level" rows="10" type="text" name="bride-bio" value="<?php echo $bride_bio; ?>">
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="Wedding">
        <div class="control-group">
            <label class="control-label" for="bride-name">Widget</label>
            <div class="controls">
                <input  class="input-block-level" type="text" name="love-story" rows="10" value="<?php echo $love_story; ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-nick">Compatibility</label>
            <div class="controls">
                <textarea class="input-block-level" name="bride-bio" rows="10"><?php echo $message; ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-father">Framework</label>
            <div class="controls">
                <input input  class="input-block-level" type="text" row="10" id="father" name="bride-father" value="<?php echo $date ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-mother">Wp Version</label>
            <div class="controls">
                <input input  class="input-block-level" type="text" row="10" id="mother" name="bride-mother" value="<?php echo $time ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-bio">File Included</label>
            <div class="controls">
                <textarea class="input-block-level" name="bride-bio" rows="10"><?php echo $address ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-father">Column</label>
            <div class="controls">
                <input input  class="input-block-level" type="text" row="10" id="father" name="bride-father" value="<?php echo $reception_date ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-father">Layout</label>
            <div class="controls">
                <input input  class="input-block-level" type="text" row="10" id="father" name="bride-father" value="<?php echo $reception_time ?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="bride-father"></label>
            <div class="controls">
                <textarea class="input-block-level" name="bride-bio" rows="10"><?php echo $address ?></textarea>
            </div>
        </div>
        <form action="<?php echo base_url('dashboard/invitation/edit/' . $id); ?>" method="post">
            <div class="control-group">
                <label class="control-label" for="bride-father">Invitation URL</label>
                <div class="controls">
                    <input input  class="input-block-level" type="text" row="10" id="father" name="url" value="<?php echo $url; ?>">
                </div>
            </div>
            <div class="control-group">
            <label class="control-label" for="bride-father">Usulan Harga</label>
            <div class="controls">
                <textarea class="input-block-level" name="bride-bio" rows="10"><?php echo $address ?></textarea>
            </div>
        </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn">Change</button>
                </div>
            </div>
        </form>
    </div>
</div>