<?php
// Include configuration file 
include_once 'config.php';

// Include database connection file 
include_once 'dbConnect.php';
?>
<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8"/>
    <title>Car and tech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="keywords" content="carandtech"/>
    <meta name="keywords" content="vhr"/>
    <meta name="keywords" content="vehiclehistoryreport"/>
    <meta name="description" content="Car and tech"/>
    <meta name="google-site-verification" content="uxsRSGx2WLe3wp7k-6sQY-P1-iBDPoh5Fm5e8HNi098"/>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!-- Site All Style Sheet Css -->
    <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/stylesheets/swiper.min.css" rel="stylesheet"/>
    <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/stylesheets/owl.carousel.min.css" rel="stylesheet"/>
    <link href="assets/stylesheets/owl.theme.default.min.css" rel="stylesheet"/>
    <link href="assets/stylesheets/animate.min.css" rel="stylesheet"/>
    <link href="assets/stylesheets/magnific-popup.css" rel="stylesheet"/>
    <!-- Site Main Style Sheet Css -->
    <link href="assets/stylesheets/style.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,900&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playball&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&amp;display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>

</head>

<body>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/65459833a84dd54dc4885905/1hebtl2jr';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<!-- Start Header Navbar Area -->
<header id="zr-theme-menu" class="zr-theme-menu-header-navber-area">
    <nav class="navbar navbar-b navbar-trans navbar-expand-lg" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="#">
                <img src="assets/images/logo.png" class="white-logo" alt="logo">
                <img src="assets/images/logo-black.png" class="black-logo" alt="logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                    aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"><span></span>
                <span></span> <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll active" href="#slider-home">Home</a></li>

                    <li class="nav-item"><a class="nav-link js-scroll" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="#packages">Packages</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="DemoVHR.pdf" target="_blank">Demo
                            Report</a></li>

                    <li class="nav-item book-now"><a class="nav-link js-scroll" href="#reservation">Buy Now!</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="nav-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="call-to-action text-right">
                        <a href="mailto:support@carandtech.ca"><p><i class="fa fa-envelope-open"></i>
                                support@carandtech.ca</p></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Navbar Area -->

<!-- Start Slider Are -->
<header id="slider-home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/slider-3.jpg" alt="First slide" data-interval="2000">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/slider-1.jpg" alt="Second slide" data-interval="2000">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<!-- End Slider Area -->
<!-- Start Reservation Area -->
<section id="reservation" class="zr-theme-reservation-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                <h2>Reliable Vehicle History Report</h2>
                <h1>in your hands</h1>
                <h5>Within 10 to 15 minutes</h5>
                <div class="mt-20"><a class="button reservation-btn" href="#packages">Buy Now!</a></div>
            </div>
        </div>
    </div>
</section>
<!-- Our Deals Section Start -->
<section id="packages" class="menu-day-area zr-theme-reservation-area section-padding">
    <div class="container">
        <div class="section-title">
            <h5>All Vehicle History Report packages</h5>
            <h2>Our Packages</h2>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="zr-theme-menu-product-info-box ">
                    <h4 class="menu-product-details"><a class="menu-product-title">Bronze</a>
                    </h4>
                    <div class="main-price">$35.99</div>

                    <div class="menu-product-description">
                        <p>Title Information</p>
                    </div>
                    <div class="menu-product-description">
                        <p>Accident History</p>
                    </div>
                    <div class="mt-15">
                        <a href="bronze.php">
                            <input type="hidden" name="package" value="bronze">
                            <input type="hidden" name="bronze_price" value="bronze">
                            <button nid="redirectbronze" class="button grey-btn">Buy Now</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="zr-theme-menu-product-info-box">
                    <h4 class="menu-product-details"><a class="menu-product-title">Gold</a>
                    </h4>
                    <div class="main-price">$59.99</div>
                    <div class="menu-product-description">
                        <p>Title Information</p>
                    </div>
                    <div class="menu-product-description">
                        <p>Accident History</p>
                    </div>
                    <div class="menu-product-description">
                        <p>Liens and Loans</p>
                    </div>
                    <div class="menu-product-description">
                        <p>Odometer Readings</p>
                    </div>

                    <div class="mt-15">
                        <a href="gold.php">
                            <input type="hidden" name="package" value="gold">
                            <button class="button grey-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="zr-theme-menu-product-info-box">
                    <h4 class="menu-product-details">
                        <a class="menu-product-title">platinum</a>
                    </h4>
                    <div class="main-price">$99.99</div>
                    <div class="menu-product-description">
                        <p>Title Information</p>
                    </div>
                    <div class="menu-product-description">
                        <p>Accident History</p>
                    </div>
                    <div class="menu-product-description">
                        <p>Liens and Loans</p>
                    </div>
                    <div class="menu-product-description">
                        <p>Odometer Readings</p>
                    </div>
                    <div class="menu-product-description">
                        <p>Service Records</p>
                    </div>
                    <div class="menu-product-description">
                        <p>Registration History</p>
                    </div>
                    <div class="menu-product-description">
                        <p>Vehicle Identification Number (VIN)</p>
                    </div>

                    <div class="mt-15">
                        <a href="platinum.php">
                            <input type="hidden" name="package" value="platinum">
                            <button class="button grey-btn">Buy Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
<!-- Our Deals Section End -->
<!-- Our Deals Section End -->

<!-- Repair Services Section Start -->
<section id="services" class="theme-repair-services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h5>We offer legit vehicle Report History</h5>
                    <h2>Our VEHICLE HISTORY REPORT</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <!-- single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow zr-theme-single-service fadeInLeft text-center"
                 data-wow-delay="0.2s">
                <div class="zr-theme-single-service-card">
                    <img src="assets/images/services/service-1.png" alt="image"/>
                    <h5>VIN Lookups</h5>
                    <p> Uncover a Vehicle's Hidden History. Accurate reports for confident buying decisions.</p>
                </div>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow zr-theme-single-service fadeInLeft text-center"
                 data-wow-delay="0.2s">
                <div class="zr-theme-single-service-card">
                    <img src="assets/images/services/service-5.png" alt="image"/>
                    <h5>Title Checks</h5>
                    <p>Uncover Ownership History with Confidence. Ensure a Clear Title for Your Vehicle.</p>
                </div>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow zr-theme-single-service fadeInLeft text-center"
                 data-wow-delay="0.2s">
                <div class="zr-theme-single-service-card">
                    <img src="assets/images/services/service-2.png" alt="image"/>
                    <h5>Accident and Salvage Lookups</h5>
                    <p>Gain vital insights into a vehicle's accident history and salvage title status, ensuring informed
                        decisions for buyers and sellers.</p>
                </div>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow zr-theme-single-service fadeInLeft text-center"
                 data-wow-delay="0.2s">
                <div class="zr-theme-single-service-card">
                    <img src="assets/images/services/service-3.png" alt="image"/>
                    <h5>Theft Records Lookups</h5>
                    <p>Uncover a vehicle's theft history with our thorough records lookup service. Gain peace of mind in
                        your vehicle transactions</p>
                </div>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow zr-theme-single-service fadeInLeft text-center"
                 data-wow-delay="0.2s">
                <div class="zr-theme-single-service-card">
                    <img src="assets/images/services/service-4.png" alt="image"/>
                    <h5>sales and backgrounds searches</h5>
                    <p>Unlock comprehensive vehicle history reports for confident sales transactions. Conduct thorough
                        background searches with precision.</p>
                </div>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-6 col-sm-12 wow zr-theme-single-service fadeInLeft text-center"
                 data-wow-delay="0.2s">
                <div class="zr-theme-single-service-card">
                    <img src="assets/images/services/service-6.png" alt="image"/>
                    <h5>Specifications & Equipment</h5>
                    <p>Our reports provide accurate data on accidents, title information, mileage, previous owners, and
                        more, ensuring you make informed decisions.</p>
                </div>
            </div>
            <!-- single service -->
        </div>
    </div>
</section>
<!-- Repair Services Section End -->

<section id="about" class="about section-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">

                    <h1>About Us</h1>
                </div>
            </div>
        </div>

        <div class="row gy-4">
            <div class="col-lg-7">
                <div class="content ps-0 ps-lg-5 aos-init aos-animate" data-aos="fade-right" data-aos-delay="500">
                    <p>
                        Welcome to Car and Tech, your trusted source for comprehensive vehicle history reports in
                        Canada. We deliver precise details on accidents, ownership, and more, guiding your buying or
                        selling decisions. Choose from our tailored plans for a seamless and
                        confident transaction experience.
                    </p>
                    <ul>
                        <li><i class="bi bi-arrow-right-circle-fill"></i> Precision in Every Vehicle History Report</li>
                        <li><i class="bi bi-arrow-right-circle-fill"></i> Trusted by Canadians for Accurate Data</li>
                        <li><i class="bi bi-arrow-right-circle-fill"></i> Experienced Team, Uncompromising on Excellence
                        </li>
                        <li><i class="bi bi-arrow-right-circle-fill"></i> Empowering Decisions with Reliable Information
                        </li>
                        <li><i class="bi bi-arrow-right-circle-fill"></i> Rigorous Verification Process for Utmost
                            Accuracy
                        </li>
                        <li><i class="bi bi-arrow-right-circle-fill"></i> Transparent Operations, Earned Trust with
                            Integrity
                        </li>
                        <li><i class="bi bi-arrow-right-circle-fill"></i> Simplicity: Your Path to Critical Insights
                        </li>
                    </ul>
                    <div class="mt-15">
                        <a class="button grey-btn" href="#packages">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 position-relative aos-init aos-animate" data-aos="fade-left">
                <img src="assets/images/features.png" class="img-fluid rounded-4 mb-4" alt="">
                <div class="img-overlay-right aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <h3><span>20</span>Years Of Experience </h3>
                </div>
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
                            <a href="#"><img src="assets/images/logo-white.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>Delve into the complete history of your vehicle with carandtech.ca - your trusted source
                                for thorough and accurate vehicle history reports</p>
                        </div>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="#slider-home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>

                            <li><a href="#packages">Our Packages</a></li>

                            <li><a href="#reservation">Buy Now</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>About</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don't miss to legit report of your vehicle history so you can easily sale it</p>
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
                        <a href="#">
                            <img src="assets/images/footer-logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#home">Home</a></li>
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