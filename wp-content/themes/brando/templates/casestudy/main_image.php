<?php
$title = get_sub_field('title');
$largetext = get_sub_field('large_text');
$smalltext = get_sub_field('small_text');
$main_image = get_sub_field('main_image');
?>

<section class="section  d-flex" data-section-name="<?php echo $sectionName; ?>">
<div class="container container--small" style="padding-bottom:10px!important;">

        <h2 class="main-title" style="color:white"><?php echo $dtitle?></h2>
            <div class="col-lg-10" >
                    
                        <img class="img-fluid w-100" src="<?php echo show_image($main_image['url'], $main_image['width'], $main_image['height'], 75) ?>">
                        <div class="col-lg-8 main-middletext">
                        <div class="mainimage-title">
                        <?php echo $title ?>
                    </div>
                    <div class="mainimage-bigtext">
                        <?php echo $largetext ?>
                    </div>
                    <div class="mainimage-text">
                        <?php echo $smalltext ?>
                    </div>
                </div>
            </div>
           
</section>