<?php 
$image    = get_sub_field('image');
$smallimage    = get_sub_field('smallimage');
$imagePos = get_sub_field('image_position');
$title    = get_sub_field('title');
$border    = get_sub_field('border');
$content  = get_sub_field('content');
$contentsmalltext  = get_sub_field('content_small_text');
?>

<section>
<div id="about" >
    <div class="row" id="testidchange" style="color:#00498d;">
        <?php if($imagePos=='Left'): ?>
            <div class="pbwwd0 col-lg-6 wwd1600 text-center align-self-center left-content-work-block  /*bgwidthcontent bg640*/" style="padding-left:0px; padding-right:0px; 
                    background-size: cover; background-position: center;height:100%; ">
                <!--<?php if($image): ?>-->
                    <?php if($image){
                        if($border){ ?>
                            <img alt="<?php echo $image['alt']; ?>"  style="height:auto;" class="servicescontentwithimageleft  imagew100services img1600wwd img100 borderwwd" src="<?php echo $image['url']; ?>">
                        <?php }else{ ?>
                            <img  alt="<?php echo $image['alt']; ?>" style="height:auto;" class="servicescontentwithimageleft  imagew100services img1600wwd img100" src="<?php echo $image['url']; ?>">
                       <?php }
                    }
                    ?>
                    <!--<div class="imagefill" style='background-image: url("<?php echo $image['url'];?>");min-height: -webkit-fill-available;'> </div>
                    <--<img class="img-fluid imagefill content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">-->
                <!--<?php endif; ?>-->
            </div>
            <div class="container pbwwd0 col-lg-6 wwd1600 align-self-center right-content-work-block  img-order nopaddingtop img1600 wwdpr992">
                <div class="margin-5wwd padding-right" style="/*padding-top:40px;*/" >
                <img  alt="<?php echo $smallimage['alt']; ?>" style="max-height:40px; max-width:40px;" class="img-fluid" src="<?php echo show_image($smallimage['url'], $smallimage['width'], $smallimage['height']); ?>">
                <?php echo $title ? "<div class='content-title'>{$title}</div>" : '' ?>
                <div class="contentimagep" style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div> 
            </div>
        <?php elseif($imagePos=='Right'): ?>
            <div class="container pbwwd0 col-lg-6 wwd1600 align-self-center left-content-work-block  img-order nopaddingtop img1600 wwdpr992" style="padding-left:70px;" >
            <div class="margin-5wwd padding-right" style="/*padding-top:40px;*/" >
            <img  alt="<?php echo $smallimage['alt']; ?>" style="max-height:40px; max-width:40px;" class="img-fluid" src="<?php echo show_image($smallimage['url'], $smallimage['width'], $smallimage['height']); ?>">
                <?php echo $title ? "<div class='content-title'>{$title} </div>" : '' ?>
                <div class="contentimagep" style="font-size:24px;"> <?php echo $content; ?> </div>
                <?php echo $contentsmalltext; ?>
            </div>
            </div>
            <div class="pbwwd0 col-lg-6 wwd1600 text-center align-self-center right-content-work-block  /*bgwidthcontent bg640*/" style="padding-left:0px; padding-right:0px;  
                    background-size: cover; background-position: center;">
                  <?php if($image){
                        if($border){ ?>
                            <img  alt="<?php echo $image['alt']; ?>" style="height:auto;" class="servicescontentwithimageright  imagew100services img1600wwd img100 borderwwd" src="<?php echo $image['url']; ?>">
                        <?php }else{ ?>
                            <img  alt="<?php echo $image['alt']; ?>" style="height:auto;" class="servicescontentwithimageright  imagew100services img1600wwd img100" src="<?php echo $image['url']; ?>">
                       <?php }
                    }
                    ?>
                  <!--  <div class="imagefill" style='background-image: url("<?php echo $image['url'];?>");min-height: -webkit-fill-available;'> </div>
                  <--  <img class="img-fluid imagefill content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">-->
            </div>
        <?php endif; ?>
    </div>
</div>

</section>