<?php 
session_start();
include_once 'dbConnect.php';

$pid = $_SESSION['product_id'];

$insert = $db->query("UPDATE product SET status='cancelled' where id='".$pid."'");
session_destroy();
?>

<head>
    <meta charset="utf-8" />
    <title>Car and tech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="keywords" content="carandtech" />
    <meta name="keywords" content="vhr" />
    <meta name="keywords" content="vehiclehistoryreport" />
    <meta name="description" content="Car and tech" />
    <meta name="google-site-verification" content="uxsRSGx2WLe3wp7k-6sQY-P1-iBDPoh5Fm5e8HNi098" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!-- Site All Style Sheet Css -->
    <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/stylesheets/swiper.min.css" rel="stylesheet" />
    <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/stylesheets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/stylesheets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/stylesheets/animate.min.css" rel="stylesheet" />
    <link href="assets/stylesheets/magnific-popup.css" rel="stylesheet" />
    <!-- Site Main Style Sheet Css -->
    <link href="assets/stylesheets/style.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playball&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&amp;display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	
</head>

<body>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65459833a84dd54dc4885905/1hebtl2jr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
   <!-- Start Header Navbar Area -->
   <header id="zr-theme-menu" class="zr-theme-menu-header-navber-area">
        <nav class="navbar navbar-b navbar-trans navbar-expand-lg" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll" href="index">
                    <img src="assets/images/logo.png" class="white-logo" alt="logo">
                    <img src="assets/images/logo-black.png" class="black-logo" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"> <span></span>  <span></span>  <span></span> 
			</button>
                <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link js-scroll active" href="index#slider-home">Home</a></li>
                        
                        <li class="nav-item"><a class="nav-link js-scroll" href="index#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll" href="index#packages">Packages</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll" href="DemoVHR.pdf" target="_blank">Demo Report</a></li>
                        
                        <li class="nav-item book-now"><a class="nav-link js-scroll" href="index#reservation">Buy Now!</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <div class="nav-top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="call-to-action text-right">
                        <a href="mailto:support@carandtech.ca"> <p><i class="fa fa-envelope-open"></i> support@carandtech.ca</p></a>
                        <a href="tel:+1 705 710 6178"> <p><i class="fa fa-phone"></i> Phone: +1 705 710 6178</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Navbar Area -->
    <section id="reservation" class="zr-theme-reservation-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                    <h2>Reliable Vehicle History Report</h2>
                    <h1>in your hands</h1>
                    <h5>Within 10 to 15 minutes in your hand</h5>
                    <h1>but you cancelled it</h1>
                    <h2>Thank You!!</h2>
                    <a href="index" class="button reservation-btn">Back to Home</a>
                </div>
            </div>
        </div>
</section>


<!-- Footer Section Start -->
<footer class="footer-section">
        <div class="container">
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index"><img src="assets/images/logo-white.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Delve into the complete history of your vehicle with carandtech.ca - your trusted source for thorough and accurate vehicle history reports</p>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="index#slider-home">Home</a></li>
                                <li><a href="index#about">About</a></li>
                                <li><a href="index#services">Services</a></li>
                                                              
                                <li><a href="index#packages">Our Packages</a></li>
                                
                                <li><a href="index#reservation">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>About</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don't miss to legit report of  your vehicle history so you can easily sale it</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <a href="index">
                            <img src="assets/images/footer-logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="index#home">Home</a></li>
                                <li><a href="termsandcondition.php">Terms & Conditions</a></li>
                                <li><a href="privacyandpolicy.php">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Back to Top Start -->
    <div class="back-to-top">
        <i class="fa fa-caret-up"></i><i class="fa fa-caret-up"></i>
    </div>
    <!-- Back to Top End -->

    <!-- Start Page Preloader Area -->
    <div class="preloader" id="zr-theme-preloader">
        <div class="preloader-wapper">
            <div>
                <div class="lds-facebook" id="zr-theme-preloader">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Preloader Area -->
    
    <!-- Site All Jquery Js -->
    <script src="assets/javascript/jquery-3.5.1.min.js"></script>
    <script src="assets/javascript/bootstrap.min.js"></script>
    <script src="assets/javascript/plugins.js"></script>
    <script src="assets/javascript/swiper.min.js"></script>
    <script src="assets/javascript/wow.min.js"></script>
    <script src="assets/javascript/validator.min.js"></script>
    <script src="assets/javascript/contact.js"></script>
    <script src="assets/javascript/main.js"></script>
    
</body>




</html>