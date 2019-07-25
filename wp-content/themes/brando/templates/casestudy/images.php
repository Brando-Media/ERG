<?php 
$images = get_sub_field('images'); 
$mainimage = get_sub_field('main_image');?>

<?php if($images): ?>

    <div class="row m-0">
        <div class="col-md-3" style="padding-left:0px!important; padding-right:0px!important;">
        <a data-rel=”lightbox” href=<?php echo $mainimage['url']?> data-rel=”lightbox”><img class="img-fluid w-100 project-home-main-image" src="<?php echo show_image($mainimage['url'], $mainimage['width'], $mainimage['height'], 75) ?>"></a>
        </div>
        <div class="col-md-9" style="padding-left:0px!important; padding-right:0px!important;">
        <div class="row m-0">
        <?php foreach($images as $k=>$image): ?>
            <?php
            $class = 'pl-0 pr-2';
            if($k%2==1){
            $class = 'pr-0 pl-2'; ?>
            
           <?php } ?>
           <a data-rel=”lightbox” href=<?php echo $image['url']?> data-rel=”lightbox”>
           <div class="col-md-3 container" style="padding-left:0px!important; padding-right:0px!important; height:100%;     min-width: 33%;" >
                <?php //echo $services[0]['filter'] ?> 
                <img style="height:100%;" class="small-project-home" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75) ?>">
                <div class="overlay">
                    <div class="text">testest</div>
                    <div class="viewcasestudy">VIEW CASE STUDY</div>
                </div>
            </div>
            </a>
            <div class="col-md-3" style="padding-left:0px!important; padding-right:0px!important; height:100%;     min-width: 33%;;">
            <a data-rel=”lightbox” href=<?php echo $image['url']?> data-rel=”lightbox”><img style="height:100%;" class="small-project-home" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75) ?>"></a>
            </div>
        <?php endforeach; ?>
            </div>
        </div>
        <div class="row">
    </div>
<?php endif; ?>