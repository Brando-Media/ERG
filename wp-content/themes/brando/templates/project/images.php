<?php 
$images = get_sub_field('images'); 
$mainimage = get_sub_field('main_image');?>

<?php if($images): ?>


    <div class="row m-0">
        <div class="col-md-6" style="padding-left:0px!important; padding-right:0px!important;">
            <img style="height:100%" class="img-fluid w-100 project-home-main-image" src="<?php echo show_image($mainimage['url'], $mainimage['width'], $mainimage['height'], 75) ?>">
        </div>
        <div class="col-md-6" style="padding-left:0px!important; padding-right:0px!important;">
        <div class="row m-0">
        <?php foreach($images as $k=>$image): ?>
            <?php
            $class = 'pl-0 pr-2';
            if($k%2==1){
            $class = 'pr-0 pl-2'; ?>
            
           <?php } ?>
            <div class="col-md-6 projimgwidth" style="padding-left:0px!important; padding-right:0px!important;">
                <img class="small-project-home" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75) ?>">
            </div>
        <?php endforeach; ?>
            </div>
        </div>
        
    </div>
<?php endif; ?>