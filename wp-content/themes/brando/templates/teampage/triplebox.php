<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$dtitle       = get_sub_field('displayed_title');
$sectionName = str_replace(' ', '', strtolower($title));
?>


    
    <section style="padding-top:1px;" class="section teampagebgbottomop " data-section-name="<?php echo $sectionName; ?>">

    <?php  $i = 0;  $k = 0;
    foreach($services as $servicerow){
        if($i == 0){ ?>
        <div class="container container--small align-self-center teampagepaddingtop teampagemobilepad" style="padding-top:1px;" > 
        <?php   if($k == 0){ 
                if(!empty($title)){ ?> <h2 class="main-title" style="color:white"><?php echo $dtitle?></h2>                    <?php } 
             } ?>
            <div class="row teampagetriplerow"> 
            <?php 
        } ?>
         <div class="col-lg-3" >
           <img class="img-fluid w-100 teampagephoto" src="<?php echo show_image($services[$k]['image']['url'], $services[$k]['image']['width'], $services[$k]['image']['height'], 75) ?>">
            <div class="teampage-triple">
                <?php echo $services[$k]['title'] ?>  
            </div>
            <div class="teampage-content">
            <?php echo $services[$k]['content'] ?>  
            </div>
            <div class="link-teampage ">
                <a href="<?php echo $services[$k]['link_url'] ?> "><?php echo $services[$k]['link_text'] ?> </a>
            </div>
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

    

