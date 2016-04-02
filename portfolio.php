<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

    <!-- Mirrored from theme.stepofweb.com/Atropos/v1.7/HTML/portfolio-3-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2016 14:13:49 GMT -->
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

        <!-- SHOP CSS -->
        <link href="assets/css/portfolio.css" rel="stylesheet" type="text/css" />

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
                            <li class="active ">
                                <a class="dropdown-toggle" href="portfolio.php">
                                    Portfolio <i class=""></i>
                                </a>

                            </li>
                               <li class=" mega-menu-item mega-menu-fullwidth">
                                <a class="" href="" data-toggle="modal" data-target=".bs-example-modal-lg" id="studentdeatails">
                                    Exam Results <i class=""></i>
                                </a>
                            </li>
                            <li class="">
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

        <span id="header_shadow"></span>
        <!-- /TOP NAV -->



        <!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->


        <!--<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-angle-double-right"></i></div>-->
        <!-- /STYLESWITCHER -->



        <!-- WRAPPER -->
        <div id="wrapper">

            <!-- PAGE TITLE -->
            <header id="page-title">
                <div class="container">
                    <h1>Portfolio </h1>

                    <!--                    <ul class="breadcrumb">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="#">Portfolio</a></li>
                                            <li class="active">3 Columns</li>
                                        </ul>-->
                </div>
            </header>

            <section id="portfolio" class="container">

                <h2><strong>Explore</strong> your world with us</h2>

                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p>

                <ul class="nav nav-pills isotope-filter isotope-filter" data-sort-id="isotope-list" data-option-key="filter">
                    <!--<li data-option-value="*" class="active"><a href="#">Show All</a></li>-->
                    <li data-option-value=".development"><a href="#">Written Exam</a></li>
                    <li data-option-value=".photography"><a href="#">Practical</a></li>
                    <li data-option-value=".design"><a href="#">Lecturing</a></li>
                </ul>


                <div class="row">

                    <ul class="sort-destination isotope" data-sort-id="isotope-list">

                        <li class="isotope-item col-sm-6 col-md-4 development"><!-- item -->
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover" href="portfolio-single.html">
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>PROJECT</strong> DETAIL
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/demo/portfolio/scouter-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Atropos Project</h4>
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
                                    <h4>Video Project</h4>
                                    <small class="styleColor">29 June, 2014</small>
                                </div>
                            </div>
                        </li>

                        <li class="isotope-item col-sm-6 col-md-4 design"><!-- item 3 -->
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover" href="portfolio-single.html">
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>PROJECT</strong> DETAIL
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/demo/portfolio/merchant2-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Atropos Project</h4>
                                    <small class="styleColor">29 June, 2014</small>
                                </div>
                            </div>
                        </li>

                        <li class="isotope-item col-sm-6 col-md-4 photography"><!-- item 4 -->
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover" href="portfolio-single.html">
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>PROJECT</strong> DETAIL
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/demo/portfolio/flippin-the-bird1-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Atropos Project</h4>
                                    <small class="styleColor">29 June, 2014</small>
                                </div>
                            </div>
                        </li>

                        <li class="isotope-item col-sm-6 col-md-4 development"><!-- item 5 -->
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>VIEW</strong> VIDEO
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/demo/portfolio/night_to_remember1-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Video Project</h4>
                                    <small class="styleColor">29 June, 2014</small>
                                </div>
                            </div>
                        </li>

                        <li class="isotope-item col-sm-6 col-md-4 design"><!-- item 6 -->
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover" href="portfolio-single.html">
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>PROJECT</strong> DETAIL
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/demo/portfolio/spacebound-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Atropos Project</h4>
                                    <small class="styleColor">29 June, 2014</small>
                                </div>
                            </div>
                        </li>

                        <li class="isotope-item col-sm-6 col-md-4 photography design"><!-- item 7 -->
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>VIEW</strong> VIDEO
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/demo/portfolio/be-my-guest1-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Atropos Project</h4>
                                    <small class="styleColor">29 June, 2014</small>
                                </div>
                            </div>
                        </li>

                        <li class="isotope-item col-sm-6 col-md-4 development"><!-- item 8 -->
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover" href="portfolio-single.html">
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>PROJECT</strong> DETAIL
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/demo/portfolio/black-box5-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Atropos Project</h4>
                                    <small class="styleColor">29 June, 2014</small>
                                </div>
                            </div>
                        </li>

                        <li class="isotope-item col-sm-6 col-md-4 development"><!-- item -->
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover" href="portfolio-single.html">
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>PROJECT</strong> DETAIL
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/demo/portfolio/weather-app-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Atropos Project</h4>
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
                                    <img class="img-responsive" src="assets/images/demo/portfolio/theMoose-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Atropos Project</h4>
                                    <small class="styleColor">29 June, 2014</small>
                                </div>
                            </div>
                        </li>

                        <li class="isotope-item col-sm-6 col-md-4 design"><!-- item 3 -->
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover" href="portfolio-single.html">
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>PROJECT</strong> DETAIL
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/demo/portfolio/tumblr_mopqj9QUeq1st5lhmo1_12801-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Atropos Project</h4>
                                    <small class="styleColor">29 June, 2014</small>
                                </div>
                            </div>
                        </li>

                        <li class="isotope-item col-sm-6 col-md-4 photography"><!-- item 4 -->
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
                                        <span class="overlay color2"></span>
                                        <span class="inner">
                                            <span class="block fa fa-plus fsize20"></span>
                                            <strong>VIEW</strong> VIDEO
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/demo/portfolio/scouter-600x403.jpg" width="260" height="260" alt="">
                                </figure>
                                <div class="item-box-desc">
                                    <h4>Atropos Project</h4>
                                    <small class="styleColor">29 June, 2014</small>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div><!-- /.masonry-container -->

                <!-- CALLOUT -->
                <div class="bs-callout text-center nomargin-bottom">
                    <h3>Do you like what you see? <a href="contact-us.html" target="_blank" class="btn btn-primary btn-lg">Yes, let's work together!</a></h3>
                </div>
                <!-- /CALLOUT -->


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

<script type="text/javascript" src="js/resultssearchscript.js"></script>
  <script type="text/javascript" src="controllers/resultsearchcontroller.js"></script>
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

    </body>

    <!-- Mirrored from theme.stepofweb.com/Atropos/v1.7/HTML/portfolio-3-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2016 14:13:49 GMT -->
</html>