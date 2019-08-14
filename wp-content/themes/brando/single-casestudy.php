<?php 
$completed = get_field('what_we_done');
$colour = get_field('header_colour');
if($colour == "Blue"){
    get_header('project'); 
}else{
    get_header('work'); 
}
?>
        <main>
        <?php 
        if(have_rows('content')){
            while(have_rows('content')){
                the_row();
                if(get_row_layout() == 'image') get_template_part('templates/work/image');
                if(get_row_layout() == 'content_with_image') get_template_part('templates/work/content_with_image'); 
                //if(get_row_layout() == 'images') get_template_part('templates/work/images');
                if(get_row_layout() == 'content_with_image_at_top') get_template_part('templates/work/content_with_image_at_top');
                if(get_row_layout() == 'content_left_content_right') get_template_part('templates/work/content_left_content_right');
                if(get_row_layout() == 'imagenobotpadding') get_template_part('templates/work/imagenobotpadding');
                if(get_row_layout() == 'images') get_template_part('templates/casestudy/images');
                if(get_row_layout() == 'content') get_template_part('templates/casestudy/content');
                if(get_row_layout() == 'services') get_template_part('templates/services/services'); 
                if(get_row_layout() == 'contact') get_template_part('templates/services/contact');
                if(get_row_layout() == 'featured_work') get_template_part('templates/services/featured_work'); 
                if(get_row_layout() == 'triplebox') get_template_part('templates/latestnewshome/triplebox');
                if(get_row_layout() == 'project_home') get_template_part('templates/casestudy/projecthome'); 

            }
        }
        
        ?>
            


        

        <div class="section footerbg"  data-section-name="hello" style="min-height:20px;">    
        </div>
    </main>
<?php 
if($colour == "Blue"){
    get_footer('project'); 
}else{
    get_footer('work'); 
} ?>