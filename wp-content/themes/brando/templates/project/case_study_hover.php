<?php
$services    = get_sub_field('services');
?>

<section class="white-bg d-flex section" data-section-name="hover_images">
    <div style="";>
        <div class="row services-experts" style="margin-left:0px; margin-right:0px; min-width:100vw;"> 
            <div> <?php// var_dump($services); ?></div>
            <div class="col-lg-3 container" style="padding-left:0px; padding-right:0px;" >
                <?php //echo $services[0]['filter'] ?> 
                <img class="img-fluid w-100" src="<?php echo show_image($services[0]['image']['url'], $services[0]['image']['width'], $services[0]['image']['height'],0.75) ?>"> 
                <div class="overlay">
                    <div class="text"><?php echo $services[0]['case_study']?></div>
                    <div class="viewcasestudy">VIEW CASE STUDY</div>
                </div>
            </div>
            <div class="col-lg-3 container" style="padding-left:0px; padding-right:0px;">
                <?php //echo $services[1]['filter'] ?>  
                <img class="img-fluid w-100" src="<?php echo show_image($services[1]['image']['url'], $services[1]['image']['width'], $services[1]['image']['height']) ?>"> 
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <div class="viewcasestudy">VIEW CASE STUDY</div>
                </div>
            </div>
            <div class="col-lg-3 container" style="padding-left:0px; padding-right:0px;">
            <?php //echo $services[2]['filter'] ?>  
            <img class="img-fluid w-100" src="<?php echo show_image($services[2]['image']['url'], $services[2]['image']['width'], $services[2]['image']['height']) ?>"> 
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <div class="viewcasestudy">VIEW CASE STUDY</div>
                </div>
            </div>
            <div class="col-lg-3 container" style="padding-left:0px; padding-right:0px;">
            <?php //echo $services[3]['filter'] ?>  
            <img class="img-fluid w-100" src="<?php echo show_image($services[3]['image']['url'], $services[3]['image']['width'], $services[3]['image']['height']) ?>"> 
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <div class="viewcasestudy">VIEW CASE STUDY</div>
                </div>
            </div>
        </div>
    </div>
</section>

