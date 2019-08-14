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
    <main>
<h1>Your title<h1>
<div>Your subtitle</div>
<div class="byline">
By <a href="/">Your Name</a> -- 
<time datetime="2018-04-06T05:52:50Z">April 6, 2018</time>
</div>
<p> article content...Brando Media was established by two industry professionals with over twenty years of experience bringing together the best in design and project management to create a media powerhouse.Founded in 2010, we have worked with a huge range of clients from Start-ups to SMEs and government organisations around the world. We have built a reputation on providing a high quality product consistently and efficiently.Made up of a small but brilliant team of individuals from all different backgrounds, we are passionate about what we do. What makes us different is that we bring a personal touch, which you will quickly see if you become a client of ours.Working out of our studio space in the heart of London, we deliver only the best quality of work while always continually learning to take on the ever changing landscape of our industry.Brando Media was established by two industry professionals with over twenty years of experience bringing together the best in design and project management to create a media powerhouse.Founded in 2010, we have worked with a huge range of clients from Start-ups to SMEs and government organisations around the world. We have built a reputation on providing a high quality product consistently and efficiently.Made up of a small but brilliant team of individuals from all different backgrounds, we are passionate about what we do. What makes us different is that we bring a personal touch, which you will quickly see if you become a client of ours.Working out of our studio space in the heart of London, we deliver only the best quality of work while always continually learning to take on the ever changing landscape of our industry. </p>
<p> article content...Brando Media was established by two industry professionals with over twenty years of experience bringing together the best in design and project management to create a media powerhouse.Founded in 2010, we have worked with a huge range of clients from Start-ups to SMEs and government organisations around the world. We have built a reputation on providing a high quality product consistently and efficiently.Made up of a small but brilliant team of individuals from all different backgrounds, we are passionate about what we do. What makes us different is that we bring a personal touch, which you will quickly see if you become a client of ours.Working out of our studio space in the heart of London, we deliver only the best quality of work while always continually learning to take on the ever changing landscape of our industry.Brando Media was established by two industry professionals with over twenty years of experience bringing together the best in design and project management to create a media powerhouse.Founded in 2010, we have worked with a huge range of clients from Start-ups to SMEs and government organisations around the world. We have built a reputation on providing a high quality product consistently and efficiently.Made up of a small but brilliant team of individuals from all different backgrounds, we are passionate about what we do. What makes us different is that we bring a personal touch, which you will quickly see if you become a client of ours.Working out of our studio space in the heart of London, we deliver only the best quality of work while always continually learning to take on the ever changing landscape of our industry. </p>
</main>
<?php if($colour == "Blue"){
    get_footer('project'); 
}else{
    get_footer('work'); 
}?> 