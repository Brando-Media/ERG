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
    <article>
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
    </article>
    <section class="section blue-bg d-flex" data-section-name="services" style="height: 1650px;">
    <div class="container container--small align-self-center">
        <h2 class="main-title">Services</h2>
                    <div class="row">
                                                        <div class="col-lg-5 list-service ">
                        <h3><a href="http://brando.media/brando/services/consultancy">Consultancy</a></h3>
                        <p>Our consultancy services are available for existing and new clients. We have years of experience in assisting clients on their unique brand offering to unsure they remain current within their specific industry. We help develop businesses to attract new audiences as well as remaining loyal to their brand ethos and existing customer database.</p>
                    </div>
                                                        <div class="col-lg-5 list-service ml-auto">
                        <h3><a href="http://brando.media/brando/services/branding">Branding</a></h3>
                        <p>Your logo and brand identity is the essence of your company. It is important to make a great first impression with a clean, succinct design that your customers and potential new clients can immediately identify with. We undertake a thorougher brand development process to asses both your business and target audiences to create a beautiful brand identity that encompasses your specific ideas and values.</p>
                    </div>
                                                        <div class="col-lg-5 list-service ">
                        <h3><a href="http://brando.media/brando/services/website-design-build">Web design &amp; development</a></h3>
                        <p>The portal in which you showcase your brand and offering to your customers. We deliver layouts that are easy to navigate, are fully responsive for mobile and allow you to update in-house simply and effectively. If you can search the internet and type a document, you can maintain your own site. While we are available for on-going maintenance, our CMS site packages provide a solution which you only need to pay for once. You take the wheel after delivery.</p>
                    </div>
                                                        <div class="col-lg-5 list-service ml-auto">
                        <h3>App design &amp; build</h3>
                        <p>Apps are the most wanted business asset in the tech world. We love building Apps for both iOS and Android devices that can help reach a whole new tier of customers and further enhance your service offering within your space. We bring the same care in design and planning to our Apps as we do to our websites so you can expect a fully integrated experience to ensure continuity across your products.</p>
                    </div>
                                                        <div class="col-lg-5 list-service ">
                        <h3>Marketing</h3>
                        <p>We enjoy implementing marketing campaigns that deliver real results! Showing up on the first page of popular search engines is important, and we can help make this happen. Creating consistent and cohesive content for social media is another important part of any brand marketing  in 2019. We understand that social feeds are increasingly becoming the gateway to directly engage with your audience. Having consistency across all platforms further enhances your credibility and brand presence. SEO is a great tool in which we help our clients remain relevant within their industry. </p>
                    </div>
                                                        <div class="col-lg-5 list-service ml-auto">
                        <h3>Illustration &amp; photography</h3>
                        <p>Imagery is a key aspect of any successful brand. Developing a unique visual style enhances brand recognition and creates yet another dimension to your identity. We have in-house illustrators and photographers who work closely with our clients to develop a specific style to roll out across all print and digital platforms.</p>
                    </div>
                            </div>
            </div>
</section>
<?php if($colour == "Blue"){
    get_footer('project'); 
}else{
    get_footer('work'); 
}?> 