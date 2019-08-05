<?php
$text        = get_sub_field('form_text');
$address     = get_sub_field('address');
$services     = get_sub_field('services');
$email       = get_sub_field('email');
$phone       = get_sub_field('phone_number');
$title       = get_sub_field('title');
$sectionName = str_replace(' ', '', strtolower($title)); 

?>
<section class="section redbg newbg  ergtextfooter" style="" data-section-name="hello" id="contact">
    <div class="container container--small align-self-center">
        <div class="row">
            
            <div class="col-lg-4" style="margin-bottom:10px;">
            <h3 class="main-title" style="font-size:1.75rem; color:white; margin-bottom:0px;">Important Links</h3>
                <div class="contact-details">
                    <?php foreach($services as $servicerow){ ?>
                        <div class="col-lg-12" style="padding-left:0px;">
                            <a style="color: white;" href="<?php $servicerow['text_url'] ?>" target="_blank"><?php echo $servicerow['text'] ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4" style="margin-top:10px;">
            <h3 class="main-title" style="font-size:1.75rem; color:white;">Contact us</h3>
                <div class="contact-details" style="margin-bottom:10px;">
                    <?php
                    echo $phone ? "<div style='color:white'>{$phone}</div>" : '';
                    echo $email ? "<div><a style='color:white;' href='mailto:{$email}'>{$email}</a></div>" : '';
                    echo $address ? "<div style='color:white'>{$address}</div>" : '';
                    ?>
                </div>
            </div>
            <div class="col-lg-4 contact-form" style="margin-top:10px;">
            <h3 class="main-title" style="font-size:1.75rem; color:white;">Make an enquiry</h3>
                <?php echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]') ?>
            </div>
        </div>
    </div>
</section>
<section class="section footerbg"  data-section-name="hello">
</section>