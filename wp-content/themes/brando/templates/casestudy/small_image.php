<?php
$title = get_sub_field('title');
$largetext = get_sub_field('large_text');
$smalltext = get_sub_field('small_text');
$image = get_sub_field('image');
$previoustext = get_sub_field('previous_text');
$previousurl = get_sub_field('previous_url');
$nexttext = get_sub_field('next_text');
$nexturl = get_sub_field('next_url');
?>

<section class="section  d-flex" data-section-name="<?php echo $sectionName; ?>">
<div class="container container--small firstblogstylesmall" style="padding-bottom:10px!important; padding-top:0px;">

        <h2 class="main-title" style="color:white"><?php echo $dtitle?></h2>
            <div class="col-lg-10" >
                    
                        <div class="col-lg-8 main-middletext smallindividualblogpad" style="padding:0;">
                        <img class="img-fluid w-100" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75) ?>">

                        <div class="mainimage-title">
                        <?php echo $title ?>
                    </div>
                    <div class="mainimage-bigtext">
                        <?php echo $largetext ?>
                    </div>
                    <div class="mainimage-text">
                        <?php echo $smalltext ?>
                    </div>
                    <div class="row d-flex casenavhide latestnavpad">
                    <?php if(!empty($previoustext)){ ?> 
                        <div class="indiblognavtextleft" id="indiblogleftx">
                            <a style="font-family: Helvetica;color: #00498D!important; letter-spacing: 1.5px;" href="<?php echo $previousurl ?>"><img src="../../wp-content/themes/brando/assets/images/rightah.png"> <?php echo $previoustext ?></a>
                        </div>
                    <?php } ?>
                    <?php if(!empty($nexttext)){ ?>
                        <div class="indiblognavtextright" id="indiblogrightx" >
                        <a style="font-family: Helvetica; color: #00498D!important; letter-spacing: 1.5px;" href="<?php echo $nexturl ?>"><?php echo $nexttext ?> <img src="../../wp-content/themes/brando/assets/images/leftah.png"></a>
                        </div>
                    <?php } ?>
                    </div>
            </div>
            </div>  
</section>