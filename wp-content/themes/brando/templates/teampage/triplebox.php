<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$dtitle       = get_sub_field('displayed_title');
$sectionName = str_replace(' ', '', strtolower($title));
?>

<?php if($title == "team_page"){?>
    <section style="padding-top:1px;" class="section teampagebgbottomop " data-section-name="<?php echo $sectionName; ?>">

    <div class="container container--small align-self-center teampagepaddingtop teampagemobilepad" style="padding-top:1px;" >

<h2 class="main-title" style="color:white"><?php echo $dtitle?></h2>
<div class="row teampagetriplerow"> 
    <div class="col-lg-3" >
        
        <img class="img-fluid w-100 teampagephoto" src="<?php echo show_image($services[0]['image']['url'], $services[0]['image']['width'], $services[0]['image']['height'], 75) ?>">
        <div class="teampage-triple">
            <?php echo $services[0]['title'] ?>  
        </div>
        <div class="teampage-content">
        <?php echo $services[0]['content'] ?>  
        </div>
        <div class="link-teampage ">
            <a href="<?php echo $services[0]['link_url'] ?> "><?php echo $services[0]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-3" >
        
        <img class="img-fluid w-100 teampagephoto" src="<?php echo show_image($services[1]['image']['url'], $services[1]['image']['width'], $services[1]['image']['height'], 75) ?>">
        <div class="teampage-triple">
            <?php echo $services[1]['title'] ?>  
        </div>
        <div class="teampage-content">
        <?php echo $services[1]['content'] ?>  
        </div>
        <div class="link-teampage ">
            <a href="<?php echo $services[1]['link_url'] ?> "><?php echo $services[1]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-3" >
        
        <img class="img-fluid w-100 teampagephoto" src="<?php echo show_image($services[2]['image']['url'], $services[2]['image']['width'], $services[2]['image']['height'], 75) ?>">
        <div class="teampage-triple">
            <?php echo $services[2]['title'] ?>  
        </div>
        <div class="teampage-content">
        <?php echo $services[2]['content'] ?> 
        </div> 
        <div class="link-teampage ">
            <a href="<?php echo $services[2]['link_url'] ?> "><?php echo $services[2]['link_text'] ?> </a>
        </div>
    </div>
</div>
<div class="row teampagetriplerow"> 
    <div class="col-lg-3" >
        
        <img class="img-fluid w-100 teampagephoto" src="<?php echo show_image($services[3]['image']['url'], $services[3]['image']['width'], $services[3]['image']['height'], 75) ?>">
        <div class="teampage-triple">
            <?php echo $services[3]['title'] ?>  
        </div>
        <div class="teampage-content">
        <?php echo $services[3]['content'] ?>  
        </div>
        <div class="link-teampage ">
            <a href="<?php echo $services[3]['link_url'] ?> "><?php echo $services[3]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-3" >
        
        <img class="img-fluid w-100 teampagephoto" src="<?php echo show_image($services[4]['image']['url'], $services[4]['image']['width'], $services[4]['image']['height'], 75) ?>">
        <div class="teampage-triple">
            <?php echo $services[4]['title'] ?>  
        </div>
        <div class="teampage-content">
        <?php echo $services[4]['content'] ?>  
        </div>
        <div class="link-teampage ">
            <a href="<?php echo $services[4]['link_url'] ?> "><?php echo $services[4]['link_text'] ?> </a>
        </div>
    </div>
    <div class="col-lg-3" >
        
        <img class="img-fluid w-100 teampagephoto" src="<?php echo show_image($services[5]['image']['url'], $services[5]['image']['width'], $services[5]['image']['height'], 75) ?>">
        <div class="teampage-triple">
            <?php echo $services[5]['title'] ?>  
        </div>
        <div class="teampage-content">
        <?php echo $services[5]['content'] ?>  
        </div>
        <div class="link-teampage ">
            <a href="<?php echo $services[5]['link_url'] ?> "><?php echo $services[5]['link_text'] ?> </a>
        </div>
    </div>
</div>
</section>
<?php } else { ?>
    <section style="padding-top:1px;" class="section casestudiesbgbottomop " data-section-name="<?php echo $sectionName; ?>">

<div class="container container--small align-self-center teampagepaddingtop" style="padding-top:1px;" >

        <h2 class="main-title" style="color:white"><?php echo $dtitle?></h2>
        <div class="row"> 
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[0]['image']['url'], $services[0]['image']['width'], $services[0]['image']['height'], 75) ?>">
                <div class="teampage-triple">
                    <?php echo $services[0]['title'] ?>  
                </div>
                <div class="teampage-content">
                <?php echo $services[0]['content'] ?>  
                </div>
                <div class="link-teampage ">
                    <a href="<?php echo $services[0]['link_url'] ?> "><?php echo $services[0]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[1]['image']['url'], $services[1]['image']['width'], $services[1]['image']['height'], 75) ?>">
                <div class="teampage-triple">
                    <?php echo $services[1]['title'] ?>  
                </div>
                <div class="teampage-content">
                <?php echo $services[1]['content'] ?>  
                </div>
                <div class="link-teampage ">
                    <a href="<?php echo $services[1]['link_url'] ?> "><?php echo $services[1]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[2]['image']['url'], $services[2]['image']['width'], $services[2]['image']['height'], 75) ?>">
                <div class="teampage-triple">
                    <?php echo $services[2]['title'] ?>  
                </div>
                <div class="teampage-content">
                <?php echo $services[2]['content'] ?> 
                </div> 
                <div class="link-teampage ">
                    <a href="<?php echo $services[2]['link_url'] ?> "><?php echo $services[2]['link_text'] ?> </a>
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[3]['image']['url'], $services[3]['image']['width'], $services[3]['image']['height'], 75) ?>">
                <div class="teampage-triple">
                    <?php echo $services[3]['title'] ?>  
                </div>
                <div class="teampage-content">
                <?php echo $services[3]['content'] ?>  
                </div>
                <div class="link-teampage ">
                    <a href="<?php echo $services[3]['link_url'] ?> "><?php echo $services[3]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[4]['image']['url'], $services[4]['image']['width'], $services[4]['image']['height'], 75) ?>">
                <div class="teampage-triple">
                    <?php echo $services[4]['title'] ?>  
                </div>
                <div class="teampage-content">
                <?php echo $services[4]['content'] ?>  
                </div>
                <div class="link-teampage ">
                    <a href="<?php echo $services[4]['link_url'] ?> "><?php echo $services[4]['link_text'] ?> </a>
                </div>
            </div>
            <div class="col-lg-3" >
                
                <img class="img-fluid w-100" src="<?php echo show_image($services[5]['image']['url'], $services[5]['image']['width'], $services[5]['image']['height'], 75) ?>">
                <div class="teampage-triple">
                    <?php echo $services[5]['title'] ?>  
                </div>
                <div class="teampage-content">
                <?php echo $services[5]['content'] ?>  
                </div>
                <div class="link-teampage ">
                    <a href="<?php echo $services[5]['link_url'] ?> "><?php echo $services[5]['link_text'] ?> </a>
                </div>
            </div>
        </div>
        </section>
        <?php } ?>

