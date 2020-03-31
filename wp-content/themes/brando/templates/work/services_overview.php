<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$linktext       = get_sub_field('link_text');
$linkurl       = get_sub_field('link_url');

?>

<section class="section servicesoverviewbg" data-section-name="hover_images">
    <div style="";>
    <div class="row services-experts servicesoverviewcontent servicespb servicesmargin padleft99110 noml servicesoverviewwidth" style="margin:auto;"> 
    <div class="col-lg-12 servicesoverviewtitle" style="">
    <div class="serviceshometitle nopad992" ><?php echo $title?></div>
    <div class="linktext serviceslinktext nopad992"> <a class="a20padding" style="color:white; padding-left:0px; font-size:13px; font-weight:900;font-weight: 600;letter-spacing: 1px;" href="<?php echo $linkurl?>"><?php echo $linktext ?></a> </div>
    </div>
        <div class="row services-experts servicesoverviewcontent" style="margin:auto; padding-top:40px; margin-left:0px; max-width:100%;"> 
            <?php $first = 0; ?>
            <?php foreach($services as $servicerow){
                if($servicerow['text_location']=="Bottom"){ ?>
                    
                    <div class="col-lg-3" style="padding-left:0px; padding-right:0px; min-width: 198px;">
                        <div class="emptybox" style=""> </div>
                        <?php if($first != 0){ ?>
                        <div class="servicesimg" style="text-align:center;">
                        <?php } else{
                            $first++;?>
                            <div class="servicesimg" style="border-left: 1px solid #cccccc; text-align:center;">
                        <?php } ?>
                        <img  alt="<?php echo $servicerow['image']['alt']; ?>" class="img-fluid " style="margin-bottom:20px; max-width:60%!important; top:54px; position: relative; margin-left: auto;margin-right: auto;" src="<?php echo show_image($servicerow['image']['url'], $servicerow['image']['width'], $servicerow['image']['height'],0.75) ?>"> 
                        </div>
                        <div class="servicescontent nomarginl991 nomarginr991 padright99110 maxwidth991100">
                        <div class="servicesubtitle servicesubtitlebottom" style="color:white;"><?php echo $servicerow['title']; ?></div>
                        <?php echo $servicerow['content']; ?>
                        </div>
                    </div>
                <?php }else if($servicerow['text_location']=="Top"){ ?>
                    <div class="col-lg-3" style="padding-left:0px; padding-right:0px; min-width: 198px;">
                        <div class="servicescontent nomarginl991 nomarginr991 padright99110 maxwidth991100" style=""><div class="servicesubtitle" style="color:white;"><?php echo $servicerow['title']; ?></div>
                        <?php echo $servicerow['content']; ?></div>
                        <?php if($first != 0){ ?>
                        <div class="servicesimg" style="text-align:center;">
                        <?php } else{
                            $first++;?>
                            <div class="servicesimg" style="border-left: 1px solid #cccccc; text-align:center;">
                        <?php } ?>
                        <img alt="<?php echo $servicerow['image']['alt']; ?>" class="img-fluid " style="margin-bottom:20px; max-width:60%!important; top: 54px; position: relative; margin-left: auto;margin-right: auto;" src="<?php echo show_image($servicerow['image']['url'], $servicerow['image']['width'], $servicerow['image']['height'],0.75) ?>"> 
                        </div>
                    </div>
               <?php } 
            }?>
    </div>
</section>

