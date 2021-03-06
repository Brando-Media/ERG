<?php 
$image    = get_sub_field('image');
$services = get_sub_field('services'); 
$title = get_sub_field('title');
$image = get_sub_field('image');
$first = 0;
?>
 <section class="section servicesoverviewbgright" style="min-height: 100vh;">
        <div class="container container--small main-content serviceshometext">
            <div class="row">
                <div class="col-lg-6 projects-home" style="color:white; padding-left:0px; max-width:800px;">
                <div class="">
                    <div class="row" style="color:#fff;">
                            <div class="col-lg-12 right-content-work-block pfcol6" style="max-width:700px;">
                            <div class="ourfocustext"><?php echo $title ?></div>
                            <?php foreach($services as $servicerow){ 
                                if($first==0){?>
                                    <button class="accordionproject" style="border-top: 1px solid #fff; outline: none!Important; position:relative;"><span class="ourfocustextsize" style="font-size:24px;"><?php echo $servicerow['project_title']?></span></button>
                                    <div class="panelproject" style="max-height:inherit;">
                                    <?php foreach($servicerow as $projectrow){ ?>
                                        <?php foreach($projectrow as $row){ ?>
                                            <div style="padding-bottom:25px;"> <div class="ourfocussmalltextp"><?php echo $row['project_title'] ?></div> </div>
                                        <?php } ?>
                                    <?php } ?>
                                    </div>
                                <?php }else{?>
                                    <button class="accordionproject" style="border-top: 1px solid #fff; outline: none!Important;position:relative;"><span class="ourfocustextsize" style="font-size:24px;"><?php echo $servicerow['project_title']?></span></button>
                                    <div class="panelproject" style="max-height:inherit;">
                                    <?php foreach($servicerow as $projectrow){ ?>
                                        <?php foreach($projectrow as $row){ ?>
                                            <div style="padding-bottom:25px;"> <div class="ourfocussmalltextp"><?php echo $row['project_title'] ?></div> </div>
                                        <?php } ?>
                                    <?php } ?>
                                    </div>
                                    <!--<div class="col-lg-6 text-center /*align-self-center*/ left-content-work-block pfcol6" style="padding-left:0px; padding-right:0px;">
                            </div>-->
                            <?php } $first++; ?>
                            <?php }?>
                            <div style="min-width:150px; height:2px;border-top: 1px solid #fff;"></div>
                            </div>
                            
                    </div>
                </div>
                </div>
                <div class="ourfocusmargina projects-home col-lg-6 text-center /*align-self-center*/ left-content-work-block pfcol6" style="padding-left:0px; padding-right:0px;">
                <?php if($image): ?>
                    <img alt="<?php echo $image['alt'] ?>" class="img-fluid content-image mt55of" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                <?php endif; ?>
            </div>
            </div>
        </div>
        </section>
