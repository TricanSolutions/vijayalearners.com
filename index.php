<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

    <!-- Mirrored from theme.stepofweb.com/Atropos/v1.7/HTML/revolution-half-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2016 13:57:23 GMT -->
    <head>
        <meta charset="utf-8" />
        <?php
        include './common/systemHeader.php';
        ?>
        <meta name="keywords" content="HTML5,CSS3,Template" />
        <meta name="description" content="" />
        <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

        <!-- WEB FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/superslides.css" rel="stylesheet" type="text/css" />

        <!-- REVOLUTION SLIDER -->
        <link href="assets/plugins/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/layout-responsive.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/color_scheme/orange.css" rel="stylesheet" type="text/css" /><!-- orange: default style -->
        <!--<link id="css_dark_skin" href="assets/css/layout-dark.css" rel="stylesheet" type="text/css" />--><!-- DARK SKIN -->

        <!-- styleswitcher - demo only -->
        <link href="assets/css/color_scheme/orange.css" rel="alternate stylesheet" type="text/css" title="orange" />
        <link href="assets/css/color_scheme/red.css" rel="alternate stylesheet" type="text/css" title="red" />
        <link href="assets/css/color_scheme/pink.css" rel="alternate stylesheet" type="text/css" title="pink" />
        <link href="assets/css/color_scheme/yellow.css" rel="alternate stylesheet" type="text/css" title="yellow" />
        <link href="assets/css/color_scheme/darkgreen.css" rel="alternate stylesheet" type="text/css" title="darkgreen" />
        <link href="assets/css/color_scheme/green.css" rel="alternate stylesheet" type="text/css" title="green" />
        <link href="assets/css/color_scheme/darkblue.css" rel="alternate stylesheet" type="text/css" title="darkblue" />
        <link href="assets/css/color_scheme/blue.css" rel="alternate stylesheet" type="text/css" title="blue" />
        <link href="assets/css/color_scheme/brown.css" rel="alternate stylesheet" type="text/css" title="brown" />
        <link href="assets/css/color_scheme/lightgrey.css" rel="alternate stylesheet" type="text/css" title="lightgrey" />
        <!-- /styleswitcher - demo only -->



        <!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->
        <link href="assets/plugins/styleswitcher/styleswitcher.css" rel="stylesheet" type="text/css" />		

        <!-- Morenizr -->
        <script type="text/javascript" src="assets/plugins/modernizr.min.js"></script>
    </head>
    <body><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->

        <header id="topHead">
            <?php
            include './common/topBar.php';
            ?>
        </header>
        <!-- /Top Bar -->

        <!-- TOP NAV -->
        <header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Logo text or image -->
                <a class="logo" href="index.php">
<!--                    <img src="assets/images/logonew.png" alt="Atropos" />-->
                </a>

                <!-- Top Nav -->
                <?php
                include './common/navBar.php';
                ?>
                <!-- /Top Nav -->

            </div>
        </header>

        <span id="header_shadow"></span>
        <!-- /TOP NAV -->



        <!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->
        <!--        <div id="switcher">
                    <div class="content-switcher" >        
                        <h4>STYLE OPTIONS</h4>
        
                        <p>10 Predefined Color Schemes</p>
                        <ul>            
                            <li><a href="#" onclick="setActiveStyleSheet('orange');
                                    return false;" title="orange" class="color"><img src="assets/images/demo/color_schemes/1.png" alt="" width="30" height="30" /></a></li>
                            <li><a href="#" onclick="setActiveStyleSheet('red');
                                    return false;" title="red" class="color"><img src="assets/images/demo/color_schemes/2.png" alt="" width="30" height="30" /></a></li>
                            <li><a href="#" onclick="setActiveStyleSheet('pink');
                                    return false;" title="pink" class="color"><img src="assets/images/demo/color_schemes/3.png" alt="" width="30" height="30" /></a></li>
                            <li><a href="#" onclick="setActiveStyleSheet('yellow');
                                    return false;" title="yellow" class="color"><img src="assets/images/demo/color_schemes/4.png" alt="" width="30" height="30" /></a></li>
                            <li><a href="#" onclick="setActiveStyleSheet('darkgreen');
                                    return false;" title="darkgreen" class="color"><img src="assets/images/demo/color_schemes/5.png" alt="" width="30" height="30" /></a></li>
                            <li><a href="#" onclick="setActiveStyleSheet('green');
                                    return false;" title="green" class="color"><img src="assets/images/demo/color_schemes/6.png" alt="" width="30" height="30" /></a></li>
                            <li><a href="#" onclick="setActiveStyleSheet('darkblue');
                                    return false;" title="darkblue" class="color"><img src="assets/images/demo/color_schemes/7.png" alt="" width="30" height="30" /></a></li>
                            <li><a href="#" onclick="setActiveStyleSheet('blue');
                                    return false;" title="blue" class="color"><img src="assets/images/demo/color_schemes/8.png" alt="" width="30" height="30" /></a></li>
                            <li><a href="#" onclick="setActiveStyleSheet('brown');
                                    return false;" title="brown" class="color"><img src="assets/images/demo/color_schemes/9.png" alt="" width="30" height="30" /></a></li>
                            <li><a href="#" onclick="setActiveStyleSheet('lightgrey');
                                    return false;" title="lightgrey" class="color"><img src="assets/images/demo/color_schemes/10.png" alt="" width="30" height="30" /></a></li>
                        </ul>        
        
                        <p>CHOOSE YOUR COLOR SKIN</p>
                        <label><input class="dark_switch" type="radio" name="color_skin" id="is_light" value="light" checked="checked" /> Light</label>
                        <label><input class="dark_switch" type="radio" name="color_skin" id="is_dark" value="dark" /> Dark</label>
        
                        <hr />
        
                        <p>CHOOSE YOUR LAYOUT STYLE</p>
                        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
                        <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>
        
        
                        <p>Patterns for Boxed Version</p>
                        <div>
                            <button onclick="pattern_switch('none');" class="pointer switcher_thumb"><img src="assets/images/patterns/none.jpg" width="27" height="27" alt="" /></button>
                            <button onclick="pattern_switch('pattern2');" class="pointer switcher_thumb"><img src="assets/images/patterns/pattern2.png" width="27" height="27" alt="" /></button>
                            <button onclick="pattern_switch('pattern3');" class="pointer switcher_thumb"><img src="assets/images/patterns/pattern3.png" width="27" height="27" alt="" /></button>
                            <button onclick="pattern_switch('pattern4');" class="pointer switcher_thumb"><img src="assets/images/patterns/pattern4.png" width="27" height="27" alt="" /></button>
                            <button onclick="pattern_switch('pattern5');" class="pointer switcher_thumb"><img src="assets/images/patterns/pattern5.png" width="27" height="27" alt="" /></button>
                        </div>
        
                        <div>
                            <button onclick="pattern_switch('pattern6');" class="pointer switcher_thumb"><img src="assets/images/patterns/pattern6.png" width="27" height="27" alt="" /></button>
                            <button onclick="pattern_switch('pattern7');" class="pointer switcher_thumb"><img src="assets/images/patterns/pattern7.png" width="27" height="27" alt="" /></button>
                            <button onclick="pattern_switch('pattern8');" class="pointer switcher_thumb"><img src="assets/images/patterns/pattern8.png" width="27" height="27" alt="" /></button>
                            <button onclick="pattern_switch('pattern9');" class="pointer switcher_thumb"><img src="assets/images/patterns/pattern9.png" width="27" height="27" alt="" /></button>
                            <button onclick="pattern_switch('pattern10');" class="pointer switcher_thumb"><img src="assets/images/patterns/pattern10.png" width="27" height="27" alt="" /></button>
                        </div>
        
                        <p>Images for Boxed Version</p>
                        <button onclick="background_switch('none');" class="pointer switcher_thumb"><img src="assets/images/boxed_background/none.jpg" width="27" height="27" alt="" /></button>
                        <button onclick="background_switch('assets/images/boxed_background/1.jpg');" class="pointer switcher_thumb"><img src="assets/images/boxed_background/1_thumb.jpg" width="27" height="27" alt="" /></button>
                        <button onclick="background_switch('assets/images/boxed_background/2.jpg');" class="pointer switcher_thumb"><img src="assets/images/boxed_background/2_thumb.jpg" width="27" height="27" alt="" /></button>
                        <button onclick="background_switch('assets/images/boxed_background/3.jpg');" class="pointer switcher_thumb"><img src="assets/images/boxed_background/3_thumb.jpg" width="27" height="27" alt="" /></button>
                        <button onclick="background_switch('assets/images/boxed_background/4.jpg');" class="pointer switcher_thumb"><img src="assets/images/boxed_background/4_thumb.jpg" width="27" height="27" alt="" /></button>
        
                        <hr />
        
                        <div class="text-center">
                            <button onclick="resetSwitcher();" class="btn btn-primary btn-xs">Reset Styles</button>
                        </div>
        
                        <div id="hideSwitcher">&times;</div>
                    </div>
                </div>-->

        <!--<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-angle-double-right"></i></div>-->
        <!-- /STYLESWITCHER -->



        <!-- WRAPPER -->
        <div id="wrapper">

            <!-- REVOLUTION SLIDER -->
            <div class="fullwidthbanner-container roundedcorners">
                <div class="fullwidthbanner">
                    <ul>	

                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">

                            <!-- COVER IMAGE -->
                            <img src="assets/images/demo/revolution_slider/s1.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                            <!-- LAYER NR. 1 -->
                            <!--                            <div class="tp-caption lightgrey_divider skewfromrightshort customout"
                                                             data-x="85"
                                                             data-y="224"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="1200"
                                                             data-easing="Power4.easeOut"
                                                             data-endspeed="500"
                                                             data-endeasing="Power4.easeIn"
                                                             data-captionhidden="off"
                                                             style="z-index: 2">
                                                        </div>-->

                            <!-- LAYER NR. 2 -->
                            <!--                            <div class="tp-caption customin customout"
                                                             data-x="right" data-hoffset="-220"
                                                             data-y="bottom" data-voffset="0"
                                                             data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="800"
                                                             data-start="700"
                                                             data-easing="Power4.easeOut"
                                                             data-endspeed="500"
                                                             data-endeasing="Power4.easeIn"
                                                             style="z-index: 3"><img src="assets/images/demo/revolution_slider/desktop_slider_2.png" alt="">
                                                        </div>-->

                            <!-- LAYER NR. 2 -->
                            <!--                            <div class="tp-caption customin customout"
                                                             data-x="right" data-hoffset="-100"
                                                             data-y="bottom" data-voffset="0"
                                                             data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="1500"
                                                             data-start="700"
                                                             data-easing="Elastic.easeInOut"
                                                             data-endspeed="500"
                                                             data-endeasing="Power1.easeIn"
                                                             style="z-index: 3"><img src="assets/images/demo/revolution_slider/slider_run.png" alt="">
                                                        </div>-->

                            <!--                             LAYER NR. 3 
                                                        <div class="tp-caption large_bold_grey skewfromrightshort customout"
                                                             data-x="80"
                                                             data-y="66"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="800"
                                                             data-easing="Back.easeOut"
                                                             data-endspeed="500"
                                                             data-endeasing="Power4.easeIn"
                                                             data-captionhidden="off"
                                                             style="z-index: 4">Powerful
                                                        </div>-->

                            <!-- LAYER NR. 4 -->
                            <!--                            <div class="tp-caption large_bold_grey skewfromleftshort customout"
                                                             data-x="80"
                                                             data-y="122"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="300"
                                                             data-start="1100"
                                                             data-easing="Back.easeOut"
                                                             data-endspeed="500"
                                                             data-endeasing="Power4.easeIn"
                                                             data-captionhidden="off"
                                                             style="z-index: 7">Multipurpose
                                                        </div>-->

                            <!-- LAYER NR. 5 -->
                            <!--                            <div class="tp-caption small_thin_grey customin customout"
                                                             data-x="80"
                                                             data-y="230"
                                                             data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="1300"
                                                             data-easing="Power4.easeOut"
                                                             data-endspeed="500"
                                                             data-endeasing="Power4.easeIn"
                                                             data-captionhidden="off"
                                                             style="z-index: 8">
                                                            Atropos Multipurpose Template, now offering you<br /> 
                                                            over 110 html pages fully customizable and very<br /> 
                                                            easy to use! <strong>Lifetime free update!</strong><br />
                                                            <a href="index-more.html">Read more...</a>
                                                        </div>-->

                            <!-- LAYER NR. 6 -->
                            <!--                            <div class="tp-caption large_bold_darkblue skewfromleftshort customout"
                                                             data-x="80" data-hoffset="-90"
                                                             data-y="350"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="1600"
                                                             data-easing="Back.easeOut"
                                                             data-endspeed="500"
                                                             data-endeasing="Power4.easeIn"
                                                             data-captionhidden="off"
                                                             style="z-index: 10">110+
                                                        </div>-->

                            <!-- LAYER NR. 7 -->
                            <!--                            <div class="tp-caption medium_bg_darkblue skewfromleftshort customout"
                                                             data-x="80" data-hoffset="-90"
                                                             data-y="410"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="1650"
                                                             data-easing="Back.easeOut"
                                                             data-endspeed="500"
                                                             data-endeasing="Power4.easeIn"
                                                             data-captionhidden="off"
                                                             style="z-index: 11">Html Pages
                                                        </div>-->
                            <!--
                                                        <div class="tp-caption medium_bold_orange skewfromleftshort customout start font300"
                                                             data-x="230" data-hoffset="-90"
                                                             data-y="370"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="1850"
                                                             data-easing="Back.easeOut"
                                                             data-endspeed="500"
                                                             data-endeasing="Power4.easeIn"
                                                             data-captionhidden="off"
                                                             style="z-index: 13;">Fully <strong>Responsive</strong>
                                                        </div>-->

                            <!--                             LAYER NR. 8 
                                                        <div class="tp-caption medium_bg_orange skewfromleftshort customout"
                                                             data-x="230" data-hoffset="-90"
                                                             data-y="410"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="2300"
                                                             data-easing="Back.easeOut"
                                                             data-endspeed="500"
                                                             data-endeasing="Power4.easeIn"
                                                             data-captionhidden="off"
                                                             style="z-index: 21">Customizable Pages
                                                        </div>-->

                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="3dcurtain-vertical" data-slotamount="14"  data-masterspeed="300" data-delay="10000">

                            <!-- COVER IMAGE -->
                            <img src="assets/images/demo/revolution_slider/s2.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                            <!--                            <div class="tp-caption lft boxshadow" 
                                                             data-x="70" 
                                                             data-y="70" 
                                                             data-speed="900" 
                                                             data-start="500" 
                                                             data-easing="easeOutBack">
                                                            <iframe src='http://player.vimeo.com/video/8408210?title=0&amp;byline=0&amp;portrait=0;api=1' width='640' height='360' style='width:640px; height:360px;'></iframe>
                                                        </div>-->

                            <!--                            <div class="tp-caption sft large_bold_grey" 
                                                             data-x="750" 
                                                             data-y="70" 
                                                             data-speed="300" 
                                                             data-start="1200" 
                                                             data-easing="easeOutExpo">FEATURED
                                                        </div>
                            
                                                        <div class="tp-caption sft modern_big_redbg" 
                                                             data-x="750" 
                                                             data-y="164" 
                                                             data-speed="300" 
                                                             data-start="1300" 
                                                             data-easing="easeOutExpo">Best With Atropos
                                                        </div>
                            
                                                        <div class="tp-caption lfb thinheadline_dark" 
                                                             data-x="750" 
                                                             data-y="210" 
                                                             data-speed="300" 
                                                             data-start="1400" 
                                                             data-easing="easeOutExpo">You can easily add
                                                        </div>
                            
                                                        <div class="tp-caption lfb thinheadline_dark" 
                                                             data-x="750" 
                                                             data-y="244" 
                                                             data-speed="300" 
                                                             data-start="1500" 
                                                             data-easing="easeOutExpo">Vimeo &amp; Youtube Videos
                                                        </div>
                            
                                                        <div class="tp-caption lfb thinheadline_dark" 
                                                             data-x="750" 
                                                             data-y="278" 
                                                             data-speed="300" 
                                                             data-start="1600" 
                                                             data-easing="easeOutExpo">to your Slides
                                                        </div>
                            
                                                        <div class="tp-caption lfb medium_bg_darkblue" 
                                                             data-x="750" 
                                                             data-y="390" 
                                                             data-speed="300" 
                                                             data-start="1600" 
                                                             data-easing="easeOutExpo"><i class="fa fa-html5"></i> HTML5
                                                        </div>
                            
                                                        <div class="tp-caption lfb medium_bg_orange" 
                                                             data-x="860" 
                                                             data-y="390" 
                                                             data-speed="300" 
                                                             data-start="1600" 
                                                             data-easing="easeOutExpo"><i class="fa fa-css3"></i> CSS3
                                                        </div>-->

                        </li>

                        <!-- SLIDE -->
                        <li data-transition="incube-horizontal" data-slotamount="5" data-masterspeed="700" >

                            <!-- COVER IMAGE -->
                            <img src="assets/images/demo/revolution_slider/s3.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                            <!--                            <div class="tp-caption large_text sft"
                                                             data-x="center"
                                                             data-y="130"
                                                             data-speed="300"
                                                             data-start="1000"
                                                             data-endspeed="500"
                                                             data-easing="easeOutBack"><h1>ATROPOS</h1>
                                                        </div>
                            
                                                        <div class="tp-caption large_text sft"
                                                             data-x="center"
                                                             data-y="260"
                                                             data-speed="300"
                                                             data-start="1700"
                                                             data-endspeed="500"
                                                             data-easing="easeOutBack"><h2>MULTIPURPOSE TEMPLATE</h2>
                                                        </div>-->

                            <!--                            <div class="tp-caption large_text sft"
                                                             data-x="center"
                                                             data-y="360"
                                                             data-customin="x:-150;y:-280;z:0;rotationX:-140;rotationY:-280;rotationZ:-220;scaleX:1.5;scaleY:0;skewX:57;skewY:60;opacity:0;transformPerspective:600;transformOrigin:120% 190%;"
                                                             data-customout="x:-450;y:-430;z:-30;rotationX:90;rotationY:-290;rotationZ:-20;scaleX:1;scaleY:2.8;skewX:59;skewY:4;opacity:0;transformPerspective:600;transformOrigin:70% 0%;"
                                                             data-speed="1500"
                                                             data-endspeed="500"
                                                             data-start="2700"
                                                             data-endeasing="Bounce.easeOut"
                                                             data-easing="Back.easeInOut">
                                                            <a class="btn btn-primary btn-lg" target="_blank" href="https://wrapbootstrap.com/theme/atropos-responsive-website-template-WB05SR527">BUY ATROPOS</a>
                                                        </div>-->

                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="13000" >
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/demo/revolution_slider/s4.jpg"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <!--                            <div class="tp-caption finewide_large_white customin customout tp-resizeme"
                                                             data-x="center" data-hoffset="0"
                                                             data-y="center" data-voffset="-40"
                                                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="500"
                                                             data-easing="Power3.easeInOut"
                                                             data-splitin="chars"
                                                             data-splitout="chars"
                                                             data-elementdelay="0.08"
                                                             data-endelementdelay="0.08"
                                                             data-end="4000"
                                                             data-endspeed="500"
                                                             style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">ATROPOS
                                                        </div>
                            
                            
                                                         LAYER NR. 3 
                                                        <div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
                                                             data-x="center" data-hoffset="0"
                                                             data-y="center" data-voffset="30"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="500"
                                                             data-easing="Power3.easeInOut"
                                                             data-splitin="chars"
                                                             data-splitout="chars"
                                                             data-elementdelay="0.08"
                                                             data-endelementdelay="0.08"
                                                             data-end="4000"
                                                             data-endspeed="500"
                                                             style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">FRESH NEW VERSION
                                                        </div>
                            
                                                         LAYER NR. 4 
                                                        <div class="tp-caption boldwide_small_white customin customout tp-resizeme"
                                                             data-x="240"
                                                             data-y="120" 
                                                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="300"
                                                             data-start="5000"
                                                             data-easing="Power3.easeInOut"
                                                             data-splitin="none"
                                                             data-splitout="none"
                                                             data-elementdelay="0.08"
                                                             data-endelementdelay="0.08"
                                                             data-endspeed="300"
                                                             style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><strong>Atropos</strong>
                                                        </div>
                            
                                                         LAYER NR. 5 
                                                        <div class="tp-caption whitedivider3px_vertical customin tp-resizeme"
                                                             data-x="420"
                                                             data-y="110" 
                                                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="300"
                                                             data-start="5500"
                                                             data-easing="Power3.easeInOut"
                                                             data-splitin="none"
                                                             data-splitout="none"
                                                             data-elementdelay="0.1"
                                                             data-endelementdelay="0.1"
                                                             data-endspeed="300"
                                                             style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
                                                        </div>
                            
                                                         LAYER NR. 6 
                                                        <div class="tp-caption finewide_small_white randomrotate customout tp-resizeme"
                                                             data-x="460"
                                                             data-y="120" 
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="6400"
                                                             data-easing="Power3.easeInOut"
                                                             data-splitin="chars"
                                                             data-splitout="chars"
                                                             data-elementdelay="0.08"
                                                             data-endelementdelay="0.08"
                                                             data-endspeed="300"
                                                             style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">POWERFUL
                                                        </div>
                            
                                                         LAYER NR. 7 
                                                        <div class="tp-caption finewide_small_white customin customout tp-resizeme"
                                                             data-x="460"
                                                             data-y="160" 
                                                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="7200"
                                                             data-easing="Power3.easeInOut"
                                                             data-splitin="words"
                                                             data-splitout="words"
                                                             data-elementdelay="0.12"
                                                             data-endelementdelay="0.12"
                                                             data-endspeed="300"
                                                             style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">MULTIPURPOSE
                                                        </div>
                            
                                                         LAYER NR. 8 
                                                        <div class="tp-caption finewide_small_white customin customout tp-resizeme"
                                                             data-x="460"
                                                             data-y="200" 
                                                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="500"
                                                             data-start="8000"
                                                             data-easing="Power3.easeInOut"
                                                             data-splitin="none"
                                                             data-splitout="none"
                                                             data-elementdelay="0.08"
                                                             data-endelementdelay="0.08"
                                                             data-endspeed="300"
                                                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">V1.2
                                                        </div>
                            
                                                         LAYER NR. 9 
                                                        <div class="tp-caption finewide_verysmall_white_mw customin customout tp-resizeme"
                                                             data-x="460"
                                                             data-y="250" 
                                                             data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
                                                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                             data-speed="900"
                                                             data-start="8000"
                                                             data-easing="Power3.easeInOut"
                                                             data-splitin="lines"
                                                             data-splitout="lines"
                                                             data-elementdelay="0.2"
                                                             data-endelementdelay="0.08"
                                                             data-endspeed="300"
                                                             style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">
                                                            Atropos is a multipurpose template for<br /> 
                                                            business or portfolio website. It is <br />
                                                            fully responsive design ready for<br /> 
                                                            PC, Tablet and Mobile.
                                                        </div>-->

                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="boxslide" data-slotamount="5" data-link="https://wrapbootstrap.com/theme/atropos-responsive-website-template-WB05SR527" data-target="_blank" data-slideindex="back">

                            <!-- COVER IMAGE -->
                            <img src="assets/images/demo/revolution_slider/s5.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                            <!--                            <div class="tp-caption very_large_text lfl stl"
                                                             data-x="right" data-hoffset="-30"
                                                             data-y="293"
                                                             data-speed="300"
                                                             data-start="500"
                                                             data-easing="easeOutExpo" 
                                                             data-endspeed="300" 
                                                             data-endeasing="easeInSine">විජය ලර්නස්
                                                        </div>
                            
                                                        <div class="tp-caption large_bold_grey medium_thin_grey lfl stl"
                                                             data-x="right" data-hoffset="-30"
                                                             data-y="260"
                                                             data-speed="300"
                                                             data-start="800"
                                                             data-easing="easeOutExpo" 
                                                             data-endspeed="300" 
                                                             data-endeasing="easeInSine">
                                                            <a target="_blank" href="https://wrapbootstrap.com/theme/atropos-responsive-website-template-WB05SR527">BUY NOW ATROPOS</a>
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="48"
                                                             data-y="131"
                                                             data-speed="600"
                                                             data-start="1100"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/1.jpg" width="140" height="140" alt="Image 2">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="90"
                                                             data-y="206"
                                                             data-speed="600"
                                                             data-start="1200"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/2.jpg" width="140" height="140" alt="Image 3">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="205"
                                                             data-y="140"
                                                             data-speed="600"
                                                             data-start="1300"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/3.jpg" width="140" height="140" alt="Image 4">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="188"
                                                             data-y="246"
                                                             data-speed="300"
                                                             data-start="1400"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/4.jpg" width="140" height="140" alt="Image 5">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="55"
                                                             data-y="316"
                                                             data-speed="600"
                                                             data-start="1500"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/5.jpg" width="140" height="140" alt="Image 6">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="173"
                                                             data-y="329"
                                                             data-speed="300"
                                                             data-start="1600"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/6.jpg" width="140" height="140" alt="Image 7">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="255"
                                                             data-y="294"
                                                             data-speed="300"
                                                             data-start="1700"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/7.jpg" width="140" height="140" alt="Image 8">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="275"
                                                             data-y="166"
                                                             data-speed="300"
                                                             data-start="1800"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/8.jpg" width="140" height="140" alt="Image 9">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="84"
                                                             data-y="113"
                                                             data-speed="300"
                                                             data-start="1900"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/5.jpg" width="140" height="140" alt="Image 10">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="26"
                                                             data-y="225"
                                                             data-speed="300"
                                                             data-start="2000"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/4.jpg" width="140" height="140" alt="Image 11">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="110"
                                                             data-y="187"
                                                             data-speed="300"
                                                             data-start="2100"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/3.jpg" width="140" height="140" alt="Image 12">
                                                        </div>
                            
                                                        <div class="tp-caption randomrotate"
                                                             data-x="183"
                                                             data-y="221"
                                                             data-speed="300"
                                                             data-start="2200"
                                                             data-easing="easeOutExpo">
                                                            <img src="assets/images/demo/portfolio/slider/2.jpg" width="140" height="140" alt="Image 13">
                                                        </div>-->
                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="3dcurtain-vertical" ddata-slotamount="15" data-masterspeed="300" data-delay="9400">

                            <!-- COVER IMAGE -->
                            <img src="assets/images/demo/revolution_slider/sliderbg.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                            <div class="tp-caption large_bold_grey lfl stl"
                                 data-x="18"
                                 data-y="233"
                                 data-speed="300"
                                 data-start="500"
                                 data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine">
                            </div>

                            <div class="tp-caption large_bold_grey medium_thin_grey lfl stl"
                                 data-x="18"
                                 data-y="200"
                                 data-speed="300"
                                 data-start="800"
                                 data-easing="easeOutExpo" data-end="9100" data-endspeed="300" data-endeasing="easeInSine">
                                <a target="_blank" href="https://wrapbootstrap.com/theme/atropos-responsive-website-template-WB05SR527"></a>
                            </div>

                            <div class="tp-caption lft"
                                 data-x="right" data-hoffset="-20"
                                 data-y="0"
                                 data-speed="600"
                                 data-start="1100"
                                 data-easing="easeOutExpo" data-end="3100" data-endspeed="600" data-endeasing="easeInSine">
                                <a href="shop-product-full-width.html"><img src="" alt="Image 1"></a>
                            </div>

                            <div class="tp-caption medium_bg_darkblue sft stb"
                                 data-x="720"
                                 data-y="200"
                                 data-speed="300"
                                 data-start="1400"
                                 data-easing="easeOutExpo" data-end="3300" data-endspeed="300" data-endeasing="easeInSine">
                            </div>

                            <div class="tp-caption medium_bg_orange sfb stb"
                                 data-x="720"
                                 data-y="160"
                                 data-speed="300"
                                 data-start="1700"
                                 data-easing="easeOutExpo" data-end="3200" data-endspeed="300" data-endeasing="easeInSine">
                            </div>

                            <div class="tp-caption lft ltb"
                                 data-x="right" data-hoffset="-20"
                                 data-y="0"
                                 data-speed="600"
                                 data-start="3600"
                                 data-easing="easeOutExpo" data-end="5600" data-endspeed="600" data-endeasing="easeInSine">
                                <a href="shop-product-full-width.html"><img src="" alt="Image 2"></a>
                            </div>

                            <div class="tp-caption medium_bg_darkblue sft stb"
                                 data-x="720"
                                 data-y="200"
                                 data-speed="300"
                                 data-start="3900"
                                 data-easing="easeOutExpo" data-end="5800" data-endspeed="300" data-endeasing="easeInSine">
                            </div>

                            <div class="tp-caption medium_bg_orange sfb stb"
                                 data-x="720"
                                 data-y="160"
                                 data-speed="300"
                                 data-start="4200"
                                 data-easing="easeOutExpo" data-end="5700" data-endspeed="300" data-endeasing="easeInSine">
                            </div>

                            <div class="tp-caption lft ltb"
                                 data-x="right" data-hoffset="-20"
                                 data-y="0"
                                 data-speed="600"
                                 data-start="6100"
                                 data-easing="easeOutExpo" data-end="8100" data-endspeed="300" data-endeasing="easeInSine">
                                <a href="shop-product-full-width.html"><img src="" alt="Image 3"></a>
                            </div>

                            <div class="tp-caption medium_bg_darkblue sft stb"
                                 data-x="720"
                                 data-y="200"
                                 data-speed="300"
                                 data-start="6400"
                                 data-easing="easeOutExpo" data-end="8300" data-endspeed="300" data-endeasing="easeInSine">COOL RED CHIAR
                            </div>

                            <div class="tp-caption medium_bg_orange sfb stb"
                                 data-x="720"
                                 data-y="160"
                                 data-speed="300"
                                 data-start="6700"
                                 data-easing="easeOutExpo" data-end="8200" data-endspeed="300" data-endeasing="easeInSine">
                            </div>

                        </li>

                        <!-- SLIDE -->
                        <li data-transition="curtain-2" data-slotamount="5" data-masterspeed="700">

                            <!-- COVER IMAGE -->
                            <img src="" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                            <div class="tp-caption large_text sft"
                                 data-x="center"
                                 data-y="100"
                                 data-speed="300"
                                 data-start="800"
                                 data-easing="easeOutExpo">
                            </div>

                            <div class="tp-caption medium_bold_red medium_light_red sfr"
                                 data-x="center"
                                 data-y="75"
                                 data-speed="300"
                                 data-start="1100"
                                 data-easing="easeOutExpo">
                                <a href="https://trican.lk" target="_blank">PURCHASE NOW ATROPOS</a>
                            </div>

                            <div class="tp-caption lfb text-center" 
                                 data-x="270" 
                                 data-y="200" 
                                 data-speed="900" 
                                 data-start="1700" 
                                 data-easing="easeOutBack">
                                <a class="fsize20" href="shop-product-full-width.html">
                                    <img class="block hover-scale" src="" width="200" height="200" alt="" />
                                    <strong></strong>
                                </a>
                            </div>

                            <div class="tp-caption lfb text-center" 
                                 data-x="480" 
                                 data-y="200" 
                                 data-speed="900" 
                                 data-start="2000" 
                                 data-easing="easeOutBack">
                                <a class="fsize20" href="shop-product-full-width.html">
                                    <img class="block hover-scale" src="" width="200" height="200" alt="" />
                                    <strong></strong>
                                </a>
                            </div>

                            <div class="tp-caption lfb text-center" 
                                 data-x="690" 
                                 data-y="200" 
                                 data-speed="900" 
                                 data-start="2300" 
                                 data-easing="easeOutBack">
                                <a class="fsize20" href="shop-product-full-width.html">
                                    <img class="block hover-scale" src="" width="200" height="200" alt="" />
                                    <strong></strong>
                                </a>
                            </div>
                        </li>

                        <!-- SLIDER -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                            <img src="assets/images/dummy.png"  alt="church1" data-lazyload="" data-fullwidthcentering="on">
                            <div class="tp-caption medium_text lft"
                                 data-x="90" 
                                 data-y="180"
                                 data-speed="300" 
                                 data-start="500" 
                                 data-easing="easeOutExpo">
                            </div>

                            <div class="tp-caption large_text lfb"
                                 data-x="90" 
                                 data-y="222"
                                 data-speed="300" 
                                 data-start="800" 
                                 data-easing="easeOutExpo"> <br/> 
                            </div>

                            <div class="tp-caption lfb"
                                 data-x="90" 
                                 data-y="330"
                                 data-speed="300" 
                                 data-start="1100" 
                                 data-easing="easeOutExpo">
                                <a href="https://trican.lk" target="_blank" class="btn btn-primary btn-lg"></a>
                            </div>
                        </li>

                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!-- /REVOLUTION SLIDER -->




            <!-- WELCEOME -->
            <section class="container"style="color: black" >
                <h1 class="text-center">
                    <strong>Welcome</strong> to VIJAYA LEARNERS
                    <!--<span class="subtitle">COME ON, DON'T BE SHY! TODAY WE DON'T BITE!</span>-->
                </h1>

                <div class="divider"><!-- divider -->
                    <i class="fa fa-star"></i>
                </div>

                <p class="lead" >Vijaya Learners is government approved "A" grade learning school in Sri Lanka.Call us on  +94 37 2223 969 today to learn to drive safe and smart...</p>

                <hr /><!-- separator -->

                <!-- FEATURED BOXES 4 -->
                <div class="row featured-box-minimal margin-bottom30">
                    <div class="col-md-4">
                        <h4><i class="fa fa-group"></i> Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                    </div>
                    <div class="col-md-4">
                        <h4> <i class="fa fa-book"></i> Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                    </div>
                    <div class="col-md-4">
                        <h4><i class="fa fa-trophy"></i> Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                    </div>
                </div>
                <!-- /FEATURED BOXES 4 -->

                <!-- FEATURED BOXES 4 -->
                <div class="row featured-box-minimal margin-bottom30">
                    <div class="col-md-4">
                        <h4><i class="fa fa-group"></i> Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                    </div>
                    <div class="col-md-4">
                        <h4> <i class="fa fa-book"></i> Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                    </div>
                    <div class="col-md-4">
                        <h4><i class="fa fa-trophy"></i>Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                    </div>
                </div>
                <!-- /FEATURED BOXES 4 -->

            </section>
            <!-- /WELCOME -->


            <!-- PARALLAX -->
            <section class="parallax margin-top80" data-stellar-background-ratio="0.7" style="background-image: url('assets/images/demo/parallax.jpg');">
                <span class="overlay"></span>

                <div class="container">

                    <div class="row">
                        <!-- left content -->
                        <div class="col-md-7 animation_fade_in">
                            <h2>Atropos <strong>Lorem ipsum</strong></h2>
                            <p class="lead">
                                Atropos is a multipurpose template for business or portfolio website. It is fully responsive design ready to look stunning on PC, Tablet and Mobile.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
                            </p>

                            <a class="btn btn-primary btn-lg" href="shortcodes-rows.html">View Shortcodes</a>
                        </div>

                        <!-- right image -->
                        <div class="col-md-5 animation_fade_in">
                            <img class="visible-md visible-lg img-responsive pull-right" src="assets/images/demo/desktop.png">
                        </div>
                    </div>
                </div>
            </section>
            <!-- PARALLAX -->


            <!-- SERVICES -->
            <section class="container margin-top100">

                <!-- SERVICE 1 -->
                <div class="row margin-top30">

                    <!-- SERVICE 1 -->
                    <div class="col-md-2 text-center">
                        <i class="nomargin featured-icon fa fa-heart"></i>
                    </div>

                    <div class="col-md-10">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                    </div>

                </div>

                <div class="divider half-margins"><!-- divider -->
                    <i class="fa fa-plus-circle"></i>
                </div>

                <!-- SERVICE 2 -->
                <div class="row margin-top30">

                    <div class="col-md-2 text-center">
                        <i class="nomargin featured-icon fa fa-female"></i>
                    </div>

                    <div class="col-md-10">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                    </div>

                </div>

                <div class="divider half-margins"><!-- divider -->
                    <i class="fa fa-plus-circle"></i>
                </div>

                <!-- SERVICE 3 -->
                <div class="row margin-top30">

                    <div class="col-md-2 text-center">
                        <i class="nomargin featured-icon fa fa-cogs"></i>
                    </div>

                    <div class="col-md-10">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                    </div>

                </div>

                <div class="divider half-margins"><!-- divider -->
                    <i class="fa fa-plus-circle"></i>
                </div>

                <!-- SERVICE 4 -->
                <div class="row margin-top30">

                    <div class="col-md-2 text-center">
                        <i class="nomargin featured-icon fa fa-users"></i>
                    </div>

                    <div class="col-md-10">
                        <h3>Lorem ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                    </div>

                </div>

            </section>
            <!-- /SERVICES -->


            <!-- PORTFOLIO -->
            <section id="portfolio" class="special-row padding100 margin-top100 margin-footer">
                <div class="container">

                    <div class="row">

                        <ul class="sort-destination isotope" data-sort-id="isotope-list">

                            <li class="isotope-item col-sm-6 col-md-4 development"><!-- item -->
                                <div class="item-box">
                                    <figure>
                                        <a class="item-hover lightbox" href="assets/images/demo/portfolio/scouter.jpg" data-plugin-options='{"type":"image"}'>
                                            <span class="overlay color2"></span>
                                            <span class="inner">
                                                <span class="block fa fa-plus fsize20"></span>
                                                <strong>VIEW</strong> IMAGE
                                            </span>
                                        </a>
                                        <img class="img-responsive" src="assets/images/demo/portfolio/scouter-600x403.jpg" width="260" height="260" alt="">
                                    </figure>
                                    <div class="item-box-desc">
                                        <h4>Image</h4>
                                        <small class="styleColor">29 June, 2014</small>
                                    </div>
                                </div>
                            </li>

                            <li class="isotope-item col-sm-6 col-md-4 photography"><!-- item 2 -->
                                <div class="item-box">
                                    <figure>
                                        <a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
                                            <span class="overlay color2"></span>
                                            <span class="inner">
                                                <span class="block fa fa-plus fsize20"></span>
                                                <strong>VIEW</strong> VIDEO
                                            </span>
                                        </a>
                                        <img class="img-responsive" src="assets/images/demo/portfolio/black-kitty-600x403.jpg" width="260" height="260" alt="">
                                    </figure>
                                    <div class="item-box-desc">
                                        <h4>Video</h4>
                                        <small class="styleColor">29 June, 2014</small>
                                    </div>
                                </div>
                            </li>

                            <li class="isotope-item col-sm-6 col-md-4 design"><!-- item 3 -->
                                <div class="item-box">
                                    <figure>
                                        <a class="item-hover" href="portfolio-single-full-slider.html">
                                            <span class="overlay color2"></span>
                                            <span class="inner">
                                                <span class="block fa fa-plus fsize20"></span>
                                                <strong>PROJECT</strong> DETAIL
                                            </span>
                                        </a>
                                        <img class="img-responsive" src="assets/images/demo/portfolio/merchant2-600x403.jpg" width="260" height="260" alt="">
                                    </figure>
                                    <div class="item-box-desc">
                                        <h4>Detailed Project</h4>
                                        <small class="styleColor">29 June, 2014</small>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>

                </div>
            </section>
            <!-- /PORTFOLIO -->

        </div>
        <!-- /WRAPPER -->



        <!-- FOOTER -->
        <?php
        include './common/footer.php';
        ?>
        <!-- /FOOTER -->



        <!-- JAVASCRIPT FILES -->
        <?php
        include './common/systemfooter.php';
        ?>

        <script type="text/javascript" src="controllers/resultsearchcontroller.js"></script>
    </body> 
    <?php
    $a =$_POST['admission'];
   
    ?>
    <script type="text/javascript">
        $(document).ready(function () {







        });

        $('#studentdeatails').click(function () {
            $('#writtenexamform').hide();
            $('#practicalexamform').hide();
            $('#results').hide();
            $('#practicalexam1').hide();
            $('#practicalexam').show();
            $('#writtenexam').show();
            $('#admissionNumtxt').val("");
            $('#homelink').hide();
        });

        $('#writtenexam').click(function () {

         

            $('#practicalexamform').hide(500);
            $('#results').hide(500);
            $('#admissionNumtxt').val("");
            $('#practicaltxt').val("");
            $('#writtenexamform').show(500);
            $('#homelink').show();


        });
        $('#practicalexam').click(function () {

            $('#writtenexamform').hide(500);
            $('#practicalexamform').show(500);
            $('#admissionNumtxt').val("");
            $('#practicaltxt').val("");
            $('#homelink').show();


        });
        $('#homelink').click(function () {

            $('#practicalexam').show();
            $('#writtenexam').show();
            $('#writtenexamform').hide();
            $('#practicalexamform').hide();
            $('#results').slideUp(100);
            $('#homelink').hide();


        });

        $('#writtenexamsearch').click(function () {

            var admissionNo1 = $('#admissionNumtxt');

            if (admissionNo1.val() == "") {
//             

                $("#admissionNumtxt").shake(3, 7, 800);
                $('#admissionNumtxt').css("border-color", "red");

            } else {
                var admissionNo = $('#admissionNumtxt').val();
                loadingresults(admissionNo);
                $('#practicalexam').hide(500);
                $('#results').slideDown(500);
                $('#noresult').hide();
                $('#admissionNumtxt').val("");
                $('#writtenmarkstab').show();
                $('#writtenstatustab').show();

            }



        });

        $('#practicalexam1').click(function () {

            $('#writtenexamform').hide(500);
            $('#writtenexam').hide(500);
            $('#practicalexam').show(500);
            $('#practicalexamform').show(500);
            $('#admissionNumtxt').val("");
            $('#results').hide(500);



        });





        $('#practicalexamsearch').click(function () {
            var inp = $("#practicaltxt");
            if (inp.val() != "") {
                var admissionNo = $('#practicaltxt').val();
                loadingresultspractical(admissionNo);
//                $('#admissionNumtxt').hide(500);
//                $('#writtenexamsearch').hide();
                $('#writtenexamform').hide();
                $('#writtenexam').hide();
                $('#results').slideDown(1000);
                $('#noresult').hide();
                $('#practicaltxt').val("");
            } else {
                $("#practicaltxt").shake(3, 7, 800);
                $('#practicaltxt').css("border-color", "red");
            }

        });


        jQuery.fn.shake = function (intShakes, intDistance, intDuration) {
            this.each(function () {
                $(this).css("position", "relative");
                for (var x = 1; x <= intShakes; x++) {
                    $(this).animate({left: (intDistance * -1)}, (((intDuration / intShakes) / 4)))
                            .animate({left: intDistance}, ((intDuration / intShakes) / 2))
                            .animate({left: 0}, (((intDuration / intShakes) / 4)));

                }
            });
            return this;
        };



        function test() {
            var admissionNo = $('#admissionNumtxt').val();


            $('#results').slideUp(200);
            $('#admissionNumtxt').css("border-color", "#e6e6e6");
//            resultsformclear();
            $('#results').removeData();

        }
        function onclickpracticaltxt() {

//            var admissionNo = $('#practicaltxt').val();
            $('#results').slideUp(200);
            $('#practicaltxt').css("border-color", "#e6e6e6");
//            resultsformclear();
//var checkdata = document.getElementById('admisionnum').innerHTML;
}

//function testprint(){
//    
//    
//     document.location.href='report.php';
//    
//    
//}
$('#writtenprintbtn').click(function (){
    
    var admisionNumber = $('#admisionnum').text()
   
    
    var name = $('#studentname').text();
    var examdate = $('#examdate').text();
    var marks = $('#writtenresults').text();
    var vclass = $('#vclass').text();
    var ststus  = $('#status').text();
    testprint(admisionNumber,name,examdate, marks ,vclass,  ststus);
    
   document.location.href='report.php';
   });
        /*COMMENTS*/
//see text file


    </script>
</html>