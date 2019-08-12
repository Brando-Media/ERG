<?php 
/*
Template Name: Front Page
*/
$colour = get_field('header_colour');
if($colour == "Blue"){ 
    get_header(); 
}else{
    get_header(); 
} ?>

    <section class="section  background-image-home" data-section-name="homes" style="max-height:750px; min-height:750px;">
    <div class="background-layer-home">
    <div class="frontpagetitle" style="
    /* right: 40%; */
    /* margin-left: 10%; */
    left: 200px;
    top: 300px;">
    Placeholder Title Goes Here Global Construction Project Management Services etc.</div>

    </div> 
        <div style="margin:auto 0;"><div>  
    </section>
     
    <?php  
    if(have_rows('content')){
        while(have_rows('content')){
            the_row();
            if(get_row_layout() == 'content') get_template_part('templates/content');
            if(get_row_layout() == 'services') get_template_part('templates/services');
            if(get_row_layout() == 'contact') get_template_part('templates/contact');
            if(get_row_layout() == 'featured_work') get_template_part('templates/featured_work');
            if(get_row_layout() == 'content_with_image') get_template_part('templates/work/content_with_image');
            if(get_row_layout() == 'case_study_hover') get_template_part('templates/work/case_study_hover');
            if(get_row_layout() == 'services_overview') get_template_part('templates/work/services_overview');
            if(get_row_layout() == 'google_maps') get_template_part('templates/work/google_maps');
            if(get_row_layout() == 'content_left_content_right') get_template_part('templates/content_left_content_right');

        }
    }
    ?> 
<?php if($colour == "Blue"){
    get_footer('project'); 
}else{
    get_footer('work'); 
}?> 