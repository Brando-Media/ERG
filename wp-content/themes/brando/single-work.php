<?php 
$completed = get_field('what_we_done');
$colour = get_field('header_colour');
if($colour == "Blue"){
    get_header('project'); 
}else{
    get_header('work'); 
} ?>
    <section class="section servicesoverviewbg" style="min-height: 675px;">
        <div class="container container--small main-content">
            
            <div class="row">
                <div class="col-lg-12 projects-home" style="color:white;">
                    <div style="max-width:90%;">
                        <h1 class="worktitlec" style="color:white; font-size: 50px;margin-bottom: 30px;padding-left:15px;font-weight: 900; font-family: 'PangramBlack';font-style: normal;">
                        <?php the_post(); the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-6 work-completed">
                </div>
            </div>
        </div>
        </section>
        <?php 
        if(have_rows('content')){
            while(have_rows('content')){
                the_row();
                if(get_row_layout() == 'image') get_template_part('templates/work/image');
                if(get_row_layout() == 'content_with_image') get_template_part('templates/work/content_with_image');
                if(get_row_layout() == 'images') get_template_part('templates/work/images');
                if(get_row_layout() == 'content_with_image_at_top') get_template_part('templates/work/content_with_image_at_top');
                if(get_row_layout() == 'content_left_content_right') get_template_part('templates/work/content_left_content_right');
                if(get_row_layout() == 'imagenobotpadding') get_template_part('templates/work/imagenobotpadding');
                if(get_row_layout() == 'project_filter') get_template_part('templates/work/project_filter');
                if(get_row_layout() == 'two_images_content') get_template_part('templates/casestudy/two_images_content');

            }
        }
        ?>
    <div class="section footerbg"  data-section-name="hello" style="min-height:20px;">    
    </div>
    <?php 
if($colour == "Blue"){
    get_footer('project'); 
}else{
    get_footer('work'); 
} ?>
