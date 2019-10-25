<?php 
$images = get_sub_field('images'); 
$mainimage = get_sub_field('main_image');?>

<?php if($images): ?>


    <!--<div class="row m-0">
        <div class="col-md-6" style="padding-left:0px!important; padding-right:0px!important;">
            <img style="height:100%" class="img-fluid w-100 project-home-main-image" src="<?php echo show_image($mainimage['url'], $mainimage['width'], $mainimage['height'], 75) ?>">
        </div>
        <div class="col-md-6" style="padding-left:0px!important; padding-right:0px!important;">
        <div class="row m-0">
    <?php foreach($images as $k=>$image): ?> 
            <?php
            $class = 'pl-0 pr-2';
            if($k%2==1){
            $class = 'pr-0 pl-2'; ?>
            
           <?php } ?>
            <div class="col-md-6 projimgwidth" style="padding-left:0px!important; padding-right:0px!important;">
                <img class="small-project-home" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75) ?>">
            </div>
        <?php endforeach; ?>
            </div>
        </div>
        
    </div>-->
    <div class="row m-0 casestudiespositionrelative"> 
        <div class="col-md-6 container mw30img" style="padding-left:0px!important; padding-right:0px!important; margin-right:0px; margin-left:0px;" >
        <a >
        <img class="img-fluid w-100 project-home-main-image casestudymainimage" style="height:100%;"src="<?php echo show_image($mainimage['url'], $mainimage['width'], $mainimage['height'], 75) ?>">
        </div>
        </a>
        <div class="col-md-6 mw69div" style="padding-left:0px!important; padding-right:0px!important;">
        <div class="row m-0">
        <?php foreach($images as $k=>$image): ?>
            <?php
            $class = 'ergafk';
            if($k==2){
            $class = 'hideonmobile'; ?>
           <?php } ?>
           <?php
            if($k==3){
            $class = 'hideonmobile'; ?>
           <?php } ?>
           <?php
            if($k>4){
            $class = 'hideonmobilelate'; ?>
           <?php } ?>
           <div class="<?php echo $class ?>" style="min-width:23vw;">
           <div class="<?php echo $class ?> col-md-12 container  casestudy-div-img maxwidth23 from50to100p <?php echo $class ?>" style="padding-left:0px!important; padding-right:0px!important; margin-left:0px!important; margin-right:0px!important; width:100%;" >
                <img class="small-project-homep maxwidth23 from50to100p" src="<?php echo show_image($image['url'], $image['width'], $image['height'], 75) ?>">
            </div>
            </div>
        <?php endforeach; ?>
            </div>
            </div>
<?php endif; ?>