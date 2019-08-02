<?php 
$image    = get_sub_field('image');
$imagePos = get_sub_field('image_position');
$services = get_sub_field('services');
$first = 0;
?>

<div class="">
    <div class="row" style="color:#00498d;">
            <div class="col-lg-6 text-center align-self-center left-content-work-block" style="padding-left:0px; padding-right:0px;">
                <?php if($image): ?>
                    <img class="img-fluid content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                <?php endif; ?>
            </div>
            <div class="col-lg-6 align-self-center right-content-work-block filter-padding">
            <?php foreach($services as $servicerow){
                if($first==0){?>
                    <div class="projects-container" style="border-top: 5px solid #00498D;">
                    <button  class="projects-collapsible"><?php echo $servicerow['project_title']?></button>
                <?php }else{?>
                    <div class="projects-container">
                    <button class="projects-collapsible"><?php echo $servicerow['project_title']?></button>
               <?php } $first++; ?>
                
                <div class="projects-content">
                    <?php foreach($servicerow as $projectrow){ ?>
                        <?php foreach($projectrow as $row){ ?>
                        <div style="padding-bottom:25px;"> <a style="color: #33B3E3;" onMouseOver="this.style.color='#00498D';" onMouseOut="this.style.color='#33B3E3'" href="<?php echo $row['project_url'] ?>"><?php echo $row['project_title'] ?></a> </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                </div>
            <?php }?>
            
                <?php echo $title ? "<h2 class='title'>{$title}</h2>" : '' ?>
                <div style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
    </div>
</div>
