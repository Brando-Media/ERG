<?php
$titleLeft    = get_sub_field('title_left');
$titleRight    = get_sub_field('title_right');
$ContentLeft  = get_sub_field('content_left');
$ContentRight  = get_sub_field('content_right');
?>
<section class="globalsection">
<div class="container  container--small main-content align-self-center" style="padding-top:80px; margin-top:20px; min-width:310px;">
        <div class="row d-flex" style="min-width:300px;">
        <div class="col-lg-6 align-self-center left-content-work-block globalbtext globalcontent" style="margin-bottom:0px;">
            <?php echo $titleLeft ? "<h2 style='margin-bottom:20px; font-weight:400;'class='title globalptitle'>{$titleLeft}</h2>" : '' ?>
        </div>
        <div class="col-lg-6 align-self-center right-content-work-block globaltext globalcontent">
        </div>
    </div>
    <div class="row d-flex" style='margin-bottom:20px;'>
        <div class="col-lg-6 align-self-center left-content-work-block globalbtext globalcontent">
            <?php echo $ContentLeft; ?>
        </div>
        <div class="col-lg-6 align-self-center right-content-work-block globaltext globalcontent">
            <?php echo $ContentRight ?>
        </div>
    </div>
</div>
</section>
