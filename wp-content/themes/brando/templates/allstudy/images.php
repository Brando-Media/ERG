<?php /*
$images = get_sub_field('images'); 
$mainimage = get_sub_field('main_image');?>

<?php if($images): ?>

    <div class="row m-0">
        <div class="col-md-6 container" style="padding-left:0px!important; padding-right:0px!important; margin-right:0px; margin-left:0px;" >
        <a data-rel=”lightbox” href=<?php echo $mainimage['url']?> data-rel=”lightbox”>
        <img class="img-fluid w-100 project-home-main-image" style="height:100%;"src="<?php echo show_image($mainimage['url'], $mainimage['width'], $mainimage['height'], 75) ?>">
        <div class="overlay">
                    <div class="text">testest</div>
                    <div class="viewcasestudy">VIEW CASE STUDY</div>
                </div>
        </div>
        </a>
        <div class="col-md-6" style="padding-left:0px!important; padding-right:0px!important;">
        <div class="row m-0">
        <?php foreach($images as $k=>$image): ?>
            <?php
            $class = 'pl-0 pr-2';
            if($k%2==1){
            $class = 'pr-0 pl-2'; ?>
            
           <?php } ?>
           <a data-rel=”lightbox” href=<?php echo $image['url']?> data-rel=”lightbox” style="height:100%;">
           <div class="col-md-2 container casestudy-div-img " style="padding-left:0px!important; padding-right:0px!important;  max-width: 16.666667vw; margin-left:0px!important; margin-right:0px!important; width:100%;" >
                <img class="small-project-home" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75) ?>" style="max-width: 16.666667vw;">
                <div class="overlay " style="max-width:16.666667vw; height:100%;">
                    <div class="text">testest</div>
                    <div class="viewcasestudy">VIEW CASE STUDY</div>
                </div>
            </div>
            </a>

        <?php endforeach; ?>
            </div>
        </div>

<?php endif; */?>

<?php 
$images = get_sub_field('images'); 
$mainimage = get_sub_field('main_image');?>

<?php if($images): ?>

    <div class="row m-0">
        <div class="col-md-6 container casestudyhover" style="padding-left:0px!important; padding-right:0px!important; margin-right:0px; margin-left:0px;" >
        <a data-rel=”lightbox” href=<?php echo $mainimage['url']?> data-rel=”lightbox”>
        <img class="img-fluid w-100 project-home-main-image casestudymainimage" style="height:100%;"src="<?php echo show_image($mainimage['url'], $mainimage['width'], $mainimage['height'], 75) ?>">
        <div class="overlay">
                    <div class="text">CLICK TO ENLARGE</div>
                    <!--<div class="viewcasestudy">VIEW  </div>-->
                </div>
        </div>
        </a>
        <div class="col-md-6" style="padding-left:0px!important; padding-right:0px!important;">
        <div class="row m-0"> 
        <?php foreach($images as $k=>$image): ?>
            <?php
            $class = 'ergafk';
            if($k==2){
            $class = 'hideonmobile'; ?>
           <?php } ?>
           <?php
            if($k==3){
            $class = 'hideonmobile'; ?>
           <?php } ?>
           <?php
            if($k>4){
            $class = 'hideonmobilelate'; ?>
           <?php } ?>
           <a class="<?php echo $class ?>" data-rel=”lightbox” href=<?php echo $image['url']?> data-rel=”lightbox” style="height:100%;">
           <div class="col-md-12 container casestudyhover casestudy-div-img maxwidth16 from50to100 <?php echo $class ?>" style="padding-left:0px!important; padding-right:0px!important; margin-left:0px!important; margin-right:0px!important; width:100%;" >
                <img class="small-project-home maxwidth16 from50to100" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75) ?>">
                <div class="overlay maxwidth16 from50to100 " style="height:100%;">
                    <div class="text">CLICK TO ENLARGE</div>
                   <!-- <div class="viewcasestudy"></div>-->
                </div>
            </div>
            </a>
        <?php endforeach; ?>
            </div>
        </div>

<?php endif; ?>