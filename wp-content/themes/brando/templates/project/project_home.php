<?php 
$image    = get_sub_field('image');
$smallimage    = get_sub_field('smallimage');
$imagePos = get_sub_field('image_position');
$title    = get_sub_field('title');
$content  = get_sub_field('content');
$contentsmalltext  = get_sub_field('content_small_text');
$previoustext = get_sub_field('previous_text');
$nexttext = get_sub_field('next_text');
$previous_url = get_sub_field('previousurl');
$next_url = get_sub_field('nexturl');
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
<div class="row d-flex indicasepad marginautoindicase" id="marginautoindicase" style="margin-top:50px;">
        <?php if(!empty($previoustext)){ ?> 
            <div class="indicasenavtext col-lg-6 case-prev-container" style="" >
            <div class="case-prev-text" style=" text-align:left;">
                <a style="font-family: Helvetica;color: #00498D!important; text-align: left;" href="<?php echo $previous_url ?>"><div class="leftindipad" id="leftcasestudyindi" style="text-align: left; padding-left:0px;"> <img src="../../wp-content/themes/brando/assets/images/rightah.png"><?php echo $previoustext ?></div></a>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($nexttext)){ ?>
            <div id="" class="indicasenavtext col-lg-5 case-next-container" style="" >
            <div style=" text-align:right;" class="case-next-text">
            <a style="font-family: Helvetica; color: #00498D!important;" href="<?php echo $next_url ?>"><div class="rightindipad" id="rightcasestudyindi" style="text-align: right; padding-right:0px;"> <?php echo $nexttext ?><img src="../../wp-content/themes/brando/assets/images/leftah.png"></div> </a>
            </div>
            </div>
        <?php } ?>
        </div>
</section>

