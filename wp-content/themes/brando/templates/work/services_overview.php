<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$linktext       = get_sub_field('link_text');
$linkurl       = get_sub_field('link_url');

?>

<section class="section servicesoverviewbg" data-section-name="hover_images">
    <div style="";>
    <div>
    <h2 class="main-title servicesotitle" style=""><?php echo $title?></h2>
    <div class="linktext"> <a class="a20padding" style="color:white;" href="<?php echo $linkurl?>"><?php echo $linktext ?></a> </div>
    </div>
        <div class="row services-experts" style="margin-left:0px; margin-top:30px; margin-right:0px; min-width:100vw; padding-left:30px; padding-right:30px;"> 
            <?php $first = 0; ?>
            <?php foreach($services as $servicerow){
                if($servicerow['text_location']=="Bottom"){ ?>
                    
                    <div class="col-lg-3" style="padding-left:0px; padding-right:0px;">
                        <div class="emptybox" style=""> </div>
                        <?php if($first != 0){ ?>
                        <div class="servicesimg">
                        <?php } else{
                            $first++;?>
                            <div class="servicesimg" style="border-left: 1px solid #cccccc;">
                        <?php } ?>
                        <img class="img-fluid " style="margin-bottom:20px; max-width:60%!important; top:54px; position: relative; margin-left: auto;margin-right: auto;display: table-cell; vertical-align: middle;" src="<?php echo show_image($servicerow['image']['url'], $servicerow['image']['width'], $servicerow['image']['height'],0.75) ?>"> 
                        </div>
                        <div class="servicescontent">
                        <h3 style="color:white;"><?php echo $title; ?></h3>
                        <p style="font-size:16px; color:white;"><?php echo $servicerow['content']; ?></p>
                        </div>
                    </div>
                <?php }else if($servicerow['text_location']=="Top"){ ?>
                    <div class="col-lg-3" style="padding-left:0px; padding-right:0px;">
                        <div class="servicescontent" style=""><h3 style="color:white;"><?php echo $title; ?></h3>
                        <p style="font-size:16px; color:white!important;"><?php echo $servicerow['content']; ?></p> </div>
                        <?php if($first != 0){ ?>
                        <div class="servicesimg">
                        <?php } else{
                            $first++;?>
                            <div class="servicesimg" style="border-left: 1px solid #cccccc;">
                        <?php } ?>
                        <img class="img-fluid " style="margin-bottom:20px; max-width:60%!important; top: 54px; position: relative; margin-left: auto;margin-right: auto;display: table-cell; vertical-align: middle;" src="<?php echo show_image($servicerow['image']['url'], $servicerow['image']['width'], $servicerow['image']['height'],0.75) ?>"> 
                        </div>
                    </div>
               <?php } 
            }?>
    </div>
</section>

