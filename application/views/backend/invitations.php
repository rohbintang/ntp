<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
    <!--<form class="form-search pull-right" method="post" action="<?php echo base_url('dashboard/customer/view'); ?>">
        <input name="keyword" type="text" class="input-medium">
        <select name="field" class="input-small">
            <option value="name">Name</option>
            <option value="phone">Phone</option>
            <option value="email">Email</option>
        </select>
        <button type="submit" class="btn">Search</button>
    </form>-->
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 10%;">ID</th>
            <th style="width: 20%;">Name</th>
            <th style="width: 20%;">Theme</th>
            
            
            <th style="width: 10%;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($invitations->result() as $value) : ?>
            <tr>
                <td><?php echo $value->theme_id; ?></td>
                <td><?php echo $value->theme_name; ?></td>
                <td><?php echo $value->theme_name; ?></td>
                <td><?php echo $value->customer_name; ?></td>
                
                <td>
                    <a class="btn btn-small" href="<?php echo base_url('dashboard/invitation/detail/' . $value->theme_id); ?>"><i class="icon-eye-open"></i> View</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php //echo $pagination; ?>
<!--<style>
    img {
        margin-bottom: 10px;
    }
</style>
<img data-src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com" alt="300x200" style="width: 300px; height: 200px;" src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://datangya.com/ibankmeimei">
<img data-src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com" alt="300x200" style="width: 300px; height: 200px;" src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://vidiyan.com/yuliaromi/">-->
<!--<img data-src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com" alt="300x200" style="width: 300px; height: 200px;" src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com">
<img data-src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com" alt="300x200" style="width: 300px; height: 200px;" src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com">
<img data-src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com" alt="300x200" style="width: 300px; height: 200px;" src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com">
<img data-src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com" alt="300x200" style="width: 300px; height: 200px;" src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com">
<img data-src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com" alt="300x200" style="width: 300px; height: 200px;" src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com">-->
<!--<img class="img-polaroid" src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com" />
<img class="img-polaroid" src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com" />
<img class="img-polaroid" src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=http://www.google.com" />-->
