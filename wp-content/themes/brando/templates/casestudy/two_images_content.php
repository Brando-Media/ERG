<?php 
$topimage    = get_sub_field('top_image');
$bottomimage    = get_sub_field('bottom_image');
$services    = get_sub_field('services');
?>
<section class="section">
<div class="">
    <div class="row d-flex" style="color:#00498d;">
            <div class="col-lg-6 text-center align-self-center left-content-work-block" style="padding-left:0px; padding-right:0px;">
            <div>
                <?php if($topimage): ?>
                    <img class="img-fluid content-image" src="<?php echo show_image($topimage['url'], $topimage['width'], $topimage['height']); ?>">
                <?php endif; ?>
            </div>
            <div>
            <?php if($bottomimage): ?>
                    <img class="img-fluid content-image" src="<?php echo show_image($bottomimage['url'], $bottomimage['width'], $bottomimage['height']); ?>">
                <?php endif; ?>
            </div>
                
            </div>
            <div class="col-lg-6 align-self-center right-content-work-block">
                <?php foreach($services as $servicerow){ ?>
                            <div class="header-two">
                                <?php echo $servicerow['title']; ?>
                           </div> 
                           <div class="two-content">
                                <?php echo $servicerow['content']; ?>
                           </div> 
                    
                    <?php  }?>
            </div>
    </div>
</div>
</section>