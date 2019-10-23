<?php 
/*
Template Name: Front Page
*/
$colour = get_field('header_colour');
$title = get_field('title');
if($colour == "Blue"){ 
    get_header(); 
}else{
    get_header(); 

} 
?>
<?php add_revslider('slider-1','homepage'); ?>
<?php do_shortcode('[rev_slider alias="slider-1"][/rev_slider]') ?>
    <main class="mainstyle">
    <section class="section  background-image-home arrowhover" data-section-name="homes" style="max-height:750px; min-height:750px; position:relative; scroll-behavior: smooth;">
    <div class="background-layer-home padright20 padleft25">
    <h1><div class="frontpagetitle nopad992" style="
    /* right: 40%; */
    /* margin-left: 10%; */
    left: 200px;
    top: 300px; max-width:750px;">
     <?php echo $title ?></div></h1>

    </div>  

    </section> 
     
    <?php  
    if(have_rows('content')){
        while(have_rows('content')){
            the_row();
            if(get_row_layout() == 'content') get_template_part('templates/content');
            if(get_row_layout() == 'services') get_template_part('templates/services');
            if(get_row_layout() == 'contact') get_template_part('templates/contact');
            if(get_row_layout() == 'featured_work') get_template_part('templates/featured_work');
            if(get_row_layout() == 'content_with_image') get_template_part('templates/home/content_with_image');
            if(get_row_layout() == 'case_study_hover') get_template_part('templates/work/case_study_hover');
            if(get_row_layout() == 'services_overview') get_template_part('templates/work/services_overview');
            if(get_row_layout() == 'google_maps') get_template_part('templates/work/google_maps');
            if(get_row_layout() == 'content_left_content_right') get_template_part('templates/content_left_content_right');

         }
    }
    ?> 
    </main>

    <script>

    $('a').click(function(){
        $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 500);
            return false;
    });
        </script>

<?php if($colour == "Blue"){
    get_footer('project'); 
}else{
    get_footer('work'); 
}?> 