<?php
$text        = get_sub_field('form_text');
$address     = get_sub_field('address');
$services     = get_sub_field('services');
$email       = get_sub_field('email');
$phone       = get_sub_field('phone_number');
$title       = get_sub_field('title');
$sectionName = str_replace(' ', '', strtolower($title)); 

?>
<section class=" redbg newbg  ergtextfooter" style="min-height:600px;" data-section-name="hello" id="contact">
    <div class="container global--small align-self-center padleft99110 noml ml0 padleft25 mw100contact" style="padding-top:30px;">
        <div class="row col-lg-10 nopl contactma ">
            
            <div class="col-lg-4" style="margin-top:10px; padding-left:0px;">
            <div class="footerlink-title footermarginb" >Important Links</div>
                <div class="contact-details">
                    <?php foreach($services as $servicerow){ ?>
                        <div class="col-lg-12 contact-font" style="padding-left:0px;padding-bottom:20px;">
                            <a style="color: white; font-weight:600;" href="<?php echo $servicerow['text_url'] ?>"><?php echo $servicerow['text'] ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4" style="margin-top:10px; padding-left:0px;">
            <div class="footerlink-title">Contact us</div>
                <div class="contact-details" style="margin-bottom:10px;">
                    <?php
                    echo $phone ? "<a href='tel:{$phone}' class='contact-us-text'style='color:white!important;'>{$phone}</a>" : '';
                    echo $email ? "<div class='contact-us-text'style='padding-bottom:20px;padding-top:20px;'><a style='color:white;' href='mailto:{$email}'>{$email}</a></div>" : '';
                    echo $address ? "<div class='contact-us-text' style='color:white; padding-bottom:20px;'>{$address}</div>" : '';
                    ?>
                    <div>
                        <a href="https://www.linkedin.com/company/ergiuk/" target="_blank"><img src="wp-content/themes/brando/assets/images/linkedin.png" title="Twitter link" width="30" height="30"></a>
                        <a style="padding-right:15px; display:none;"href="#home"><img src="wp-content/themes/brando/assets/images/twitter.png" title="Twitter link" width="30" height="30"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 contact-form" style="margin-top:10px; padding-left:0px;" >
            <div class="footerlink-title footermarginb">Make an inquiry</div>
                <div style="padding-left:15px;"><?php echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]') ?></div>
            </div>
        </div>
    </div>
    <div class="brandoctext" style="text-align:center; color:white; font-size:12px;">
        © ERG INTERNATIONAL UK LTD 2019
        </div>
        <div class="brandofooterpad brandoctext" style="text-align:center; color:white;font-size:12px;";>
        DEVELOPED BY <a class="brandoalink"href="http://www.brando-media.com/">BRANDO MEDIA</a>
        </div>
</section>
<section class="section footerbg"  data-section-name="hello">
</section>