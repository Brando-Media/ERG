<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$dtitle       = get_sub_field('displayed_title');
$sectionName = str_replace(' ', '', strtolower($title));
$show_twitter       = get_sub_field('show_twitter');
$first_triple       = get_sub_field('first_triple');
$topbg = get_sub_field('top_bg');
if($first_triple == 'no'){
    ?> <section class="section d-flex blue-main-footer-bg" data-section-name="<?php echo $sectionName; ?>"> 
<?php }else{ ?>
<section class="section d-flex main-footer-bg" data-section-name="<?php echo $sectionName; ?>">

<?php } 
?>

<div class="container container--small align-self-center main-related firstindirelatedtoppad">

        <div class="indiblogtitle indiblogrelatedpad indiblogrelatedpad indiblagtriplepadleft" style=""><?php echo $title?></div>
        <div class="row services-experts indiblagtriplepadleft" style="padding-top:20px;"> 
            <div class="col-lg-3 firstblogstylesmall" >
                
                <img class="img-fluid w-100 imgh4 indibloghideimage" src="<?php echo show_image($services[0]['image']['url'], $services[0]['image']['width'], $services[0]['image']['height'], 75) ?>">
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
            <div class="col-lg-3 firstblogstylesmall" >
                
                <img class="img-fluid w-100 imgh4 indibloghideimage"  src="<?php echo show_image($services[2]['image']['url'], $services[2]['image']['width'], $services[2]['image']['height'], 75) ?>">
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
