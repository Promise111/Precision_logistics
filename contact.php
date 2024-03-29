<?php
$username = $email = $phone = $subject = $message = "";
    if (isset($_POST['submit'])){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);
    }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from t.commonsupport.com/induzin/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 14:27:59 GMT -->
<head>
<meta charset="utf-8">
<title>Precision Logistics | Contact Page</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon"> -->

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header header-style-three">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left">
                    <ul class="contact-info">
                        <li><span class="icon fa fa-phone-volume icon__white"></span><a href="tel:+234017101021">+(234) 01-7101021</a> <a href="tel:+2348022245814">+(234) 802-224-5814</a></li>
                        <li><span class="icon fa fa-clock icon__white"></span> Working Hours: Mon - Fri: 09:00 am - 18:00 pm</li>
                    </ul>
                </div>

                <div class="top-right clearfix">
                    <ul class="social-icon-one clearfix">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!--Header Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="main-box clearfix">
                    <div class="logo-outer">
                        <div class="logo"><a href="index.php"><img src="images/precision_logo.jpeg" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.php">Home</a>                              
                                    </li>
                                    <li class="dropdown"><a href="about.php">About Us<span class="dd">+</span></a>
                                        <ul>
                                            <li><a href="HSE.php">Corporate Certificates & HSE Policies</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="services.php">Our Services<span class="dd">+</span></a>
                                        <ul>
                                            <li><a href="products.php">Our Products</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="clients.php">Clients</a>
                                    </li>
                                    <li><a href="partners.php">Partners</a>
                                    </li>
                                    <li><a href="career.php">Careers</a>
                                    </li>
                                    <li class="current"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box">

                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" title=""><img src="images/precision_logo.jpeg" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                             <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-close-1"></span></div>
            
            <nav class="menu-box">
            	<div class="nav-logo"><a href="index.php"><img src="images/precision_logo.jpeg" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                
                <div class="social-links">
                	<ul class="clearfix">
                    	<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-dribbble-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube-square"></span></a></li>
                        <li><a href="#"><span class="fa fa-envelope-square"></span></a></li>
                    </ul>
                </div>
                
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <div class="titl">Customer Service focused on need, flexible, <br/>timely and at the right price</div>
        </div>
        <!--Page Info-->
        <div class="page-info"> 
            <div class="auto-container clearfix">
                <ul class="bread-crumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <!--End Page Info-->
    </section>
    <!--End Page Title-->

    <!--Services Section-->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">our information</span>
                <h2>Get In Touch</h2>
            </div>

            <div class="row clearfix">
                <!--Column-->
                <div class="column col-lg-8 col-md-12 col-sm-12">
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <!--Contact Form-->
                        <form method="post" action="contact.html" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>
                                
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                                
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="btn-title">Send Message</span></button>
                                </div>
                                
                            </div>
                        </form>
                            
                    </div>
                    <!--End Contact Form -->
                </div>
                <!--Column-->
                <div class="column col-lg-4 col-md-12 col-sm-12">
                    <div class="text">Feel free to get in touch. We are always open to discussing new projects, creative ideas or opportunities to be part of your visions</div>

                    <ul class="contact-info">
                        <li>
                            <span class="icon fa fa-globe"></span> 
                            <strong>Location </strong>
                            25/27, UDO WOGU DRIVE CHEVY VIEW ESTATE
                            Off Chevron Drive Lekki Lagos, Nigeria
                        </li>

                        <li>
                            <span class="icon fa fa-phone-volume"></span>
                            <strong>Call Center</strong>
                            <a href="tel:+2348022245814">+(234) 802-224-5814</a>, <a href="tel:+234017101021">+(234) 01-7101021</a>
                        </li>

                        <li>
                            <span class="icon fa fa-envelope-open"></span>
                            <strong>Email Us</strong> 
                            <a href="mailto:info@precision-logistics.com">info@precision-logistics.com</a>
                        </li>
                    </ul>
                    <ul class="social-icon-three">
                        <li class="title">Follow Us</li>
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section-->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <!-- Social Outer -->
            <div class="map-outer">
                <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Envato"
                    data-icon-path="images/icons/map-marker.png"
                    data-content="Lagos, Nigeria<br/><a href='mailto:info@precision-logistics.com>info@precision-logistics.com </a>">
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Map Section -->

    <!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="https://www.addaxpetroleum.com/company/about-us"><img src="images/clients/addax.png" alt="ADDAX"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://www.chevron.com/about"><img src="images/clients/chevron.jpg" alt="CHEVRON"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://www.total.com/en/group/identity"><img src="images/clients/total.jpg" alt="TOTAL"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://www.subsea7.com/en/index.html"><img src="images/clients/subsea7.jpg" alt="SUBSEA7"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://nigerdock.com/about-us/"><img src="images/clients/nigerdockk.jpg" alt="NIGERDOCKK"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://www.shell.com/about-us.html"><img src="images/clients/shell.png" alt="SHELL"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="http://www.pacificdrilling.com/Company/default.aspx"><img src="images/clients/p.jpg" alt="PACIFIC DRILLING"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://www.saipem.com/en/saipem-in-the-world"><img src="images/clients/saipem.jpg" alt="SAIPEM"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://www.seadrill.com/about-us"><img src="images/clients/ss.png" alt="SEADRILL"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="http://nlng.com/Our-Company/Pages/Profile.aspx"><img src="images/clients/nlng.jpg" alt="NLNG"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://www.bwoffshore.com/company/"><img src="images/clients/bw.jpg" alt="BW"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://seplatpetroleum.com/about-us/"><img src="images/clients/sss.png" alt="SSS"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="http://www.sevenenergy.com/about-us"><img src="images/clients/seven.jpg" alt="SEVEN"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://www.tullowoil.com/about-us"><img src="images/clients/tt.jpg" alt="TT"></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="https://www.modec.com/about/index.html"><img src="images/clients/modec.jpg" alt="MODEC"></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!--Widgets Section-->
        <div class="widgets-section" style="background-image: url(images/background/2.jpg);">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-8 col-lg-8 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <h3 style="color:#081b77; font-weight: bold; margin-bottom: 55px;">&nbsp;</h3>
                                    <div class="text">
                                        <p>We provide Engineering, Procurement, Construction and <br/>Maintenance services to the major Oil and Gas Operators <br/>in Nigeria and have continued to generate innovative and <br/>cost effective Value Added Solutions to our Clients.</p>                                
                                    </div>
                                    <ul class="social-icon-two">
                                        <li class="title">Follow Us:</li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <h2 class="widget-title">Quick Links</h2>
                                    <ul class="user-links">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="services.php">Our Services</a></li>
                                        <li><a href="career.php">Careers</a></li>
                                        <li><a href="contact.php">contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="row">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li>
                                                <span class="icon flaticon-clock-1 icon__white"></span>
                                                <strong class="icon_white icon__white">Office Hours</strong>
                                                <div class="text">Mon - Fri: 09:00 am - 05:00 pm</div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-worldwide icon__white"></span>
                                                <div class="text">25/27, UDO WOGU DRIVE CHEVY VIEW ESTATE<br>Off Chevron Drive Lekki Lagos, Nigeria.</div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-mails icon__white"></span>
                                                <div class="text"><a href="tel:+234017101021">+(234) 01-7101021</a> <a href="tel:+2348022245814">+(234) 802-224-5814</a><br><a href="mailto:info@precision-logistics.com">info@precision-logistics.com</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="footer-nav">
                        <ul class="clearfix">
                           
                           <li><a href="contact.php">Contact</a></li> 
                           <li><a href="services.php">Services</a></li>  
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                        <p><script>document.write(new Date().getFullYear())</script> © All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/scrollbar.js"></script><script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>

<!-- Mirrored from t.commonsupport.com/induzin/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2019 14:28:25 GMT -->
</html>