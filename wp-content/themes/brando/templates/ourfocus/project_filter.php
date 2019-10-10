<?php 
$image    = get_sub_field('image');
$services = get_sub_field('services');
$first = 0;
?>
 <section class="section servicesoverviewbgright" style="min-height: 100vh;">
        <div class="container container--small main-content serviceshometext">
            <div class="row">
                <div class="col-lg-12 projects-home" style="color:white; padding-left:0px;">
                <div class="">
                    <div class="row" style="color:#fff;">
                            
                            <div class="col-lg-12 right-content-work-block pfcol6" style="max-width:700px;">
                            <?php foreach($services as $servicerow){ 
                                if($first==0){?>
                                    <button class="accordionproject" style="border-top: 1px solid #fff; outline: none!Important;"><span class="ourfocustextsize" style="font-size:24px;"><?php echo $servicerow['project_title']?></span></button>
                                    <div class="panelproject">
                                    <?php foreach($servicerow as $projectrow){ ?>
                                        <?php foreach($projectrow as $row){ ?>
                                            <div style="padding-bottom:25px;"> <a class="hoverremoveactive" style="color: #fff!important;" onMouseOver="this.style.color='#fff';" onMouseOut="this.style.color='#fff'" href="<?php echo $row['project_url'] ?>"><?php echo $row['project_title'] ?></a> </div>
                                        <?php } ?>
                                    <?php } ?>
                                    </div>
                                <?php }else{?>
                                    <button class="accordionproject" style="border-top: 1px solid #fff; outline: none!Important;"><span class="ourfocustextsize" style="font-size:24px;"><?php echo $servicerow['project_title']?></span></button>
                                    <div class="panelproject">
                                    <?php foreach($servicerow as $projectrow){ ?>
                                        <?php foreach($projectrow as $row){ ?>
                                            <div style="padding-bottom:25px;"> <a class="hoverremoveactive"  style="color: #fff!important;" onMouseOver="this.style.color='#fff';" onMouseOut="this.style.color='#fff'" href="<?php echo $row['project_url'] ?>"><?php echo $row['project_title'] ?></a> </div>
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
            </div>
        </div>
        </section>
