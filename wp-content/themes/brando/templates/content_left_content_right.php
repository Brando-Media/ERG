<?php
$titleLeft    = get_sub_field('title_left');
$titleRight    = get_sub_field('title_right');
$ContentLeft  = get_sub_field('content_left');
$ContentRight  = get_sub_field('content_right');
?>
<section class="globalsection">
<div class="maxwidth991100 container  container--small main-content align-self-center padleft25 globalpl0ml0 padleft25 ml0 nomarginl991" style="padding-top:80px; margin-top:20px; min-width:310px;">
        <div class="pl12 row d-flex" style="min-width:300px; padding-top:20px;">
        <div class="col-lg-6 align-self-center left-content-work-block globalbtext globalcontent globalpl0ml0 nopl ml0" style="margin-bottom:1px;padding-right:0px;">
            <?php echo $titleLeft ? "<h2 style='margin-bottom:20px; font-weight:400;'class='title globalptitle'>{$titleLeft}</h2>" : '' ?>
        </div>
        <div class="col-lg-6 align-self-center right-content-work-block globaltext globalcontent">
        </div>
    </div>
    <div class="pl12 row d-flex" style='margin-bottom:20px;'>
        <div class="col-lg-6 align-self-center left-content-work-block globalbtext globalcontent nopl ml0" style="padding-right:0px;">
            <?php if(!empty($ContentLeft)){ echo $ContentLeft; } ?>
        </div>
        <div class="col-lg-6 align-self-center right-content-work-block globaltext globalcontent nopl globalstyle" style="padding-right:0px;">
            <?php echo $ContentRight ?>
        </div>
    </div>
</div>
</section>
