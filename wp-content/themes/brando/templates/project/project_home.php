<?php 
$image    = get_sub_field('image');
$smallimage    = get_sub_field('smallimage');
$imagePos = get_sub_field('image_position');
$title    = get_sub_field('title');
$content  = get_sub_field('content');
$contentsmalltext  = get_sub_field('content_small_text');
$previoustext = get_sub_field('previous_text');
$nexttext = get_sub_field('next_text');
?>
<section class="section">
<div class="">
    <div class="row" style="color:#00498d; padding-top:15%; padding-top:150px;">
        <?php if($imagePos=='Left'): ?>
            <div class="col-lg-6 text-center align-self-center left-content-work-block" style="padding-left:0px; padding-right:0px; max-width:85%; margin:auto;">
                <div class="project-home-image" >
                    <?php if($image): ?>
                        <img class="img-fluid img-phome-noborder" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="col-lg-6 align-self-center right-content-work-block project-home-text project-text-w" style="" > 
                <?php echo $title ? "<h2 class='projhometitle indiprojpad'>{$title}</h2>" : '' ?>
                <div style="font-size:24px; max-width:500px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
        <?php elseif($imagePos=='Right'): ?>
            <div class="col-lg-6 align-self-center right-content-work-block project-home-text project-text-w" style="" > 
                <?php echo $title ? "<h2 class='projhometitle indiprojpad'>{$title}</h2>" : '' ?>
                <div style="font-size:24px; max-width:500px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
            <div class="col-lg-6 text-center align-self-center left-content-work-block" style="padding-left:0px; padding-right:0px; max-width:85%; margin-auto;">
                <div class="project-home-image" >
                    <?php if($image): ?>
                        <img class="img-fluid img-phome" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="row d-flex casenavhide indicasepad marginautoindicase" id="marginautoindicase">
        <?php if(!empty($previoustext)){ ?> 
            <div class="indicasenavtext" style="width:50vw;" >
                <a style="font-family: Helvetica;color: #00498D!important;" href="<?php echo $previousurl ?>"><div class="leftindipad" id="leftprojectindi"> <img src="../../wp-content/themes/brando/assets/images/rightah.png"><?php echo $previoustext ?></div></a>
            </div>
        <?php } ?>
        <?php if(!empty($nexttext)){ ?>
            <div id="" class="indicasenavtext" style="width:50vw;" >
            <a style="font-family: Helvetica; color: #00498D!important;" href="<?php echo $nexturl ?>"><div class="rightindipad" id="rightprojectindi"> <?php echo $nexttext ?><img src="../../wp-content/themes/brando/assets/images/leftah.png"></div> </a>
            </div>
        <?php } ?>
        </div>
</section>

