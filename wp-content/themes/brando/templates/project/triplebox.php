<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$triplestyle       = get_sub_field('triple_style');
$dtitle       = get_sub_field('displayed_title');
$sectionName = str_replace(' ', '', strtolower($title));
$topbg = get_sub_field('top_bg'); 
if($topbg == 'No'){
?> <section class="" data-section-name="<?php echo $sectionName; ?>"> <?php }else{ ?>
<section class="section casestudiesbgbottomop" data-section-name="<?php echo $sectionName; ?>">

<?php }
?>
<?php if($triplestyle == "case_studies"){?>
 
    <div class="container container--small align-self-center" id="teampagecontainertop" style="margin: auto;">

<div class="row services-experts"> 
    <div class="col-lg-4 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[0]['image']['url'], $services[0]['image']['width'], $services[0]['image']['height'], 75) ?>">
        <div class="casestudytitle-triple">
            <?php echo $services[0]['title'] ?>  
        </div>
        <div class="casestudycontent-text"> <?php echo $services[0]['content'] ?>  </div>
        <div class="link-casestudy ">
            <a href="<?php echo $services[0]['link_url'] ?> "><?php echo $services[0]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-4 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[1]['image']['url'], $services[1]['image']['width'], $services[1]['image']['height'], 75) ?>">
        <div class="casestudytitle-triple">
            <?php echo $services[1]['title'] ?>  
        </div>
        <div class="casestudycontent-text"> <?php echo $services[1]['content'] ?>  </div>
        <div class="link-casestudy ">
            <a href="<?php echo $services[1]['link_url'] ?> "><?php echo $services[1]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-4 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[2]['image']['url'], $services[2]['image']['width'], $services[2]['image']['height'], 75) ?>">
        <div class="casestudytitle-triple">
            <?php echo $services[2]['title'] ?>  
        </div>
        <div class="casestudycontent-text"> <?php echo $services[2]['content'] ?>  </div>
        <div class="link-casestudy ">
            <a href="<?php echo $services[2]['link_url'] ?> "><?php echo $services[2]['link_text'] ?> </a>
        </div>
    </div>
</div>
<div class="row services-experts"> 
    <div class="col-lg-4 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[3]['image']['url'], $services[3]['image']['width'], $services[3]['image']['height'], 75) ?>">
        <div class="casestudytitle-triple">
            <?php echo $services[3]['title'] ?>  
        </div>
        <div class="casestudycontent-text"> <div class="latest-text"> <?php echo $services[3]['content'] ?>  </div></div>
        <div class="link-casestudy ">
            <a href="<?php echo $services[3]['link_url'] ?> "><?php echo $services[3]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-4 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[4]['image']['url'], $services[4]['image']['width'], $services[4]['image']['height'], 75) ?>">
        <div class="casestudytitle-triple">
            <?php echo $services[4]['title'] ?>  
        </div>
        <div class="casestudycontent-text">  <?php echo $services[4]['content'] ?>  </div>
        <div class="link-casestudy ">
            <a href="<?php echo $services[4]['link_url'] ?> "><?php echo $services[4]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-4 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[5]['image']['url'], $services[5]['image']['width'], $services[5]['image']['height'], 75) ?>">
        <div class="casestudytitle-triple">
            <?php echo $services[5]['title'] ?>  
        </div>
        <div class="casestudycontent-text"> <?php echo $services[5]['content'] ?>  </div>
        <div class="link-casestudy ">
            <a href="<?php echo $services[5]['link_url'] ?> "><?php echo $services[5]['link_text'] ?> </a>
        </div>
    </div>
</div>


<?php } else if($triplestyle=="latest_news"){ ?>

    <div class="container container--small align-self-center" style="margin:auto;">

<h2 class="latestnews-title" ><?php echo $title?></h2>
<div class="row services-experts" style="margin:auto;"> 
    <div class="col-lg-4" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[0]['image']['url'], $services[0]['image']['width'], $services[0]['image']['height'], 75) ?>">
        <div class="latest-triple">
            <?php echo $services[0]['title'] ?>  
        </div>
        <div class="latest-text"> <?php echo $services[0]['content'] ?>  </div>
        <div class="link-latest ">
            <a href="<?php echo $services[0]['link_url'] ?> "><?php echo $services[0]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-4" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[1]['image']['url'], $services[1]['image']['width'], $services[1]['image']['height'], 75) ?>">
        <div class="latest-triple">
            <?php echo $services[1]['title'] ?>  
        </div>
        <div class="latest-text"> <?php echo $services[1]['content'] ?>  </div>
        <div class="link-latest ">
            <a href="<?php echo $services[1]['link_url'] ?> "><?php echo $services[1]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-4" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[2]['image']['url'], $services[2]['image']['width'], $services[2]['image']['height'], 75) ?>">
        <div class="latest-triple">
            <?php echo $services[2]['title'] ?>  
        </div>
        <div class="latest-text"> <?php echo $services[2]['content'] ?>  </div>
        <div class="link-latest ">
            <a href="<?php echo $services[2]['link_url'] ?> "><?php echo $services[2]['link_text'] ?> </a>
        </div>
    </div>
</div>
<div class="row services-experts"> 
    <div class="col-lg-4" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[3]['image']['url'], $services[3]['image']['width'], $services[3]['image']['height'], 75) ?>">
        <div class="latest-triple">
            <?php echo $services[3]['title'] ?>  
        </div>
        <div class="latest-text"> <div class="latest-text"> <?php echo $services[3]['content'] ?>  </div></div>
        <div class="link-latest ">
            <a href="<?php echo $services[3]['link_url'] ?> "><?php echo $services[3]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-4" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[4]['image']['url'], $services[4]['image']['width'], $services[4]['image']['height'], 75) ?>">
        <div class="latest-triple">
            <?php echo $services[4]['title'] ?>  
        </div>
        <div class="latest-text">  <?php echo $services[4]['content'] ?>  </div>
        <div class="link-latest ">
            <a href="<?php echo $services[4]['link_url'] ?> "><?php echo $services[4]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-4" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[5]['image']['url'], $services[5]['image']['width'], $services[5]['image']['height'], 75) ?>">
        <div class="latest-triple">
            <?php echo $services[5]['title'] ?>  
        </div>
        <div class="latest-text"> <?php echo $services[5]['content'] ?>  </div>
        <div class="link-latest ">
            <a href="<?php echo $services[5]['link_url'] ?> "><?php echo $services[5]['link_text'] ?> </a>
        </div>
    </div>
</div>

<?php } else if($triplestyle=="team_page"){ ?>

    <div class="container container--small align-self-center" id="teampagecontainertop">

<div class="row services-experts"> 
    <div class="col-lg-3 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[0]['image']['url'], $services[0]['image']['width'], $services[0]['image']['height'], 75) ?>">
        <div class="teammembertitle-triple">
            <?php echo $services[0]['title'] ?>  
        </div>
        <div class="teammembername-text"> <?php echo $services[0]['content'] ?>  </div>
        <div class="link-latest ">
            <a href="<?php echo $services[0]['link_url'] ?> "><?php echo $services[0]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-3 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[1]['image']['url'], $services[1]['image']['width'], $services[1]['image']['height'], 75) ?>">
        <div class="teammembertitle-triple">
            <?php echo $services[1]['title'] ?>  
        </div>
        <div class="teammembername-text"> <?php echo $services[1]['content'] ?>  </div>
        <div class="link-latest ">
            <a href="<?php echo $services[1]['link_url'] ?> "><?php echo $services[1]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-3 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[2]['image']['url'], $services[2]['image']['width'], $services[2]['image']['height'], 75) ?>">
        <div class="teammembertitle-triple">
            <?php echo $services[2]['title'] ?>  
        </div>
        <div class="teammembername-text"> <?php echo $services[2]['content'] ?>  </div>
        <div class="link-latest ">
            <a href="<?php echo $services[2]['link_url'] ?> "><?php echo $services[2]['link_text'] ?> </a>
        </div>
    </div>
</div>
<div class="row services-experts"> 
    <div class="col-lg-3 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[3]['image']['url'], $services[3]['image']['width'], $services[3]['image']['height'], 75) ?>">
        <div class="teammembertitle-triple">
            <?php echo $services[3]['title'] ?>  
        </div>
        <div class="teammembername-text"> <div class="latest-text"> <?php echo $services[3]['content'] ?>  </div></div>
        <div class="link-latest ">
            <a href="<?php echo $services[3]['link_url'] ?> "><?php echo $services[3]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-3 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[4]['image']['url'], $services[4]['image']['width'], $services[4]['image']['height'], 75) ?>">
        <div class="teammembertitle-triple">
            <?php echo $services[4]['title'] ?>  
        </div>
        <div class="teammembername-text">  <?php echo $services[4]['content'] ?>  </div>
        <div class="link-latest ">
            <a href="<?php echo $services[4]['link_url'] ?> "><?php echo $services[4]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-3 teamtriplecol" >
        
        <img class="img-fluid w-100" src="<?php echo show_image($services[5]['image']['url'], $services[5]['image']['width'], $services[5]['image']['height'], 75) ?>">
        <div class="teammembertitle-triple">
            <?php echo $services[5]['title'] ?>  
        </div>
        <div class="teammembername-text"> <?php echo $services[5]['content'] ?>  </div>
        <div class="link-latest ">
            <a href="<?php echo $services[5]['link_url'] ?> "><?php echo $services[5]['link_text'] ?> </a>
        </div>
    </div>
</div>


<?php }else{ ?>


<div class="container container--small align-self-center">

        <h2 class="main-title latest-title" ><?php echo $title?></h2>
        <div class="row services-experts"> 
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[0]['image']['url'], $services[0]['image']['width'], $services[0]['image']['height'], 75) ?>">
                <div class="latest-triple">
                    <?php echo $services[0]['title'] ?>  
                </div>
                <div class="latest-text"> <?php echo $services[0]['content'] ?>  </div>
                <div class="link-latest ">
                    <a href="<?php echo $services[0]['link_url'] ?> "><?php echo $services[0]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[1]['image']['url'], $services[1]['image']['width'], $services[1]['image']['height'], 75) ?>">
                <div class="latest-triple">
                    <?php echo $services[1]['title'] ?>  
                </div>
                <div class="latest-text"> <?php echo $services[1]['content'] ?>  </div>
                <div class="link-latest ">
                    <a href="<?php echo $services[1]['link_url'] ?> "><?php echo $services[1]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[2]['image']['url'], $services[2]['image']['width'], $services[2]['image']['height'], 75) ?>">
                <div class="latest-triple">
                    <?php echo $services[2]['title'] ?>  
                </div>
                <div class="latest-text"> <?php echo $services[2]['content'] ?>  </div>
                <div class="link-latest ">
                    <a href="<?php echo $services[2]['link_url'] ?> "><?php echo $services[2]['link_text'] ?> </a>
                </div>
            </div>
        </div>
        <div class="row services-experts"> 
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[3]['image']['url'], $services[3]['image']['width'], $services[3]['image']['height'], 75) ?>">
                <div class="latest-triple">
                    <?php echo $services[3]['title'] ?>  
                </div>
                <div class="latest-text"> <div class="latest-text"> <?php echo $services[3]['content'] ?>  </div></div>
                <div class="link-latest ">
                    <a href="<?php echo $services[3]['link_url'] ?> "><?php echo $services[3]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[4]['image']['url'], $services[4]['image']['width'], $services[4]['image']['height'], 75) ?>">
                <div class="latest-triple">
                    <?php echo $services[4]['title'] ?>  
                </div>
                <div class="latest-text">  <?php echo $services[4]['content'] ?>  </div>
                <div class="link-latest ">
                    <a href="<?php echo $services[4]['link_url'] ?> "><?php echo $services[4]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[5]['image']['url'], $services[5]['image']['width'], $services[5]['image']['height'], 75) ?>">
                <div class="latest-triple">
                    <?php echo $services[5]['title'] ?>  
                </div>
                <div class="latest-text"> <?php echo $services[5]['content'] ?>  </div>
                <div class="link-latest ">
                    <a href="<?php echo $services[5]['link_url'] ?> "><?php echo $services[5]['link_text'] ?> </a>
                </div>
            </div>
        </div>

        <?php } ?>
</section>