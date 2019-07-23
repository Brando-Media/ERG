<?php 
$image    = get_sub_field('image');
$imagePos = get_sub_field('image_position');
$title    = get_sub_field('title');
$content  = get_sub_field('content');
$contentsmalltext  = get_sub_field('content_small_text');
?>
<div class="">
    <div class="row d-flex">
        <?php if($imagePos=='Left'): ?>
            <div class="col-lg-6 text-center align-self-center left-content-work-block">
                <?php if($image): ?>
                    <img class="img-fluid content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                <?php endif; ?>
            </div>
            <div class="col-lg-6 align-self-center right-content-work-block" style="padding-left:20%;">
                <?php echo $title ? "<h2 class='title'>{$title}</h2>" : '' ?>
                <div style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
        <?php elseif($imagePos=='Right'): ?>
            <div class="col-lg-6 align-self-center left-content-work-block" style="padding-left:20%;">
                <?php echo $title ? "<h2 class='title'>{$title}</h2>" : '' ?>
                <div style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
            <div class="col-lg-6 text-center align-self-center right-content-work-block">
                <?php if($image): ?>
                    <img class="img-fluid content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>