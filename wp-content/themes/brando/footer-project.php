<div style="max-width:5700px;" id="brando-container-blue" style="top:30%;" class="container"><span id="brando">ERG INTERNATIONAL GROUP</span></div>
            <footer id="footer" class="container">
                <!--<a href="#" class="float-right">Instagram</a>-->
            </footer>
        </div><?php //#wrapper ?>
        <?php wp_footer(); ?>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/script.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/javascript/scrollify.js"></script>

        <script>
            <?php if(!is_singular('work')): ?>
                $(window).on('load', function(){
                    console.log(window.location.href);
                    $.scrollify({
                        section : ".section",
                        before: function(i, el){
                            var nextEl = $(el[i]);
                            var wrapperClass = '';
                            if(nextEl.hasClass('red-bg')){
                                wrapperClass = 'red-default';
                            }
                            else if(nextEl.hasClass('pink-bg')){
                                wrapperClass = 'pink-default';
                            }
                            else if(nextEl.hasClass('blue-bg')){
                                wrapperClass = 'blue-default';
                            }
                            else if(nextEl.hasClass('green-bg')){
                                wrapperClass = 'green-default';
                            }
                            else if(nextEl.hasClass('white-bg')){
                                wrapperClass = 'white-default';
                            }

                            $('#wrapper').removeAttr('class');
                            $('#wrapper').addClass(wrapperClass);
                            $('#main-menu ul li a').removeClass('active');
                        },
                        after: function(i, el){
                            var current = $.scrollify.current();
                            current = $(current).data('section-name');
                            
                            $('#main-menu ul li a[href=#'+current+']').addClass('active');
                        },
                        sectionName : "section-name",
                        overflowScroll: true,
                    });
                    

                });
            <?php endif; ?>
            function togglemob() {
                console.log("tesst");
                if($('#navbar-header-toggle').hasClass('collapsed')){
                    console.log("has collapsed");
                    $('.work-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.page-template').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('.casestudy-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))" });
                    $('section').css({"display": "none"});
                    //$('.work-template-default').css({"background-image": "linear-gradient(to right, rgba(0, 160, 219, 0.8), rgba(0, 73, 144, 0.8))"});
                    //$('.work-template-default').css({"background-repeat": 'no-repeat'});
                    $('.newbg').css({"display": "none"});
                    $('.toggledisplay').css({"display": "none"});
                    $('toggledisplay').css({"display": "none"});
                    $('.row').css({"display": "none"});
                    $('.footerbg').css({"display": "none"});
                    $('#navfloatx').css({"float": "left"});
                    $('#navfloatx').css({"margin-left": "28px"});
                    $('#navfloatx').css({"top": "-34px"});
                    $('#navbarTogglerDemo02').addClass('show');
                    $('#navbar-header-toggle').removeClass('collapsed');
                }else{
                    console.log("not collapsed");
                    $('.work-template-default').css({"background-image": ''});
                    $('.page-template').css({"background-image": ''});
                    $('section').css({"display": "block"});
                    $('.newbg').css({"display": "block"});
                    $('.toggledisplay').css({"display": "block"}); 
                    $('toggledisplay').css({"display": "block"});
                    $('.row').css({"display": "block"});
                    $('.footerbg').css({"display": "block"});
                    $('#navfloatx').css({"float": "none"});
                    $('#navfloatx').css({"margin-left": "0px"});
                    $('#navfloatx').css({"top": "0px"});
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
                        $.scrollify.disable();
                        $(this).text('Show More Work');
                        setTimeout(function(){
                            //$.scrollify.enable();
                        }, 500);
                    }
                    $.scrollify.update();
                    return false;
                });
            });

            $(document).ready(function(e){
                var type = window.location.hash.substr(1);
                $.scrollify.disable();
                console.log(type);

                $(".downarrow").click(function(){
                    $.scrollify.next();
                });

            $(".uparrow").click(function(){
                $.scrollify.move();
            });
                setTimeout(function(){
                    
                    $.scrollify.move("#" + type);
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