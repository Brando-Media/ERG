<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$dtitle       = get_sub_field('displayed_title');
$sectionName = str_replace(' ', '', strtolower($title));
$show_twitter       = get_sub_field('show_twitter');
$first_triple       = get_sub_field('first_triple');
$topbg = get_sub_field('top_bg');

if($first_triple == 'no'){
    ?>
<section class="section d-flex blue-main-footer-bg" data-section-name="<?php echo $sectionName; ?>"> 
<div class="container container--small align-self-center main-related firstindirelatedtoppad" style="padding-top:0px;">
    <?php  $i = 0;  $k = 0;
    foreach($services as $servicerow){
        if($i == 0){ ?>
           
            
             <?php
            if($k == 0){ 
                if(!empty($title)){ ?> <div class="indiblogtitle indiblogrelatedpad indiblogrelatedpad indiblagtriplepadleft" style="padding-top:0px; margin-top:-30px;"><?php echo $title?></div> <?php } 
            } ?>
             <div class="row services-experts indiblagtriplepadleft" style="">
            <?php 
        } ?>
         <div class="col-lg-3 firstblogstylesmall" >  
            <img class="img-fluid w-100 imgh4 indibloghideimage" src="<?php echo show_image($services[1]['image']['url'], $services[1]['image']['width'], $services[1]['image']['height'], 75) ?>">
            <div class="header-blog">
                <?php echo $services[1]['title'] ?>  
            </div>
            <div class="header-content">
            <?php echo $services[1]['content'] ?>  
            </div>
            <div class="link-main ">
                <a href="<?php echo $services[1]['link_url'] ?> "><?php echo $services[1]['link_text'] ?> </a>
            </div>
        </div>
    <?php
        if($i == 2){
            $i = 0;
            $k++;
            ?>
            </div> 
        
            <?php 
        }else{
            $i++;
            $k++;
        } 
        
    }
    ?>
    <?php if($show_twitter == "yes"){ ?>
        <div class="row m0 individualblogpadtoptwitter">
        <div class="col-lg-8">
            <div class="main-footer-text">
                <div class="latesttwitter">
                    Latest Tweets
                </div>
                <div class="row">
                <?php echo do_shortcode("[custom-twitter-feeds]"); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-2 paddinglefttwitter">
            <div class="main-footer-text twitterfollowtext">
                Follow us
            </div>
            <a href="#home"><img src="/erg/wp-content/themes/brando/assets/images/twitter.png" title="Twitter link" width="30" height="30" /></a>
            <a href="#home"><img src="/erg/wp-content/themes/brando/assets/images/linkedin.png" title="Twitter link" width="30" height="30" /></a>
        </div>
        <?php } ?>
    </div>




</section>

<?php }else{  ?>
    
    <section class="section d-flex main-footer-bg" data-section-name="<?php echo $sectionName; ?>">
<div class="container container--small align-self-center main-related firstindirelatedtoppad">
    <?php  $i = 0;  $k = 0;
    foreach($services as $servicerow){
        if($i == 0){ ?>
           
            
             <?php
            if($k == 0){ 
                if(!empty($title)){ ?> <div class="indiblogtitle indiblogrelatedpad indiblogrelatedpad indiblagtriplepadleft" style="padding-top:0px; margin-top:-30px;"><?php echo $title?></div> <?php } 
            } ?>
             <div class="row services-experts indiblagtriplepadleft" style="">
            <?php 
        } ?>
         <div class="col-lg-3 firstblogstylesmall" >  
            <img class="img-fluid w-100 imgh4 indibloghideimage" src="<?php echo show_image($services[1]['image']['url'], $services[1]['image']['width'], $services[1]['image']['height'], 75) ?>">
            <div class="header-blog">
                <?php echo $services[1]['title'] ?>  
            </div>
            <div class="header-content">
            <?php echo $services[1]['content'] ?>  
            </div>
            <div class="link-main ">
                <a href="<?php echo $services[1]['link_url'] ?> "><?php echo $services[1]['link_text'] ?> </a>
            </div>
        </div>
    <?php
        if($i == 2){
            $i = 0;
            $k++;
            ?>
            </div> 
        
            <?php 
        }else{
            $i++;
            $k++;
        } 
        
    }
    ?>
     <?php if($show_twitter == "yes"){ ?>
        <div class="row m0 individualblogpadtoptwitter">
        <div class="col-lg-8">
            <div class="main-footer-text">
                <div class="latesttwitter">
                    Latest Tweets
                </div>
                <div class="row">
                <?php echo do_shortcode("[custom-twitter-feeds]"); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-2 paddinglefttwitter">
            <div class="main-footer-text twitterfollowtext">
                Follow us
            </div>
            <a href="#home"><img src="/erg/wp-content/themes/brando/assets/images/twitter.png" title="Twitter link" width="30" height="30" /></a>
            <a href="#home"><img src="/erg/wp-content/themes/brando/assets/images/linkedin.png" title="Twitter link" width="30" height="30" /></a>
        </div>
        <?php } ?>
    </div>




</section>


     <?php } ?>