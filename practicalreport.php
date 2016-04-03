<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

    <!-- Mirrored from theme.stepofweb.com/Atropos/v1.7/HTML/page-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2016 14:10:32 GMT -->
    <head>
        <meta charset="utf-8" />
        <?php include './common/systemHeader.php'; ?>
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
        <?php
        $no = $_POST["hidp"];
        $name = $_POST["hnamep"];
        $examdate = $_POST["hexamdatep"];
        $vclassA = $_POST["hvclassA"];
        $vclassB = $_POST["hvclassB"];
        $vclassB1 = $_POST["hvclassB1"];
        $vclassG = $_POST["hvclassG"];
        $vclassD = $_POST["hvclassD"];
        $vclassCE = $_POST["hvclassCE"];



       
        ?>
        <!-- Top Bar -->
        <header id="topHead">
     <?php
            include './common/topBar.php';
            ?>
        </header>
        <!-- /Top Bar -->





        <!-- WRAPPER -->
        <div id="wrapper">

            <!-- PAGE TITLE -->
            <!--			<header id="page-title">  style="background-image:url('assets/images/demo/parallax_bg.jpg')" 
                                            
                                                    Enable only if bright background image used
                                                    <span class="overlay"></span>
                                            
            
                                            <div class="container">
                                                    <h1>Invoice Payment</h1>
            
                                                    <ul class="breadcrumb">
                                                            <li><a href="index.html">Home</a></li>
                                                            <li><a href="#">Pages</a></li>
                                                            <li class="active">Invoice Payment</li>
                                                    </ul>
                                            </div>
                                    </header>-->

            <section class="container printable"><!-- note class 'printable' - this area is printable only! -->

                <div class="white-row">

                    <!-- INVOICE HEADER -->
                    <div class="row">

                        <div class="col-sm-6">
                            <img class="img-responsive" src="assets/images/logonew.png" alt="" />
                        </div>

                        <!--							<div class="col-sm-6 text-right">
                                                                                        <p>
                                                                                                #0123456789 &bull; <strong>29 June 2014</strong>
                                                                                                <br />
                                                                                                Lid est laborum dolo rumes fugats untras.
                                                                                        </p>
                                                                                </div>-->

                    </div>
                    <!-- /INVOICE HEADER -->

                    <hr class="margin-top10 margin-bottom10" /><!-- separator -->

                    <!-- DETAILS -->
                    <div class="row">

                        <div class="col-sm-6">

                            <h4><strong>Practical Exam</strong> Details</h4>
                            <ul class="list-unstyled">
                                <li><strong>Student Name    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <strong><?php echo $name ?></strong></li>
                                <li><strong>Admission Number&nbsp;:</strong> <strong><?php echo $no  ?></strong></li>
                                <li><strong>Exam Date      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong> <strong><?php echo $examdate ?></strong></li>
                                <!--<li><strong>DOB:</strong> YYYY/MM/DD</li>-->
                            </ul>

                        </div>

                        <div class="col-sm-6">

<!--							<h4><strong>Payment</strong> Details</h4>
                                                        <ul class="list-unstyled">
                                                                <li><strong>Bank Name:</strong> 012345678901</li>
                                                                <li><strong>Account Number:</strong> 012345678901</li>
                                                                <li><strong>SWIFT Code:</strong> SWITCH012345678CODE</li>
                                                                <li><strong>V.A.T Reg #:</strong> VAT5678901CODE</li>
                                                        </ul>-->

                        </div>

                    </div>
                    <!-- /DETAILS -->
                </div>



                <!-- INVOICE BODY -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <strong></strong></h3>
                    </div>

                    <div class="panel-body">

                                                <!--<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>-->






                        <table class="table table-striped" id="resultstbl">
                            <!-- table head -->
                            <thead>
                                <tr>
                                    <th>Vehicle class</th>
<!--                                    <th>Marks</th>-->
                                    <th class="hidden-sm">Status</th>

                                </tr>
                            </thead>

                            <!-- table items -->
                            <tbody>
                                <tr>  
                                    <td>A</td> <td><?php echo $vclassA ?></td>





                        

                                </tr>
                                <tr><td>B</td><td><?php echo $vclassB ?></td></tr>
                                <tr><td>B1</td><td><?php echo $vclassB1 ?></td></tr>
                                <tr><td>G</td><td><?php echo $vclassG ?></td></tr>
                                <tr><td>D</td><td><?php echo $vclassD ?></td></tr>
                                <tr><td>CE</td><td><?php echo $vclassCE ?></td></tr>
          <!--                      <tr> item 
                                        <td>2</td>
                                        <td>LCD Display</td>
                                        <td class="hidden-sm">Side panel with TAC 2.0 ventilation holes</td>
                                        <td>1</td>
                                        <td>$102</td>
                                        <td>$102</td>
                                </tr>
                                <tr> item 
                                        <td>3</td>
                                        <td>Mobile Phone</td>
                                        <td class="hidden-sm">Mesh front panel design to improve the airflow</td>
                                        <td>3</td>
                                        <td>$544</td>
                                        <td>$1632</td>
                                </tr>
                                <tr> item 
                                        <td>4</td>
                                        <td>HDD Disk</td>
                                        <td class="hidden-sm">Stylish mesh front panel strips to maximize air</td>
                                        <td>4</td>
                                        <td>$97</td>
                                        <td>$388</td>
                                </tr>-->
                            </tbody>
                        </table>

                    </div>

                </div>
                <!-- INVOICE BODY -->

                

                <!-- INVOICE FOOTER -->
                <div class="row">

                    <div class="col-sm-6">
                        <h4><strong>Contact</strong> Details</h4>

                        <p class="nomargin nopadding">
                            <strong>Note:</strong> 
                            If you have any issue... Please Contact us
                        </p><br /><!-- no P margin for printing - use <br> instead -->

                        <address>
                            PO Box 38/2 <br>
                            Kandy RD<br>
                            Kurunegala<br />
                            (In front of Imperial Theater)<br />
                            Phone: +94 37 2223 969 <br>
                            info@vijayalearners.com
                        </address>

                    </div>

                    <div class="col-sm-6 text-right">

                        <!--						<ul class="list-unstyled invoice-total-info">
                                                                                <li><strong>Sub - Total Amount:</strong> $2162.00</li>
                                                                                <li><strong>Discount:</strong> 10.0%</li>
                                                                                <li><strong>VAT ($6):</strong> $12.0</li>
                                                                                <li><strong>Grand Total:</strong> $1958.0</li>
                                                                        </ul>-->

                        <div class="padding20">
                            <button class="btn btn-default" onclick="window.print();redirect();" id="printbtn"><i class="fa fa-print"></i> Print</button>            
                            <!--<button class="btn btn-primary">Invoice Submit</button>-->            
                        </div>

                    </div>

                </div>
                <!-- /INVOICE FOOTER -->

            </section>

        </div>
        <!-- /WRAPPER -->



        <!-- FOOTER -->

        <!-- /FOOTER -->


        <script type="text/javascript" src="controllers/resultsearchcontroller.js"></script>
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
    <script type="text/javascript">
                                $(document).ready(function () {


                                   




                                });
                                
                         $('#printbtn').click(function redirect(){
                             
                             
                             document.location.href='index.php';
                             
                             
                             
                         });    
                                
                                
    </script>
    <!-- Mirrored from theme.stepofweb.com/Atropos/v1.7/HTML/page-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Mar 2016 14:10:32 GMT -->
</html>