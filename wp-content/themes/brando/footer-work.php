<div style="max-width:5700px;" id="brando-container" class="container"><span id="brando">ERG INTERNATIONAL GROUP</span></div>
            <footer id="footer" class="container">
                <!--<a href="#" class="float-right">Instagram</a>-->
            </footer>
        </div><?php //#wrapper ?>
        <?php wp_footer(); ?>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/script.js"></script>

        <script>

            function hrefMove(loc){
                console.log(loc);
                $('.work-template-default').css({"background-image": ''});
                $('.casestudy-template-default').css({"background-image": ''});
                $('.teampage-template-default').css({"background-image": ''});
                $('section').css({"display": "block"});
                $('.newbg').css({"display": "block"});
                $('.toggledisplay').css({"display": "block"});
                $('toggledisplay').css({"display": "block"});
                $('.row').css({"display": "flex"});
                $('.footerbg').css({"display": "block"});
                $('.page-template').css({"background-image": ''});
                /*$('#navfloatx').css({"float": "none"});
                $('#navfloatx').css({"margin-left": "0px"});
                $('#navfloatx').css({"top": "0px"});*/
                $('#navbar-header-toggle').addClass('collapsed');
                $('#navbarTogglerDemo02').removeClass('show');
                location.href = 'https://brando.media/erg/#' + loc;

                $("[href]").each(function() {
                        if (this.href == window.location.href) {
                            $(this).addClass("activenav");
                        }else if($(this).hasClass("activenav")){
                            $(this).removeClass("activenav");
                        }
                    });
            }

            function changeNavCol(){
                
                console.log(window.location.href);
                $("[href]").each(function() {
                        if (this.href == window.location.href) {
                            $(this).addClass("activenav");
                        }else if($(this).hasClass("activenav")){
                            $(this).removeClass("activenav");
                        }
                    });
                    console.log("changenavcol");
            }
               
            function togglemob() {
                console.log("test");
                console.log(window.location.href);
                if($('#navbar-header-toggle').hasClass('collapsed')){
                    if($('#navbarTogglerDemo02').hasClass('navbar-collapse')){
                        console.log("moonman")
                    }

                    console.log("has collapsed");
                    $('.work-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.casestudy-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.teampage-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.single-teampage').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });

                    $('section').css({"display": "none"});
                    //$('.work-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))"});
                    //$('.work-template-default').css({"background-repeat": 'no-repeat'});
                    $('.newbg').css({"display": "none"});
                    $('.toggledisplay').css({"display": "none"});
                    $('toggledisplay').css({"display": "none"});
                    $('.row').css({"display": "none"});
                    $('.footerbg').css({"display": "none"});
                    $('.page-template').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                   /* $('#navfloatx').css({"float": "left"});
                    $('#navfloatx').css({"margin-left": "28px"});
                    $('#navfloatx').css({"top": "-34px"});*/
                    $('#navbarTogglerDemo02').addClass('show');
                    $('#navbar-header-toggle').removeClass('collapsed');


                }else{ 
                    console.log("not collapsed");
                    $('.work-template-default').css({"background-image": ''});
                    $('.casestudy-template-default').css({"background-image": ''});
                    $('.teampage-template-default').css({"background-image": ''});
                    $('section').css({"display": "block"});
                    $('.newbg').css({"display": "block"});
                    $('.toggledisplay').css({"display": "block"});
                    $('toggledisplay').css({"display": "block"});
                    $('.row').css({"display": "flex"});
                    $('.footerbg').css({"display": "block"});
                    $('.page-template').css({"background-image": ''});
                    /*$('#navfloatx').css({"float": "none"});
                    $('#navfloatx').css({"margin-left": "0px"});
                    $('#navfloatx').css({"top": "0px"});*/
                    $('#navbar-header-toggle').addClass('collapsed');
                    $('#navbarTogglerDemo02').removeClass('show');


                }
/*
                if($('.section').css('display') == 'none'){
                    $('.work-template-default').css({"background-image": ''});
                    //$('#testidchange').css({"display": "flex"});
                    //$('.newbg').css({"display": "flex"});

                }else{
                    $('.work-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.work-template-default').css({"background-repeat": 'no-repeat'});
                    $('.casestudy-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                   // $('section').css({"display": "none"});
                    //$('.newbg').css({"display": "none"});
                    //$('#testidchange').css({"display": "none"});

                }
                $('section').toggle();
                //$('.work-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))"});
                //$('.work-template-default').css({"background-repeat": 'no-repeat'});
                $('.newbg').toggle();
                $('a.nav-link').css({"color": "white"});
                $('.footerbg').css({"display": "none"});
                $('.toggledisplay').css({"display": "none!important"});
                $('toggledisplay').css({"display": "none!important"});
                $('.row').toggle(); 
                $('.d-flex').css({"display": "none!important"});
                $('d-flex').css({"display": "none!important"});*/
            }
            

            $(function() {

                $('#casepagechange').on('click', function(){
                    console.log("test");
                    if($('#casestudyfirst').hasClass('displayedcasestudy')){
                        $('#casetextid').html("2/2");
                        //$('#casestudyfirst').css({"display": "none"});
                        $('#casestudyfirst').removeClass('displayedcasestudy');
                        document.getElementById('casestudysecond').style.cssText = 'display: flex !important'
                        document.getElementById('casestudyfirst').style.cssText = 'display: none'
                    }else{
                        $('#casetextid').html("1/2");
                        $('#casestudyfirst').addClass('displayedcasestudy');
                        document.getElementById('casestudyfirst').style.cssText = 'display: flex !important'
                        document.getElementById('casestudysecond').style.cssText = 'display: none'
                        $('#casestudyfirst').addClass('displayedcasestudy');
                    }
                });

                $(window).on('resize', function(){
                    menuMobile();
                })


                function menuMobile(){
                    if($(window).width() <= 991){
                        $("#leftcasestudyindi").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS");
                        $("#rightcasestudyindi").html("NEXT <img src='../../wp-content/themes/brando/assets/images/leftah.png'>");
                        $("#leftinditeam").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS");
                        $("#rightinditeam").html("NEXT <img src='../../wp-content/themes/brando/assets/images/leftah.png'>");
                        $("#leftprojectindi").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS");
                        $("#rightprojectindi").html("NEXT <img src='../../wp-content/themes/brando/assets/images/leftah.png'>");
                        $("#indiblogleft").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS");
                        $("#indiblogright").html("NEXT <img src='../../wp-content/themes/brando/assets/images/leftah.png'>");
                        $('#marginautoindicase').css({"margin-left":"auto"});
                        $('#marginautoindicase').css({"margin-right":"auto"});
                        console.log("gelo");
                    
                    }else{
                        $("#leftcasestudyindi").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS CASE STUDY");
                        $("#rightcasestudyindi").html("NEXT CASE STUDY <img src='../../wp-content/themes/brando/assets/images/leftah.png'> ");
                        $("#leftinditeam").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS TEAM MEMBER");
                        $("#rightinditeam").html("NEXT TEAM MEMBER <img src='../../wp-content/themes/brando/assets/images/leftah.png'> ");
                        $("#rightprojectindi").html("NEXT PROJECT <img src='../../wp-content/themes/brando/assets/images/leftah.png'> ");
                        $("#leftprojectindi").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS PROJECT");
                        $("#indiblogright").html("NEXT BLOG POST <img src='../../wp-content/themes/brando/assets/images/leftah.png'> ");
                        $("#indiblogleft").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS BLOG POST");
                        $('#marginautoindicase').css({"margin-left":"-15px"});
                        $('#marginautoindicase').css({"margin-right":"-15px"});
                        $('#casestudysecond').css({"display": "flex"});
                        $('#casestudysecond').css({"margin": "auto"});
                        if($('#casestudysecond').length > 0){
                            $('#casestudysecond').css({"max-width": "960px"});
                            document.getElementById('casestudyfirst').style.cssText = 'display: flex !important; max-width:960px; margin:auto;'
                        }
                        $('.work-template-default').css({"background-image": ''});
                        $('.casestudy-template-default').css({"background-image": ''});
                        $('.teampage-template-default').css({"background-image": ''});
                        $('section').css({"display": "block"});
                        $('.newbg').css({"display": "block"});
                        $('.toggledisplay').css({"display": "block"});
                        $('toggledisplay').css({"display": "block"});
                        $('.row').css({"display": "flex"});
                        $('.footerbg').css({"display": "block"});
                        $('.page-template').css({"background-image": ''});
                        /*$('#navfloatx').css({"float": "none"});
                        $('#navfloatx').css({"margin-left": "0px"});
                        $('#navfloatx').css({"top": "0px"});*/
                        $('#navbar-header-toggle').addClass('collapsed');
                        $('#navbarTogglerDemo02').removeClass('show');
                            /*$('#casestudysecond').css({"max-width": "960px"});
                            document.getElementById('casestudyfirst').style.cssText = 'display: flex !important; max-width:960px; margin:auto;'*/
                        }
                }
                $(window).on('load', function(){
                    console.log(window.location.href);
                    $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
                    console.log("hello");
                    menuMobile();
                });

                //changetexthere
                $("[href]").each(function() {
                        //console.log(this.href);
                        //console.log(this);
                        if (this.href == window.location.href) {
                            $(this).addClass("activenav");
                            //console.log("hreffound");
                        }
                    });
                    $count=0;
                    $(".ctf-item").each(function() {
                        $(this).addClass("tweetdisplay" . $count);
                        $count++;
                        console.log($count);
                    });
            
                    $('.hoverremoveactive').hover(
                        function(){ $(this).removeClass('activenav') }
                    )

                <?php if(!is_singular('work')): ?>
                    $('#main-menu ul li a').on('click', function (e) {
                        var target = $(this).attr('href');
                        target = target.replace('#', '');
                        target = $("[data-section-name='" + target + "']");
                        var t = $(target).offset().top;
                        $('body,html').animate({ 'scrollTop': t }, 1000);
                        $(this).parent('li').siblings('li').find('a').removeClass('active');
                        $(this).addClass("active");
                        return false;
                    });
                <?php endif; ?>

                var docWidth = document.documentElement.offsetWidth;
                [].forEach.call(
                document.querySelectorAll('*'),
                function(el) {
                    if (el.offsetWidth > docWidth) {
                    console.log(el);
                    }
                }
                );

                var acc = document.getElementsByClassName("accordionproject");
                var i;

                for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("activeproject");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                    } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    } 
                });
                }
             

                $('.show-more-work').on('click', function(){
                    $('.hidden-work').toggleClass('d-none');
                    if($('.hidden-work').is(':visible')){
                        $(this).text('Hide More Work');
                    }else{
                        $(this).text('Show More Work');
                        setTimeout(function(){
                            //$.scrollify.enable();
                        }, 500);
                    }
                  //  $.scrollify.update();
                    return false;
                });
            });

            $(document).ready(function(e){
                var type = window.location.hash.substr(1);
               // $.scrollify.disable();
                console.log(type);


            var coll = document.getElementsByClassName("projects-collapsible");
            console.log(coll);
            var i;

            for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                console.log("test");
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    } 
            });
            }
            });

       
        </script>
    </body>
</html>