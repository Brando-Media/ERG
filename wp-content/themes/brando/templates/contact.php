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
    <div class="container container--small align-self-center" style="padding-top:30px;">
        <div class="row col-lg-10" style="margin:auto;">
            
            <div class="col-lg-4" style="margin-top:10px;">
            <div class="footerlink-title" style="margin-bottom:14px;">Important Links</div>
                <div class="contact-details">
                    <?php foreach($services as $servicerow){ ?>
                        <div class="col-lg-12" style="padding-left:0px;padding-bottom:15px;">
                            <a style="color: white; font-weight:400;" href="<?php $servicerow['text_url'] ?>"><?php echo $servicerow['text'] ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4" style="margin-top:10px;">
            <div class="footerlink-title">Contact us</div>
                <div class="contact-details" style="margin-bottom:10px;">
                    <?php
                    echo $phone ? "<div class='contact-us-text'style='color:white; padding-bottom:15px;'>{$phone}</div>" : '';
                    echo $email ? "<div class='contact-us-text'style='padding-bottom:15px'><a style='color:white;' href='mailto:{$email}'>{$email}</a></div>" : '';
                    echo $address ? "<div class='contact-us-text' style='color:white; padding-bottom:15px;'>{$address}</div>" : '';
                    ?>
                    <div>
                        <a style="padding-right:15px;"href="#home"><img src="wp-content/themes/brando/assets/images/twitter.png" title="Twitter link" width="30" height="30"></a>
                        <a href="#home"><img src="wp-content/themes/brando/assets/images/linkedin.png" title="Twitter link" width="30" height="30"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 contact-form" style="margin-top:10px;">
            <div style="margin-bottom:15px;"class="footerlink-title">Make an enquiry</div>
                <div style="padding-left:15px;"><?php echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]') ?></div>
            </div>
        </div>
    </div>
</section>
<section class="section footerbg"  data-section-name="hello">
</section>