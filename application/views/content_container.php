
<!DOCTYPE HTML>
<html>
     <head>
        <title>ঢাকা বিভাগীয় কমিশনার</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--        <meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />-->
        <script type="application/x-javascript"> 
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
                </script>
        <link href="<?php echo  base_url();?>css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
        <!--Custom-Theme-files-->
        <link href="<?php echo  base_url();?>css/style.css" rel='stylesheet' type='text/css' />	
        <script src="<?php echo base_url();?>js/jquery.min.js"></script>
        <!--/script-->
        <script type="text/javascript" src="<?php echo  base_url();?>js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo  base_url();?>js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
                });
            });
        </script>

    </head>
    <body>
        <!-- header-section-starts -->
        <div class="h-top" id="home">
            <div class="top-header">
                <div class="h-top" id="home">
                

                    <img  class="image-logo img-responsive" src="<?php echo base_url(); ?>images/logo.png ">

                        <div class="clearfix"></div>
                   
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <div class="full">
            <div class="col-md-3 top-nav">
                <div class="logo">
<!--                    <a href="index.html"><h1>Blogger</h1></a>-->
                </div>
                <div class="top-menu">
                    <span class="menu"> </span>

                    <ul class="cl-effect-16">
                        <li><a class="active" href="<?php echo base_url(); ?>home_controller" data-hover="প্রচ্ছদ">প্রচ্ছদ</a></li> 
                        <li><a href="<?php echo base_url(); ?>user_view_controller/bibag_poriciti_show" data-hover="বিভাগ পরিচিতি">বিভাগ পরিচিতি</a></li>
                        <li><a href="<?php echo base_url(); ?>user_view_controller/bibagio_commisioner_bani_show" data-hover="বিভাগীয় কমিশনারের বাণী">বিভাগীয় কমিশনারের বাণী</a></li>
                        <li><a href="<?php echo base_url(); ?>user_view_controller/profile_show" data-hover="বিভাগীয় কমিশনারের প্রোফাই">বিভাগীয় কমিশনারের প্রোফাইল</a></li>
                        
                        
                        <li><a href="<?php echo base_url(); ?>user_view_controller/employ_list_show" data-hover="কর্মকর্তাবৃন্দ">কর্মকর্তাবৃন্দ</a></li>
                        
                        
                        

                        <li><a href="<?php echo base_url(); ?>user_view_controller/jayla_prosasok_show" data-hover="জেলা প্রশাসক">জেলা প্রশাসক</a></li>
                        <li><a href="<?php echo base_url(); ?>user_view_controller/otirikto_jayla_prosasok_show" data-hover="অতিরিক্ত জেলা প্রশাসক">অতিরিক্ত জেলা প্রশাসক</li>
                        <li><a href="<?php echo base_url(); ?>user_view_controller/upozila_nirbahi_officer_show" data-hover="উপজেলা নির্বাহী অফিসার">উপজেলা নির্বাহী অফিসার</li>
                        <li><a href="<?php echo base_url(); ?>user_view_controller/sohokari_commisioner_show" data-hover="সহকারি কমিশনার(ভূমি)">সহকারি কমিশনার(ভূমি)</li>
                        
                        
                        <li><a href="<?php echo base_url();?>user_view_controller/kormochari_list_show" data-hover="কর্মচারীবৃন্দ">কর্মচারীবৃন্দ</a></li>
                        
                        
                        


                    </ul>
                    <!-- script-for-nav -->
                    <script>
                        $("span.menu").click(function () {
                            $(".top-menu ul").slideToggle(300, function () {
                                // Animation complete.
                            });
                        });
                    </script>
                    <!-- script-for-nav --> 	
                    <ul class="side-icons">
                        <li><a class="fb" href="#"></a></li>
                        <li><a class="twitt" href="#"></a></li>
                        <li><a class="goog" href="#"></a></li>
                        <li><a class="drib" href="#"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 main">
                <!--banner-section-->
                <div class="banner-section">
                    <!--<h3 class="tittle">General <i class="glyphicon glyphicon-picture"></i></h3>-->
                    <div class="banner">
                     <?php
                        echo $view_output;
                        ?>
                        <!--banner-->
                        <script src="<?php echo  base_url();?>js/responsiveslides.min.js"></script>
                        <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager: true,
                                nav: true,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                        </script>
                        <div class="clearfix"> </div>

                    </div>
                    <!--//banner-->
                    <!--/top-news-->
                    <div class="top-news">

                    </div>
                    <!--//top-news-->
                </div>
                <!--//banner-section-->
                <div class="banner-right-text">
                    <!--<h3 class="tittle">News  <i class="glyphicon glyphicon-facetime-video"></i></h3>-->
                    <!--/general-news-->
                    <div class="general-news">
                        <div class="general-inner">
                            <div class="general-text">
                                <h5 class="tittle" style="background-color:#F26649;padding:13px;text-align:center;color: white;  ">বিভাগীয় কমিশনারের বাণী </h5>
                                <a href="single.html"><img src="<?php echo  base_url();?>images/gen1.jpg" class="img-responsive" alt=""></a>

                                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                                <a href="#">Read More.....</a>
                            </div>
                            <div class="edit-pics">
                                <h5 class="tittle" style="background-color:#F26649;padding:13px;text-align:center;color: white;  ">নোটিশ বোর্ড</h5>
                                <div class="editor-pics">
                                
                                    <div class="col-md-9 item-details">
                                        <h5 class="inner two"><a href="single.html">1.New iPad App to simulate your Guitar</a></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="editor-pics">
                                 
                                    <div class="col-md-9 item-details">
                                        <h5 class="inner two"><a href="single.html">2.New iPad App to simulate your Guitar</a></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="editor-pics">
                                   
                                    <div class="col-md-9 item-details">
                                        <h5 class="inner two"><a href="single.html">3.New iPad App to simulate your Guitar</a></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="editor-pics">
                                
                                    <div class="col-md-9 item-details">
                                        <h5 class="inner two"><a href="single.html">4.New iPad App to simulate your Guitar</a></h5>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="media">	
                                <h5 class="tittle" style="background-color:#F26649;padding:13px;text-align:center;color: white;  ">App</h5>
                                <div class="general-text two">
                                    <a href="single.html"><img src="<?php echo  base_url();?>images/gen3.jpg" class="img-responsive" alt=""></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>	
                    <!--//general-news-->
                    <!--/news-->
                    <!--/news-->
                </div>
                <div class="clearfix"> </div>
                <!--/footer-->
                <div class="footer">
                    <div class="footer-top">
                        <div class="col-md-4 footer-grid">
                            <div class="session-msg">
                                <?php echo $this->session->userdata('message'); ?>
                            </div>
                            <form action="<?php echo base_url() ?>login_controller/login_function" method="post">
                                <table>
                                    <caption style="color:white">Sign In</caption>
                                    <tr><td>&nbsp;</td></tr>


                                    <tr>
                                        <td> <input class="form-control" placeholder="User Name" name="user_name"><td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr>
                                        <td> <input class="form-control" type="password" placeholder="Password" name="password"><td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                    <tr>
                                        <td> <input class="btn btn-primary" type="submit" value="Submit"><td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="col-md-4 footer-grid">
                            <h4>আমাদের কাছে লিখুন</h4>
                            <ul class="bottom">
                                <li><i class="glyphicon glyphicon-home"></i>Available 24/7 </li>
                                <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">mail@example.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 footer-grid">
                           <h4>যোগাযোগের ঠিকানা</h4>
                            <ul class="bottom">
                                <li><i class="glyphicon glyphicon-map-marker"></i>2901 Glassgow Road, WA 98122-1090 </li>
                                <li><i class="glyphicon glyphicon-earphone"></i>phone: (888) 123-456-7899 </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="copy">
                     <p>&copy; 2016 ঢাকা বিভাগীয় কমিশনার. All Rights Reserved | Design by  <a href="http://css-bd.com/">Codex Software Solution LTD</a> </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>	
        <!--//footer-->
        <!--start-smooth-scrolling-->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


    </body>
</html>