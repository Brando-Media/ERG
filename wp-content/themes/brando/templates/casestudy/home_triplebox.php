<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$dtitle       = get_sub_field('displayed_title');
$sectionName = str_replace(' ', '', strtolower($title));
?>


    
    <section style="" class="section paddingtop120pxcs casestudiesbgbottomblue cspaddingbottom90" data-section-name="<?php echo $sectionName; ?>">

    <?php  $i = 0;  $k = 0;
    foreach($services as $servicerow){
        if($i == 0){ ?>
        <div class="container container--small align-self-center teampagepaddingtop teampagemobilepad pb0" style="padding-top:1px;" > 
        <?php   if($k == 0){ 
                if(!empty($title)){ ?> <h2 class="main-title" style="color:white"><?php echo $dtitle?></h2>                    <?php } 
             } ?>
            <div class="row teampagetriplerow tp100w">  
            <?php 
        } ?>
         <div class="col-lg-3 tpcol3 ">
             <div class="casestudyhover" style="position:relative;">
            <a href="<?php echo $servicerow['link_url']; ?>">
                <img class="img-fluid w-100 teampagephoto" src="<?php echo show_image($services[$k]['image']['url'], $services[$k]['image']['width'], $services[$k]['image']['height'], 75) ?>">
                <div class="overlay"> 
                    <!--<div class="hometextoverlay"><?php echo $servicerow['title']?></div>-->
                    <div class="viewcasestudy"><?php echo $servicerow['link_text']?></div>
                </div>
            </a>
            </div>
            <a href="<?php echo $services[0]['link_url'] ?> "><div class="casestudytitle-triple" style="padding-top:20px; padding-bottom:30px;">
                <?php echo $services[$k]['title'] ?>  
            </div></a>
            <!--<div class="casestudycontent-text">
            <?php echo $services[$k]['content'] ?>  
            </div> 
            <div class="link-casestudy ">
                <a href="<?php echo $services[$k]['link_url'] ?> "><?php echo $services[$k]['link_text'] ?> </a>
            </div>-->
        </div>
    <?php
        if($i == 2){
            $i = 0;
            $k++;
            ?>
            </div> 
        </div>
            <?php 
        }else{
            $i++;
            $k++;
        } 
        
    }
    ?>


</section>

    

