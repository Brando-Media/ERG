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
            <div class="col-lg-6 text-center left-content-work-block pt200m100" style=" padding-left:50px; padding-right:70px; /* max-width:85%; padding-left:35px;*/">
                <div class="project-home-image indicasestudyhideimage" style="margin:0px; float:right;">
                    <?php if($image): ?>
                        <img style="min-width:350px;" class="img-fluid img-phome" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="col-lg-5 project-home-text pt200m0 inditeamtext ftmsection resize-text M90L" style="margin-top:50px; padding-left:90px; padding-right:15px;"> 
                <?php echo $title ? "<div class='indicase-title indicasefontchange'>{$title}</div>" : '' ?>
                <div class="indicase-text" style="">
                <?php echo $projectitle ? "{$projectitle}" : '' ?>
                </div>
                <div class="indicase-text" style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
    </div>
</div>

<div class="row d-flex indicasepad marginautoindicase" id="marginautoindicase" style="margin-top:50px;">
        <?php if(!empty($previoustext)){ ?> 
            <div class="indicasenavtext col-lg-6 case-prev-container" style="" >
            <div class="case-prev-text" style=" text-align:left;">
                <a style="font-family: Helvetica;color: #00498D!important; text-align: left;" href="<?php echo $previousurl ?>"><div class="leftindipad" id="leftcasestudyindi" style="text-align: left; padding-left:0px;"> <img src="../wp-content/themes/brando/assets/images/rightah.png"><?php echo $previoustext ?></div></a>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($nexttext)){ ?>
            <div id="" class="indicasenavtext col-lg-5 case-next-container" style="" >
            <div style=" text-align:right;" class="case-next-text">
            <a style="font-family: Helvetica; color: #00498D!important;" href="<?php echo $nexturl ?>"><div class="rightindipad" id="rightcasestudyindi" style="text-align: right; padding-right:0px;"> <?php echo $nexttext ?><img src="../wp-content/themes/brando/assets/images/leftah.png"></div> </a>
            </div>
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

