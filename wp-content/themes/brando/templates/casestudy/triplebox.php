<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$dtitle       = get_sub_field('displayed_title');
$sectionName = str_replace(' ', '', strtolower($title));
$topbg = get_sub_field('top_bg');
if($topbg == 'No'){
?> <section class="section d-flex main-footer-bg" data-section-name="<?php echo $sectionName; ?>"> <?php }else{ ?>
<section class="section d-flex main-footer-bg" data-section-name="<?php echo $sectionName; ?>">

<?php } 
?>

<div class="container container--small align-self-center main-related">

        <h2 class="mainimage-title p100l" style=""><?php echo $title?></h2>
        <div class="row services-experts p100l" style="padding-top:20px;"> 
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100 imgh4" src="<?php echo show_image($services[0]['image']['url'], $services[0]['image']['width'], $services[0]['image']['height'], 75) ?>">
                <div class="header-blog">
                    <?php echo $services[0]['title'] ?>  
                </div>
                <div class="header-content">
                <?php echo $services[0]['content'] ?>  
                </div>
                <div class="link-main ">
                    <a href="<?php echo $services[0]['link_url'] ?> "><?php echo $services[0]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100 imgh4" src="<?php echo show_image($services[1]['image']['url'], $services[1]['image']['width'], $services[1]['image']['height'], 75) ?>">
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
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100 imgh4"  src="<?php echo show_image($services[2]['image']['url'], $services[2]['image']['width'], $services[2]['image']['height'], 75) ?>">
                <div class="header-blog">
                    <?php echo $services[2]['title'] ?>  
                </div>
                <div class="header-content">
                <?php echo $services[2]['content'] ?> 
                </div> 
                <div class="link-main ">
                    <a href="<?php echo $services[2]['link_url'] ?> "><?php echo $services[2]['link_text'] ?> </a>
                </div>
            </div>
        </div>
       <!-- <div class="row services-experts"> 
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[3]['image']['url'], $services[3]['image']['width'], $services[3]['image']['height'], 75) ?>">
                <div class="header-blog">
                    <?php echo $services[3]['title'] ?>  
                </div>
                <div class="header-content">
                <?php echo $services[3]['content'] ?> 
                </div>
                <div class="link-main ">
                    <a href="<?php echo $services[3]['link_url'] ?> "><?php echo $services[3]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[4]['image']['url'], $services[4]['image']['width'], $services[4]['image']['height'], 75) ?>">
                <div class="header-blog">
                    <?php echo $services[4]['title'] ?>  
                </div>
                <div class="header-content">
                <?php echo $services[4]['content'] ?>  
                </div>
                <div class="link-main ">
                    <a href="<?php echo $services[4]['link_url'] ?> "><?php echo $services[4]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[5]['image']['url'], $services[5]['image']['width'], $services[5]['image']['height'], 75) ?>">
                <div class="header-blog">
                    <?php echo $services[5]['title'] ?>  
                </div>
                <div class="header-content">
                <?php echo $services[5]['content'] ?>  
                </div>
                <div class="link-main ">
                    <a href="<?php echo $services[5]['link_url'] ?> "><?php echo $services[5]['link_text'] ?> </a>
                </div>
            </div>
        </div>-->
        <div class="row m0">
        <div class="col-lg-10">
            <div class="main-footer-text">
                Latest Tweets
                <div class="row">
                <?php echo do_shortcode("[custom-twitter-feeds]"); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="main-footer-text">
                Follow us
            </div>
            <a href="#home"><img src="http://erg.loc:8888/wp-content/uploads/2019/07/twitter.png" title="Twitter link" width="30" height="30" /></a>
            <a href="#home"><img src="http://erg.loc:8888/wp-content/uploads/2019/07/linkedin.png" title="Twitter link" width="30" height="30" /></a>
        </div>
</div>

</section>
