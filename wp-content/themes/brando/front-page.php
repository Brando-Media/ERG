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
            if(get_row_layout() == 'content_with_image') get_template_part('templates/home/content_with_image');
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
<html><head>
  <meta charset="utf-8">
  <title>Safari Reader test page</title>
 </head>
 <body>
  <div>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis, neque ut aliquet convallis, ligula augue suscipit sapien, eu auctor quam sapien at nulla. In convallis pulvinar augue. Maecenas sit amet pede. Morbi placerat rhoncus leo. Aliquam ullamcorper dui id tellus. Quisque lacinia eros sollicitudin lorem. Sed hendrerit condimentum metus. Cras auctor sapien vitae sapien. Nunc id tellus et nunc tincidunt porttitor. Vestibulum arcu. Sed iaculis nibh vitae arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nulla libero, venenatis vitae, viverra nec, tempor vel, arcu. Maecenas magna metus, luctus quis, hendrerit at, posuere id, enim. Nullam aliquam lobortis velit. Nullam mollis quam eu ipsum cursus porttitor. Etiam vulputate velit eu sapien. Praesent ante felis, congue id, molestie id, molestie nec, leo.</p>
   <p>Quisque leo nisl, aliquet sit amet, pulvinar et, ornare non, nibh. Nullam leo neque, aliquam non, vestibulum vel, condimentum sit amet, nisl. Vivamus urna. Nulla facilisi. Aenean nisi enim, fringilla nec, varius vitae, pretium ac, pede. Proin ac est et nibh rhoncus lobortis. Curabitur viverra blandit mi. Curabitur vel nisl ut libero rhoncus iaculis. Duis interdum varius metus. Duis felis neque, auctor nec, porttitor faucibus, ultricies ac, magna. Nam dolor. Aenean molestie fermentum eros. Ut ipsum. Quisque risus mi, viverra quis, tincidunt at, volutpat ac, risus. Nullam aliquam, dolor a ullamcorper mollis, ante velit ornare tellus, ac posuere arcu tellus vitae velit. Quisque lorem orci, elementum eget, congue id, rhoncus a, augue. Aenean luctus congue orci. Aliquam risus.</p>
   <p>Pellentesque aliquet pulvinar odio. Mauris sed erat. Maecenas ac nisl et dolor dapibus hendrerit. Proin lorem. Donec rhoncus lobortis libero. In id dolor. Nullam vulputate tortor sit amet libero.</p>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis, neque ut aliquet convallis, ligula augue suscipit sapien, eu auctor quam sapien at nulla. In convallis pulvinar augue. Maecenas sit amet pede. Morbi placerat rhoncus leo. Aliquam ullamcorper dui id tellus. Quisque lacinia eros sollicitudin lorem. Sed hendrerit condimentum metus. Cras auctor sapien vitae sapien. Nunc id tellus et nunc tincidunt porttitor. Vestibulum arcu. Sed iaculis nibh vitae arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nulla libero, venenatis vitae, viverra nec, tempor vel, arcu. Maecenas magna metus, luctus quis, hendrerit at, posuere id, enim. Nullam aliquam lobortis velit. Nullam mollis quam eu ipsum cursus porttitor. Etiam vulputate velit eu sapien. Praesent ante felis, congue id, molestie id, molestie nec, leo.</p>
   <p>Quisque leo nisl, aliquet sit amet, pulvinar et, ornare non, nibh. Nullam leo neque, aliquam non, vestibulum vel, condimentum sit amet, nisl. Vivamus urna. Nulla facilisi. Aenean nisi enim, fringilla nec, varius vitae, pretium ac, pede. Proin ac est et nibh rhoncus lobortis. Curabitur viverra blandit mi. Curabitur vel nisl ut libero rhoncus iaculis. Duis interdum varius metus. Duis felis neque, auctor nec, porttitor faucibus, ultricies ac, magna. Nam dolor. Aenean molestie fermentum eros. Ut ipsum. Quisque risus mi, viverra quis, tincidunt at, volutpat ac, risus. Nullam aliquam, dolor a ullamcorper mollis, ante velit ornare tellus, ac posuere arcu tellus vitae velit. Quisque lorem orci, elementum eget, congue id, rhoncus a, augue. Aenean luctus congue orci. Aliquam risus.</p>
   <p>Pellentesque aliquet pulvinar odio. Mauris sed erat. Maecenas ac nisl et dolor dapibus hendrerit. Proin lorem. Donec rhoncus lobortis libero. In id dolor. Nullam vulputate tortor sit amet libero.</p>
  </div>
  <script>
   window.onload = function() {
    /Safari/.test(navigator.userAgent) && console && console.log(document.body.innerText.length + ' characters (including heading and line breaks)');
   };
  </script>
 
<div id="mouseposition-extension-element-full-container" style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; pointer-events: none; z-index: 2147483647; font-weight: 400;"><div id="mouseposition-extension-element-rect-display" style="display: none; position: absolute; background: rgba(255, 255, 255, 0.7); outline: black solid 1px; font-size: 12px; z-index: 2147483647; justify-content: center; align-items: center; user-select: none; cursor: default; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; width: 0px; height: 0px;"><pre style="flex: 1 1 0%; text-align: center; background-color: rgba(255, 255, 255, 0.7); color: rgb(0, 0, 0); min-width: 42px; min-height: 12px; transition: all 1s ease 0s;"></pre></div><pre id="mouseposition-extension-element-coordinate-display" style="position: absolute; display: none; background: rgb(255, 255, 255); font-size: 12px; line-height: 14px; border-radius: 3px; border-width: 1px; border-color: rgb(34, 34, 34) black rgb(51, 51, 51); border-style: solid; padding: 3px; z-index: 2147483647; color: rgb(34, 34, 34); user-select: none; cursor: default; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;"></pre></div></body></html>