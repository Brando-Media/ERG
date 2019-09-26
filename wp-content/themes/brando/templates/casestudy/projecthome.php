<?php /*
$image    = get_sub_field('image');
$smallimage    = get_sub_field('smallimage');
$imagePos = get_sub_field('image_position');
$title    = get_sub_field('title');
$content  = get_sub_field('content');
$contentsmalltext  = get_sub_field('content_small_text');
$previoustext = get_sub_field('previous_text');
$previousurl = get_sub_field('previous_url');
$nexttext = get_sub_field('next_text');
$nexturl = get_sub_field('next_url');

?>
<section class="section">

<div class="">
    <div class="row" style="color:#00498d;">
        <?php if($imagePos=='Left'): ?>
            <div class="col-lg-6 text-center align-self-center left-content-work-block" style="padding-left:0px; padding-right:0px;">
                <div class="indicasestudy" >
                    <?php if($image): ?>
                        <img class="img-fluid img-phome" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="col-lg-6 align-self-center right-content-work-block project-home-text" > 
                <?php echo $title ? "<h2 class='title'>{$title}</h2>" : '' ?>
                <div style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
        <?php elseif($imagePos=='Right'): ?>
            <div class="col-lg-6 align-self-center left-content-work-block" style="padding-left:70px;" >
                <?php echo $title ? "<h2 class='title'>{$title}</h2>" : '' ?>
                <div style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
            <div class="col-lg-6 text-center align-self-center right-content-work-block project-home-text" style="padding-left:0px; padding-right:0px;">
                <?php if($image): ?>
                    <img class="img-fluid img-phome content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<!--
<div class="row d-flex project-home-footer">
    <div class="col-lg-6 align-self-center">
    <?php if(!empty($previoustext)){ ?>
        <a href="<?php echo $previousurl ?>"><?php echo $previoustext ?></a>
    <?php } ?>
    </div>
    <div class="col-lg-6 align-self-center">
    <?php if(!empty($nexttext)){ ?>
        <a href="<?php echo $nexturl ?>"><?php echo $nexttext ?></a>
    <?php } ?>    
    </div>
</div>-->
<div class="row project-home-footer col-lg-6" style="display: -webkit-box; margin:auto; margin-top:10%; margin-bottom:10%;">
    <div class="col-lg-6 align-self-center marginleftproject" style="max-width:50%;">
    <?php if(!empty($previoustext)){ ?>
        <a style="font-family: Helvetica;color: #00498D; width:30%;" href="<?php echo $previousurl ?>"><?php echo $previoustext ?></a>
    <?php } ?>
    </div>
    <div class="col-lg-6 align-self-center">
    <?php if(!empty($nexttext)){ ?>
        <a style="font-family: Helvetica; color: #00498D; width:30%;" href="<?php echo $nexturl ?>"><?php echo $nexttext ?></a>
    <?php } ?>    
    </div>
</div>
</section>*/?>

<?php 
$image    = get_sub_field('image');
$smallimage    = get_sub_field('smallimage');
$imagePos = get_sub_field('image_position');
$title    = get_sub_field('title');
$content  = get_sub_field('content');
$contentsmalltext  = get_sub_field('content_small_text');
$previoustext = get_sub_field('previous_text');
$previousurl = get_sub_field('previous_url');
$nexttext = get_sub_field('next_text');
$nexturl = get_sub_field('next_url');

?>
<section class="">

<div class="">
    <div class="row d-flex" style="color:#00498d;">
        <?php if($imagePos=='Left'): ?>
            <div class="col-lg-6 text-center align-self-center left-content-work-block" style="padding-left:0px; padding-right:0px; padding-top:200px; max-width:85%; padding-left:35px;">
                <div class="project-home-image" >
                    <?php if($image): ?>
                        <img class="img-fluid img-phome" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="col-lg-6 align-self-center project-home-text inditeamtext ftmsection resize-text" style="margin:auto;"> 
                <?php echo $title ? "<div class='indicase-title'>{$title}</div>" : '' ?>
                <div class="indicase-text" style="">
                <?php echo $projectitle ? "{$projectitle}" : '' ?>
                </div>
                <div class="indicase-text" style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
        <?php elseif($imagePos=='Right'): ?>
            <div class="col-lg-6 align-self-center left-content-work-block" style="padding-left:70px;" >
                <?php echo $title ? "<div class='indicase-title'>{$title}</div>" : '' ?>
                <div class="indicase-text" style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
            <div class="col-lg-6 text-center align-self-center right-content-work-block project-home-text" style="padding-left:0px; padding-right:0px;">
                <?php if($image): ?>
                    <img class="img-fluid img-phome content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="row d-flex casenavhide indicasepad">
        <?php if(!empty($previoustext)){ ?> 
            <div class="casenavtext" id="casetextid">
                <a style="font-family: Helvetica;color: #00498D!important;" href="<?php echo $previousurl ?>"><img class="leftarrowmargin" src="../wp-content/themes/brando/assets/images/rightah.png"> <?php echo $previoustext ?></a>
            </div>
        <?php } ?>
        <?php if(!empty($nexttext)){ ?>
            <div id="casepagechange" class="casenavtext">
            <a style="font-family: Helvetica; color: #00498D!important;" href="<?php echo $nexturl ?>"><?php echo $nexttext ?> <img class="rightarrowmargin" src="../wp-content/themes/brando/assets/images/leftah.png"></a>
            </div>
        <?php } ?>
        </div>

<!--        
<div class="row project-home-footer col-lg-12" style="display: -webkit-box; margin:auto; margin-top:10%; margin-bottom:10%;">
    <div class="col-lg-6 align-self-center marginleftproject" style="max-width:50%;">
    <?php if(!empty($previoustext)){ ?>
        <a style="font-family: Helvetica;color: #00498D!important; width:30%;" href="<?php echo $previousurl ?>"><img src="../../wp-content/themes/brando/assets/images/rightah.png"> <?php echo $previoustext ?></a>
    <?php } ?>
    </div>
    <div class="col-lg-6 align-self-center" style="max-width:50%;">
    <?php if(!empty($nexttext)){ ?>
        <a style="font-family: Helvetica; color: #00498D!important; width:30%;" href="<?php echo $nexturl ?>"><?php echo $nexttext ?> <img src="../../wp-content/themes/brando/assets/images/leftah.png"></a>
    <?php } ?>    
    </div>
</div>-->
</section>

