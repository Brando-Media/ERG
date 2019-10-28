<?php 
$images = get_sub_field('images'); 
?>

<?php if($images): ?>
    <div class="row m-0">
        <div class="col-md-12 mw69div bottomimagestriple" style="padding-left:0px!important; padding-right:0px!important;">
        <div class="row m-0">
        <?php foreach($images as $k=>$image): ?>
           <div class="<?php echo $class ?> hideimagetillmobile" style="min-width:50vw;">
           <div class="<?php echo $class ?> col-md-12 container  casestudy-div-img maxwidth23 from50to100p <?php echo $class ?>" style="padding-left:0px!important; padding-right:0px!important; margin-left:0px!important; margin-right:0px!important; width:100%;" >
                                <div class="casestudyhover" style="position:relative;">
                                    <a href="<?php echo $image['url'] ?>" data-rel="lightbox">
                                    <img style="max-width:100vw!important;" class="maxwidth23 from50to100p" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75) ?>">
                                        <div class="overlay"> 
                                            <div class="viewcasestudy">Click to expand</div>
                                        </div>
                                    </a>
                                </div>
            </div>
            </div>
        <?php endforeach; ?>
            </div>
            </div>
<?php endif; ?>