<?php 
$image    = get_sub_field('image');
$smallimage    = get_sub_field('smallimage');
$imagePos = get_sub_field('image_position');
$title    = get_sub_field('title');
$content  = get_sub_field('content');
$contentsmalltext  = get_sub_field('content_small_text');
?>

<section>
<div id="about">
    <div class="row" id="testidchange" style="color:#00498d;">
        <?php if($imagePos=='Left'): ?>
            <div class="col-lg-6 text-center align-self-center left-content-work-block  /*bgwidthcontent bg640*/" style="padding-left:0px; padding-right:0px; 
                    background-size: cover; background-position: center;height:100%; ">
                <!--<?php if($image): ?>-->
                    <img style="height:auto;" class="servicescontentwithimageleft  imagew100services img100" src="<?php echo $image['url']; ?>">
                    <!--<div class="imagefill" style='background-image: url("<?php echo $image['url'];?>");min-height: -webkit-fill-available;'> </div>
                    <--<img class="img-fluid imagefill content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">-->
                <!--<?php endif; ?>-->
            </div>
            <div class="col-lg-6 align-self-center right-content-work-block  img-order">
                <div class="margin-2 padding-right" style="/*padding-top:40px;*/" >
                <img style="max-height:40px; max-width:40px;" class="img-fluid" src="<?php echo show_image($smallimage['url'], $smallimage['width'], $smallimage['height']); ?>">
                <?php echo $title ? "<div class='content-title'>{$title}</div>" : '' ?>
                <div class="contentimagep" style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
            </div>
        <?php elseif($imagePos=='Right'): ?>
            <div class="col-lg-6 align-self-center left-content-work-block  img-order" style="padding-left:70px;" >
            <div class="margin-2 padding-right" style="/*padding-top:40px;*/" >
            <img style="max-height:40px; max-width:40px;" class="img-fluid" src="<?php echo show_image($smallimage['url'], $smallimage['width'], $smallimage['height']); ?>">
                <?php echo $title ? "<div class='content-title'>{$title} </div>" : '' ?>
                <div class="contentimagep" style="font-size:24px;"> <?php echo $content; ?> </div>
                <?php echo $contentsmalltext; ?>
            </div>
            </div>
            <div class="col-lg-6 text-center align-self-center right-content-work-block  /*bgwidthcontent bg640*/" style="padding-left:0px; padding-right:0px;  
                    background-size: cover; background-position: center;">
                <?php if($image): ?>
                  <img style="height:auto;" class="servicescontentwithimageright  imagew100services img100" src="<?php echo $image['url']; ?>">
                  <!--  <div class="imagefill" style='background-image: url("<?php echo $image['url'];?>");min-height: -webkit-fill-available;'> </div>
                  <--  <img class="img-fluid imagefill content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">-->
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

</section>