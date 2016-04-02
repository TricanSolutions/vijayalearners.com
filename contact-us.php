<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

    <!-- Mirrored from theme.stepofweb.com/Atropos/v1.7/HTML/contact-us-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2016 14:10:32 GMT -->
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

        <!-- Top Bar -->
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
                    <img src="assets/images/logonew.png" alt="Atropos" />
                </a>

                <!-- Top Nav -->
                <header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->
                    <div class="container">

                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Logo text or image -->
                        <a class="logo" href="index.php">
                            <img src="assets/images/logonew.png" alt="Atropos" />
                        </a>

                        <!-- Top Nav -->
                        <div class="navbar-collapse nav-main-collapse collapse pull-right">
                            <nav class="nav-main mega-menu">
                                <ul class="nav nav-pills nav-main scroll-menu" id="topMain">
                                    <li class="">
                                        <a class="dropdown-toggle" href="index.php">
                                            Home <i class=""></i>
                                        </a>

                                    </li>

                                    <li class="">
                                        <a class="dropdown-toggle" href="aboutus.php">
                                            About Us <i class=""></i>
                                        </a>

                                    </li>
                                    <li class=" ">
                                        <a class="dropdown-toggle" href="portfolio.php">
                                            Portfolio <i class=""></i>
                                        </a>

                                    </li>
                                      <li class=" mega-menu-item mega-menu-fullwidth">
                                        <a class="" href="" data-toggle="modal" data-target=".bs-example-modal-lg" id="studentdeatails">
                                            Exam Results <i class=""></i>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a class="dropdown-toggle" href="contact-us.php">
                                            Contact <i class=""></i>
                                        </a>

                                    </li>
                                  



                                    <!-- GLOBAL SEARCH -->
                                    <li class="search">
                                        <!-- search form -->
                                        <form method="get" action="#" class="input-group pull-right">
                                            <input type="text" class="form-control" name="k" id="k" value="" placeholder="Search">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary notransition"><i class="fa fa-search"></i></button>
                                            </span>
                                        </form>
                                        <!-- /search form -->
                                    </li>
                                    <!-- /GLOBAL SEARCH -->

                                    <!-- QUICK SHOP CART -->

                                    <!-- /QUICK SHOP CART -->

                                </ul>
                            </nav>
                        </div>
                        <!-- /Top Nav -->

                    </div>
                </header>
                <!-- /Top Nav -->

            </div>
        </header>

        <span id="header_shadow"></span>
        <!-- /TOP NAV -->



        <!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->

        <!-- /STYLESWITCHER -->



        <!-- WRAPPER -->
        <div id="wrapper">

            <!-- PAGE TITLE -->
            <header id="page-title"> <!-- style="background-image:url('assets/images/demo/parallax_bg.jpg')" -->
                <!--
                        Enable only if bright background image used
                        <span class="overlay"></span>
                -->

                <div class="container">
                    <h1>Contact Us</h1>

                    <!--					<ul class="breadcrumb">
                                                                    <li><a href="index.html">Home</a></li>
                                                                    <li class="active">Contact</li>
                                                            </ul>-->
                </div>
            </header>

            <section id="contact" class="container">


                <div class="row">

                    <!-- FORM -->
                    <div class="col-md-8">

                        <h2>Drop us a line or just say <strong><em>Hello!</em></strong></h2>

                        <!-- 
                                if you want to use your own contact script, remove .hide class
                        -->

                        <!-- SENT OK -->
                        <div id="_sent_ok_" class="alert alert-success fade in fsize16 hide">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Thank You!</strong> Your message successfully sent!
                        </div>
                        <!-- /SENT OK -->

                        <!-- SENT FAILED -->
                        <div id="_sent_required_" class="alert alert-danger fade in fsize16 hide">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Failed!</strong> Please complete all mandatory (*) fields!
                        </div>
                        <!-- /SENT FAILED -->

                        <form id="contactForm" class="white-row" action="" method="post">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label>Full Name *</label>
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="contact_name" id="contact_name">
                                    </div>
                                    <div class="col-md-4">
                                        <label>E-mail Address *</label>
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="contact_email" id="contact_email">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                        <input type="text" value="" data-msg-required="Please enter your phone" data-msg-email="Please enter your phone" maxlength="100" class="form-control" name="contact_phone" id="contact_phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Subject</label>
                                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="contact_subject" id="contact_subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Message *</label>
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="contact_message" id="contact_message"></textarea>
                                    </div>
                                </div>
                            </div>

                            <br />

                            <div class="row">
                                <div class="col-md-12">
                                    <span class="pull-right"><!-- captcha -->
                                        <label class="block text-right fsize12">Antispam Code</label>
                                        <img alt="" rel="nofollow,noindex" width="50" height="18" src="php/captcha5204.png?bgcolor=ffffff&amp;txtcolor=000000">
                                        <input type="text" name="contact_captcha" id="contact_captcha" value="" data-msg-required="Please enter the subject." maxlength="6" style="width:100px; margin-left:10px;">
                                    </span>

                                    <input id="contact_submit" type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- /FORM -->


                    <!-- INFO -->
                    <div class="col-md-4">

                        <h2>Visit Us</h2>

                        <div class="white-row">
                            <div id="gmap"><!-- google map --></div>
                            <script type="text/javascript">
                                var $googlemap_latitude = 7.4863,
                                        $googlemap_longitude = 80.3667,
                                        $googlemap_zoom = 13;
                            </script>

                            <div class="divider white half-margins"><!-- divider -->

                                <i class="fa fa-star"></i>
                            </div>

                            <p class="nomargin-bottom">
                                <span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> PO Box 38/2, Kandy RD,Kurunegala(In front of Imperial Theater)</span>
                                <span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> +94 37 2223 969 &bull;</span>
                                <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:info@vijayalearners.com">info@vijayalearners.com</a></span>
                            </p>

                        </div>


                    </div>
                    <!-- /INFO -->

                </div>

            </section>

        </div>
        <!-- /WRAPPER -->



        <!-- FOOTER -->
        <?php
        include './common/footer.php';
        ?>
        <!-- /FOOTER -->



        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript" src="assets/plugins/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery.cookie.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery.appear.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery.isotope.js"></script>
        <script type="text/javascript" src="assets/plugins/masonry.js"></script>

        <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/plugins/stellar/jquery.stellar.min.js"></script>
        <script type="text/javascript" src="assets/plugins/knob/js/jquery.knob.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery.backstretch.min.js"></script>
        <script type="text/javascript" src="assets/plugins/superslides/dist/jquery.superslides.min.js"></script>
        <script type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script><!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->


        <script type="text/javascript" src="assets/js/scripts.js"></script>

        <!-- AJAX CONTACT -->
        <script type="text/javascript" src="assets/js/contact_ajax.js"></script>

        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
        <!--<script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-XXXXX-X', 'domainname.com');
                ga('send', 'pageview');
        </script>
        -->
<script type="text/javascript" src="js/resultssearchscript.js"></script>
  <script type="text/javascript" src="controllers/resultsearchcontroller.js"></script>
    </body>

    <!-- Mirrored from theme.stepofweb.com/Atropos/v1.7/HTML/contact-us-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2016 14:10:32 GMT -->
</html>