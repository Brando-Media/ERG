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
    <html lang="en-GB"><head>
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Brando Media</title>
        <meta name="description" content="">
        
        <link rel="stylesheet" type="text/css" href="http://brando.media/brando/wp-content/themes/brando/style.css" media="screen">
        <link rel="alternate" type="text/xml" title="Brando Media RSS 0.92 Feed" href="http://brando.media/brando/feed/rss/">
        <link rel="alternate" type="application/atom+xml" title="Brando Media Atom Feed" href="http://brando.media/brando/feed/atom/">
        <link rel="alternate" type="application/rss+xml" title="Brando Media RSS 2.0 Feed" href="http://brando.media/brando/feed/">
        <link rel="pingback" href="http://brando.media/brando/xmlrpc.php">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="http://brando.media/brando/wp-content/themes/brando/assets/css/main.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <meta name="robots" content="noindex,follow">
<link rel="dns-prefetch" href="//s.w.org">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/brando.media\/brando\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.2"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="http://brando.media/brando/wp-includes/js/wp-emoji-release.min.js?ver=5.2.2" type="text/javascript" defer=""></script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="stylesheet" id="wp-block-library-css" href="http://brando.media/brando/wp-includes/css/dist/block-library/style.min.css?ver=5.2.2" type="text/css" media="all">
<link rel="stylesheet" id="contact-form-7-css" href="http://brando.media/brando/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.1" type="text/css" media="all">
<script type="text/javascript" src="http://brando.media/brando/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp"></script>
<script type="text/javascript" src="http://brando.media/brando/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
<link rel="https://api.w.org/" href="http://brando.media/brando/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://brando.media/brando/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://brando.media/brando/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.2.2">
<link rel="canonical" href="http://brando.media/brando/">
<link rel="shortlink" href="http://brando.media/brando/">
<link rel="alternate" type="application/json+oembed" href="http://brando.media/brando/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fbrando.media%2Fbrando%2F">
<link rel="alternate" type="text/xml+oembed" href="http://brando.media/brando/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fbrando.media%2Fbrando%2F&amp;format=xml">
 
        <!--[if lt IE 9]> <script src="http://brando.media/brando/wp-content/themes/brando/javascript/html5shiv.js"></script> <![endif]-->
        
    </head>
    <body class="home page-template page-template-front-page page-template-front-page-php page page-id-2 logged-in">
                <div id="wrapper" class="white-default">
            <header id="header">
                <div class="container clearfix">
                    <a href="#home" id="logo" class="float-left">
                        <img class="white-logo" src="http://brando.media/brando/wp-content/themes/brando/assets/images/logo-white.png" alt="Brando Media" title="Brando Media">
                        <img class="red-logo" src="http://brando.media/brando/wp-content/themes/brando/assets/images/logo-red.png" alt="Brando Media" title="Brando Media">
                    </a>
                                            <nav id="main-menu" class="float-right">
                            <ul>
                                                                                                        <li><a href="#about" class="">About</a></li>
                                                                                                        <li><a href="#featuredwork" class="active">Featured Work</a></li>
                                                                                                        <li><a href="#services" class="">Services</a></li>
                                                                                                        <li><a href="#contact" class="">Contact</a></li>
                                                            </ul>
                        </nav>
                                    </div>
            </header>    <section class="section red-bg" data-section-name="home" style="height: 882px;"><div style="margin:auto 0;"><img class="white-logo" style="max-height: 100%;  max-width: 100%; width: auto;height: auto;position: absolute;  top: 0;  bottom: 0;  left: 0;  right: 0;  margin: auto;" src="http://brando.media/brando/wp-content/themes/brando/assets/images/home.gif" alt="Brando Media" title="Brando Media"><div></div></div></section>
    <section class="section pink-bg d-flex" data-section-name="about" style="height: 882px;">
    <div class="container container--small align-self-center">
        <h2 class="main-title">About</h2>
        <div class="row">
            <div class="col-lg-5">
                <p>Brando Media was established by two industry professionals with over twenty years of experience bringing together the best in design and project management to create a media powerhouse.Founded in 2010, we have worked with a huge range of clients from Start-ups to SMEs and government organisations around the world. We have built a reputation on providing a high quality product consistently and efficiently.Made up of a small but brilliant team of individuals from all different backgrounds, we are passionate about what we do. What makes us different is that we bring a personal touch, which you will quickly see if you become a client of ours.Working out of our studio space in the heart of London, we deliver only the best quality of work while always continually learning to take on the ever changing landscape of our industry.</p>
            </div>
        </div>
    </div>
</section>
<section id="featuredworks" class="section white-bg d-flex" data-section-name="featuredwork" style="height: 1580px;">
    <div class="container container--small the-featured-work">
        <h2 class="main-title">Featured Work</h2>
                    <div class="row">
                                                        <div class="col-lg-6 work-item ">
                        <div class="work-item-block">
                            <a id="1" href="http://brando.media/brando/work/nathalie-mayfair/">
                                                                    <img class="img-fluid w-100" src="http://brando.media/brando/wp-content/uploads/2019/05/NathalieMayfair-tile-image.jpg">
                                                                <h5>Nathalie Mayfair / <span>Branding, Packaging Design, Website Design &amp; Development, App Design &amp; Development</span></h5>
                            </a>
                        </div>
                    </div>
                                                        <div class="col-lg-6 work-item ">
                        <div class="work-item-block">
                            <a id="2" href="http://brando.media/brando/work/nails-london/">
                                                                    <img class="img-fluid w-100" src="http://brando.media/brando/wp-content/uploads/2019/05/Nailsand-tile-image.png">
                                                                <h5>Nails&amp; London / <span>Branding, Packaging Design, Website Design &amp; Development, Logo Design, Photography &amp; Illustration, Booking System</span></h5>
                            </a>
                        </div>
                    </div>
                                                        <div class="col-lg-6 work-item ">
                        <div class="work-item-block">
                            <a id="3" href="http://brando.media/brando/work/presscription/">
                                                                    <img class="img-fluid w-100" src="http://brando.media/brando/wp-content/uploads/2019/05/Presscription-title-image.png">
                                                                <h5>Presscription / <span>Website Design &amp; Development, eCommerce Website, Illustration</span></h5>
                            </a>
                        </div>
                    </div>
                                                        <div class="col-lg-6 work-item ">
                        <div class="work-item-block">
                            <a id="4" href="http://brando.media/brando/work/miniluxe/">
                                                                    <img class="img-fluid w-100" src="http://brando.media/brando/wp-content/uploads/2019/05/MiniLuxe-tile-image.png">
                                                                <h5>Miniluxe / <span>Website Design &amp; Development, Booking System</span></h5>
                            </a>
                        </div>
                    </div>
                                                        <div class="col-lg-6 work-item d-none hidden-work">
                        <div class="work-item-block">
                            <a id="5" href="http://brando.media/brando/work/bxr/">
                                                                    <img class="img-fluid w-100" src="http://brando.media/brando/wp-content/uploads/2019/05/BXR-tile-image.png">
                                                                <h5>BXR / <span>App Design &amp; Development, Website Maintenance</span></h5>
                            </a>
                        </div>
                    </div>
                                                        <div class="col-lg-6 work-item d-none hidden-work">
                        <div class="work-item-block">
                            <a id="6" href="http://brando.media/brando/work/diary/">
                                                                    <img class="img-fluid w-100" src="http://brando.media/brando/wp-content/uploads/2019/05/Diary-tile-image.jpg">
                                                                <h5>Diary / <span>Website Maintenance, Database Conversion</span></h5>
                            </a>
                        </div>
                    </div>
                                                        <div class="col-lg-6 work-item d-none hidden-work">
                        <div class="work-item-block">
                            <a id="7" href="http://brando.media/brando/work/rachel/">
                                                                    <img class="img-fluid w-100" src="http://brando.media/brando/wp-content/uploads/2019/05/Rachel-tile-image.png">
                                                                <h5>Rachel / <span>eCommerce Website, Website design &amp; build</span></h5>
                            </a>
                        </div>
                    </div>
                                                        <div class="col-lg-6 work-item d-none hidden-work">
                        <div class="work-item-block">
                            <a id="8" href="http://brando.media/brando/work/uk-jff/">
                                                                    <img class="img-fluid w-100" src="http://brando.media/brando/wp-content/uploads/2019/05/UKJF-tile-image.png">
                                                                <h5>UK JFF / <span>Website Design &amp; Development</span></h5>
                            </a>
                        </div>
                    </div>
                                <div style="height:40px; z-index:100;">
                <section id="buttonsection" class="section white-bg" data-section-name="show-more-work" style="z-index: 1; height: 100px;">
                <div class="col-lg-12 show-btn-block" style="height:40px; margin-top:0px;">
                    <a id="brandoele" href="#featuredworks" class="btn-block show-more-work" onclick="goToAnchor('4')">Show More work</a>
                </div>
                <!--</section>-->
                </section></div>
            </div>
            </div>
</section>

<script>

window.addEventListener("scroll", function(e) {
    document.getElementById('buttonsection').style.height = "100px";
});

function goToAnchor(anchor) {
    console.log("test");
  var loc = document.location.toString().split('#')[0];
  document.location = loc + '#' + anchor;
  var element = document.getElementById("buttonsection");
  if(element.classList.contains("section")){
           element.classList.remove("section");
    }else{
        element.classList.add("section");
    }
  return false;
}
    window.addEventListener("scroll", function(e) {
        $(function() {
            var titlename = $.scrollify.current();
            var type = window.location.hash.substr(1);
            if(type == 'featuredwork'){

            }   
        });
    });

    window.addEventListener('wheel', function(e) {
        (function($){
            if (e.deltaY < 0) {
                var type = window.location.hash.substr(1);
                if(type == 'show-more-work'){
                    //$.scrollify.move("#featuredwork");
                }
                if(type == 'services'){
                    //$.scrollify.move("#featuredwork");
                   // console.log('test');
                }
                if($.scrollify.isDisabled()){
                   // console.log('wdh');
                }
            }
            if (e.deltaY > 0) {

            }
        })(jQuery);
    });

    
</script><section class="section blue-bg d-flex" data-section-name="services" style="height: 1650px;">
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
</section><section class="section green-bg d-flex" data-section-name="contact" style="height: 882px;">
    <div class="container container--small align-self-center">
        <h2 class="main-title">Contact</h2>
        <div class="row">
            <div class="col-lg-6 contact-form">
                <p>Drop us a line if you want to chat about how we can help your business!</p>                <div role="form" class="wpcf7" id="wpcf7-f11-o1" lang="en-GB" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/brando/#wpcf7-f11-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="11">
<input type="hidden" name="_wpcf7_version" value="5.1.1">
<input type="hidden" name="_wpcf7_locale" value="en_GB">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f11-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
<input type="hidden" name="g-recaptcha-response" value="">
</div>
<div class="row">
<div class="col-lg-6 form-group">
        <span class="wpcf7-form-control-wrap fullname"><input type="text" name="fullname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Your name"></span>
    </div>
<div class="col-lg-6 form-group">
        <span class="wpcf7-form-control-wrap emailaddress"><input type="email" name="emailaddress" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Your email"></span>
    </div>
<div class="col-lg-12 form-group">
        <span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>
    </div>
<div class="col-lg-12 text-right position-relative">
        <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit btn btn-primary"><span class="ajax-loader"></span>
    </div>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>            </div>
            <div class="col-lg-6">
                <div class="contact-details">
                    <p>Brando Media<br>
79a York Street Marylebone<br>
London W1H 1QQ</p><p><a href="mailto:contact@brando-media.com">contact@brando-media.com</a></p><p>+44 (0)203 700 1373</p>                </div>
            </div>
        </div>
    </div>
</section>            <div id="brando-container" class="container"><span id="brando">Brando Media</span></div>
            <footer id="footer" class="container">
                <a href="#" class="float-right">Instagram</a>
            </footer>
        </div>        <script type="text/javascript">
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/brando.media\/brando\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type="text/javascript" src="http://brando.media/brando/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.1"></script>
<script type="text/javascript" src="http://brando.media/brando/wp-includes/js/wp-embed.min.js?ver=5.2.2"></script>
        <script src="http://brando.media/brando/wp-content/themes/brando/javascript/script.js"></script>
        <script src="http://brando.media/brando/wp-content/themes/brando/javascript/scrollify.js"></script>

<div id="mouseposition-extension-element-full-container" style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; pointer-events: none; z-index: 2147483647; font-weight: 400;"><div id="mouseposition-extension-element-rect-display" style="display: none; position: absolute; background: rgba(255, 255, 255, 0.7); outline: black solid 1px; font-size: 12px; z-index: 2147483647; justify-content: center; align-items: center; user-select: none; cursor: default; color: rgb(0, 0, 0); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; width: 0px; height: 0px;"><pre style="flex: 1 1 0%; text-align: center; background-color: rgba(255, 255, 255, 0.7); color: rgb(0, 0, 0); min-width: 42px; min-height: 12px; transition: all 1s ease 0s;"></pre></div><pre id="mouseposition-extension-element-coordinate-display" style="position: absolute; display: none; background: rgb(255, 255, 255); font-size: 12px; line-height: 14px; border-radius: 3px; border-width: 1px; border-color: rgb(34, 34, 34) black rgb(51, 51, 51); border-style: solid; padding: 3px; z-index: 2147483647; color: rgb(34, 34, 34); user-select: none; cursor: default; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;"></pre></div></body></html>
<?php if($colour == "Blue"){
    get_footer('project'); 
}else{
    get_footer('work'); 
}?> 