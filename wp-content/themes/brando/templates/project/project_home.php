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
                        <img class="img-fluid img-phome" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="col-lg-6 align-self-center right-content-work-block project-home-text project-text-w" style="" > 
                <?php echo $title ? "<h2 class='projhometitle'>{$title}</h2>" : '' ?>
                <div style="font-size:24px; max-width:500px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
        <?php elseif($imagePos=='Right'): ?>
            <div class="col-lg-6 align-self-center right-content-work-block project-home-text project-text-w" style="" > 
                <?php echo $title ? "<h2 class='projhometitle'>{$title}</h2>" : '' ?>
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
<div class="row project-home-footer col-lg-6" style="display: -webkit-box; margin:auto; margin-top:10%; margin-bottom:10%;">
    <div class="col-lg-6 align-self-center marginleftproject" style="max-width:50%;">
    <?php if(!empty($previoustext)){ ?>
        <a style="font-family: Helvetica;color: #00498D; width:30%;" href="<?php echo $previoustext ?>">Previous Project</a>
    <?php } ?>
    </div>
    <div class="col-lg-6 align-self-center">
    <?php if(!empty($nexttext)){ ?>
        <a style="font-family: Helvetica; color: #00498D; width:30%;" href="<?php echo $nexttext ?>">Next Project</a>
    <?php } ?>    
    </div>
</div>
</section>

