<?php 
/*
 * Template Name: Project
 * Template Post Type: post, page, product
 */
$colour = get_field('header_colour');
$static_erg_international = get_field('static_erg_international');
if($colour == "Blue"){
    get_header('project'); 
}else{
    get_header('work'); 
}
$image = false;
?>
    <!--<section class="section" style="height: 675px;">
        <div class="container container--small main-content">
            
            <div class="row">
                <div class="col-lg-12 projects-home" style="color:white;">
                    <div class=" left-content-work-block">
                        <h1 class="" style="color:white; padding-left:55px; font-size: 50px;margin-bottom: 30px;font-weight: 900; font-family: 'PangramBlack';font-style: normal;">
                        <?php //the_post(); the_title(); ?></h1>
                        <?php //the_content(); ?> 
                    </div>
                </div>
                <div class="col-lg-6 work-completed">
                </div>
            </div>
        </div>
        </section>-->
        <main class="mainstyle">
        <?php 
        if(have_rows('content')){
            while(have_rows('content')){
                the_row();
                if(get_row_layout() == 'image') get_template_part('templates/project/image');
                if(get_row_layout() == 'content_with_image') get_template_part('templates/project/content_with_image');
                if(get_row_layout() == 'images'){
                    $image=true;
                    get_template_part('templates/project/images'); 
                } 
                if(get_row_layout() == 'images_three'){
                    $image=true;
                    get_template_part('templates/project/imagestriple'); 
                } 
                if(get_row_layout() == 'images_four'){
                    get_template_part('templates/project/imagessfour'); 
                    $image=true;
                }
                if(get_row_layout() == 'images_solo'){ 
                    get_template_part('templates/project/imagessolo'); 
                    $image=true;
                }  
                if(get_row_layout() == 'imagesflex'){
                    $image=true;
                    get_template_part('templates/project/imagesflex'); 
                } 
                if(get_row_layout() == 'content_with_image_at_top') get_template_part('templates/project/content_with_image_at_top');
                if(get_row_layout() == 'content_left_content_right') get_template_part('templates/project/content_left_content_right');
                if(get_row_layout() == 'imagenobotpadding') get_template_part('templates/project/imagenobotpadding');
                if(get_row_layout() == 'project_filter') get_template_part('templates/project/project_filter');  
                if(get_row_layout() == 'project_home') get_template_part('templates/project/project_home');
            }
        } 
        ?> 
        <?php if($image=='true'){ ?>
            <div class="section footerbg relfooter" style="" data-section-name="hello" style="min-height:20px;">    
            </div>
        <?php }else{ ?>
            <div class="section footerbg"  data-section-name="hello" style="min-height:20px;">    
            </div>
        <?php } ?>
    </main>
    <?php 
if($static_erg_international){
    get_footer('casestudies'); 
}else if($colour == "Blue"){
    get_footer('project'); 
}else{
    get_footer('work'); 
} 

?>
