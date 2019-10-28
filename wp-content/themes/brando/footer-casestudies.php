<div style="max-width:5700px;" id="brando-container" class="container"><a  href="#top"><span class="scrollererg casestudiesfooter" style="text-shadow: 0 0 3px #000000, 0 0 0!important; position:absolute; top: 120px;" id="brando-red">ERG INTERNATIONAL GROUP</span></a></div> 
            <footer id="footer" class="container">
                <!--<a href="#" class="float-right">Instagram</a>-->
            </footer>
        </div><?php //#wrapper ?>
        <?php wp_footer(); ?>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/script.js"></script>

        <script>
            <?php if(!is_singular('work')): ?>
                $(window).on('load', function(){
                    console.log(window.location.href);

                    

                });
            <?php endif; ?>
            function togglemob() {
                console.log("tesst");
                if($('#navbar-header-toggle').hasClass('collapsed')){
                    console.log("has collapsed");
                    $("#blueerglogo").attr("src","/erg/wp-content/themes/brando/assets/images/ERG-logo.png");
                    $('.work-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.latestblog-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.page-template').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.casestudy-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.teampage-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.allstudy-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.project-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });


                    $('section').css({"display": "none"});
                    //$('.work-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))"});
                    //$('.work-template-default').css({"background-repeat": 'no-repeat'});
                    $('.newbg').css({"display": "none"});
                    $('.toggledisplay').css({"display": "none"});
                    $('toggledisplay').css({"display": "none"});
                    $('.bluenav').css({"color": "white"});
                    $('#blueiconclass').removeClass('icon-blue');
                    $('.row').css({"display": "none"});
                    $('.footerbg').css({"display": "none"});
                    $('#navbarTogglerDemo02').addClass('show');
                    $('#navbar-header-toggle').removeClass('collapsed')
                }else{
                    $("#blueerglogo").attr("src","/erg/wp-content/themes/brando/assets/images/ergblue200.png");

                    console.log("not collapsed");
                    $('.work-template-default').css({"background-image": ''});
                    $('.allstudy-template-default').css({"background-image": ''});
                    $('.page-template').css({"background-image": ''});
                    $('.teampage-template-default').css({"background-image": ''});
                    $('.project-template-default').css({"background-image": ''});
                    $('.latestblog-template-default').css({"background-image": ''});
                    $('section').css({"display": "block"});
                    $('.newbg').css({"display": "block"});
                    $('.toggledisplay').css({"display": "block"}); 
                    $('toggledisplay').css({"display": "block"});
                    $('.row').css({"display": "flex"});
                    $('.bluenav').css({"color": "#00498D"});
                    $('#blueiconclass').addClass('icon-blue');
                    $('.footerbg').css({"display": "block"});
                    $('#navbar-header-toggle').addClass('collapsed');
                    $('#navbarTogglerDemo02').removeClass('show');
                    $('.casestudy-template-default').css({"background-image": ''});

                }
                /*if($('.section').css('display') == 'none'){ 
                    $('.work-template-default').css({"background-image": ''});
                    $('.page-template').css({"background-image": ''});
                }else{
                    $("#ul-menu").css("display", "grid");
                    $('.work-template-default').css({"background-image": 'url(' + "http://erg.loc:8888/wp-content/uploads/2019/07/servicesoverviewbg.png" + ')'});
                    $('.page-template').css({"background-image": 'url(' + "http://erg.loc:8888/wp-content/uploads/2019/07/servicesoverviewbg.png" + ')'});
                }

                //$('section').toggle();
                $('section').toggle();
                $('.newbg').toggle();
                $('.footerbg').css({"display": "none"});
                $('.toggledisplay').css({"display": "none!important"});
                $('toggledisplay').css({"display": "none!important"});
                $('.row').toggle();
                $('.d-flex').css({"display": "none!important"});
                $('d-flex').css({"display": "none!important"});*/
                /*if($('.work-template-default').css('background-image') != 'none'){
                    $('.work-template-default').css({"background-image": 'url(' + "http://erg.loc:8888/wp-content/uploads/2019/07/servicesoverviewbg.png" + ')'});
                }else{
                    $('.work-template-default').css({"background-image": 'none'});
                }*/
            }

            $(function() {
                $('#casepagechange').on('click', function(){
                    console.log("test");
                    if($('#casestudyfirst').hasClass('displayedcasestudy')){
                        $('#casetextid').html("2/2");
                        //$('#casestudyfirst').css({"display": "none"});
                        $('#casestudysecond').css({"display": "flex"});
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
                       /* $("#leftcasestudyindi").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS");
                        $("#rightcasestudyindi").html("NEXT <img src='../../wp-content/themes/brando/assets/images/leftah.png'>");
                        $("#leftinditeam").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS");
                        $("#rightinditeam").html("NEXT <img src='../../wp-content/themes/brando/assets/images/leftah.png'>");
                        $("#leftprojectindi").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS");
                        $("#rightprojectindi").html("NEXT <img src='../../wp-content/themes/brando/assets/images/leftah.png'>");
                        $("#indiblogleft").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS");
                        $("#indiblogright").html("NEXT <img src='../../wp-content/themes/brando/assets/images/leftah.png'>");*/
                        $('#marginautoindicase').css({"margin-left":"auto"});
                        $('#marginautoindicase').css({"margin-right":"auto"});
                        console.log("gelo");
                    
                    }else{
                        /*$("#leftcasestudyindi").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS CASE STUDY");
                        $("#rightcasestudyindi").html("NEXT CASE STUDY <img src='../../wp-content/themes/brando/assets/images/leftah.png'> ");
                        $("#leftinditeam").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS TEAM MEMBER");
                        $("#rightinditeam").html("NEXT TEAM MEMBER <img src='../../wp-content/themes/brando/assets/images/leftah.png'> ");
                        $("#rightprojectindi").html("NEXT PROJECT <img src='../../wp-content/themes/brando/assets/images/leftah.png'> ");
                        $("#leftprojectindi").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS PROJECT");
                        $("#indiblogright").html("NEXT BLOG POST <img src='../../wp-content/themes/brando/assets/images/leftah.png'> ");
                        $("#indiblogleft").html("<img src='../../wp-content/themes/brando/assets/images/rightah.png'> PREVIOUS BLOG POST");*/
                        $('#marginautoindicase').css({"margin-left":"-15px"});
                        $('#marginautoindicase').css({"margin-right":"-15px"});
                        $('.work-template-default').css({"background-image": ''});
                        $("#blueerglogo").attr("src","/erg/wp-content/themes/brando/assets/images/ergblue200.png");

                        console.log("not collapsed");
                        $('.work-template-default').css({"background-image": ''});
                        $('.allstudy-template-default').css({"background-image": ''});
                        $('.page-template').css({"background-image": ''});
                        $('.teampage-template-default').css({"background-image": ''});
                        $('.project-template-default').css({"background-image": ''});
                        $('.latestblog-template-default').css({"background-image": ''});
                        $('section').css({"display": "block"});
                        $('.newbg').css({"display": "block"});
                        $('.toggledisplay').css({"display": "block"}); 
                        $('toggledisplay').css({"display": "block"});
                        $('.row').css({"display": "flex"});
                        $('.bluenav').css({"color": "#00498D"});
                        $('#blueiconclass').addClass('icon-blue');
                        $('.footerbg').css({"display": "block"});
                        $('#navbar-header-toggle').addClass('collapsed');
                        $('#navbarTogglerDemo02').removeClass('show');
                        $('.casestudy-template-default').css({"background-image": ''});
                    }
                }
                $(window).on('load', function(){
                    console.log(window.location.href);
                    $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
                    console.log("hello");
                    menuMobile();
                });


                $("[href]").each(function() {
                        //console.log(this.href);
                        //console.log(this);
                        if (this.href == window.location.href) {
                            $(this).addClass("activenavwhite");
                            //console.log("hreffound");
                        }
                    });
                    $count=0;
                    $(".ctf-item").each(function() {
                        $(this).addClass("tweetdisplay" + $count);
                        $count++;
                        console.log($count);
                    });
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

            

                $('.show-more-work').on('click', function(){
                    $('.hidden-work').toggleClass('d-none');
                    if($('.hidden-work').is(':visible')){
                        $(this).text('Hide More Work');
                    }else{
                        //$.scrollify.disable();
                        $(this).text('Show More Work');
                        setTimeout(function(){
                            //$.scrollify.enable();
                        }, 500);
                    }
                   // $.scrollify.update();
                    return false;
                });
            });

            $(document).ready(function(e){
                var type = window.location.hash.substr(1);
                //$.scrollify.disable();
                console.log(type);

                $(".downarrow").click(function(){
                    //$.scrollify.next();
                });

            $(".uparrow").click(function(){
                //$.scrollify.move();
            });
                setTimeout(function(){
                    
                   // $.scrollify.move("#" + type);
                }, 200);

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

        //so code to disable scrollify on pages too big
        /*    (function($){
            'use strict';
            var $section = $('.js-section');
            var $pager = $('#js-pager');
            var option = {
            section : '.js-section',
            sectionName:false,
            easing: "swing",
            scrollSpeed: 1500,
            scrollbars: true,
            overflowscroll: true,
            interstitialSection: ".header",
            before:function(index) {
                pagerCurrent(index);
            },
            afterRender:function() {
                createPager();
            }
            };

    $(document).ready(function(e){
        var type = window.location.hash.substr(1);
        $.scrollify.disable();
        console.log(type);
        $.scrollify(option);

        $(".downarrow").click(function(){
            $.scrollify.next();
        });

      $(".uparrow").click(function(){
        $.scrollify.move();
      });
        setTimeout(function(){
            $.scrollify.enable();
            $.scrollify.move("#" + type);
        }, 200);
    });

    function pagerCurrent(index = 0) {
      var $li = $pager.find('li');
      $li.removeClass('is-current');
      $li.eq(index).addClass('is-current');
    }

    function createPager() {
        $section.each(function(i, e){
            var sectionName = $(e).attr('data-section-name');
            var addClass = '';
            if (i === 0) {
                addClass = 'is-current';
            }
            var html = '';
            html += '<li class="' + addClass + '">';
            html += '<a href="#' + sectionName + '"></a>';
            html += '</li>';
            $pager.append(html);
        });
        pagerLink();
    }

    function pagerLink () {
      $pager.find('a').on('click', function() {
        $.scrollify.move($(this).attr("href"));
      });
    }

    
}(jQuery));*/
       
        </script>
    </body>
</html>