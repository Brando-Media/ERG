<?php
$bg          = get_sub_field('background');
$title       = get_sub_field('title');
$content       = get_sub_field('content');

$sectionName = str_replace(' ', '', strtolower($title));
?>
<section class="servicesoverviewbgright section casestudiesheight" data-section-name="<?php echo $sectionName; ?>">
        <div class="container container--small main-content" style="padding-bottom:0px;">
            
            <div class="row">
                <div class="col-lg-12 projects-home" style="color:white;">
                    <div class=" left-content-teampage">
                        <div class="fontworksingle" style="padding-left:15px; margin-bottom:30px;">
                        <?php the_post(); the_title(); ?> </div>
                        <div class="col-lg-6 work-completed" style="max-width:700px;">
                        <?php echo $content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

