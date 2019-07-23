<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$linktext       = get_sub_field('link_text');
$linkurl       = get_sub_field('link_url');

?>

<section class="section servicesoverviewbg d-flex" data-section-name="hover_images">
    <div style="";>
    <h2 class="main-title" style="color:white; padding-left:20%; padding-top:10%; margin-bottom:0px;"><?php echo $title?></h2>
    <div class="linktext"> <a style="color:white; padding-left:20%;" href="<?php echo $linkurl?>"><?php echo $linktext ?></a> </div>
        <div class="row services-experts" style="margin-left:0px; margin-top:30px; margin-right:0px; min-width:100vw; padding-left:30px; padding-right:30px;"> 
            <?php //var_dump($services);?>
            <?php foreach($services as $servicerow){
                if($servicerow['text_location']=="Bottom"){ ?>
                    
                    <div class="col-lg-3" style="padding-left:0px; padding-right:0px;">
                        <div style="height:140px; margin-bottom:20px;"> </div>
                        <div class="servicesimg">
                        <img class="img-fluid " style="margin-bottom:20px; max-width:60%!important; margin-left: auto;margin-right: auto;display: table-cell; vertical-align: middle;" src="<?php echo show_image($servicerow['image']['url'], $servicerow['image']['width'], $servicerow['image']['height'],0.75) ?>"> 
                        </div>
                        <h3 style="color:white;"><?php echo $title; ?></h3>
                        <p style="font-size:16px; color:white;"><?php echo $servicerow['content']; ?></p>
                    </div>
                <?php }else if($servicerow['text_location']=="Top"){ ?>
                    <div class="col-lg-3" style="padding-left:0px; padding-right:0px;">
                        <div style="height:140px; margin-bottom:20px;"><h3 style="color:white;"><?php echo $title; ?></h3>
                        <p style="font-size:16px; color:white!important;"><?php echo $servicerow['content']; ?></p> </div>
                        <div class="servicesimg">
                        <img class="img-fluid " style="margin-bottom:20px; max-width:60%!important; margin-left: auto;margin-right: auto;display: table-cell; vertical-align: middle;" src="<?php echo show_image($servicerow['image']['url'], $servicerow['image']['width'], $servicerow['image']['height'],0.75) ?>"> 
                        </div>
                    </div>
               <?php } 
            }?>
    </div>
</section>

