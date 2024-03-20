<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8"/>
    <title>Car and tech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="keywords" content="carandtech"/>
    <meta name="description" content="Car and tech"/>
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
            <a class="navbar-brand js-scroll" href="index">
                <img src="assets/images/logo.png" class="white-logo" alt="logo">
                <img src="assets/images/logo-black.png" class="black-logo" alt="logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                    aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"><span></span>
                <span></span> <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item book-now"><a class="nav-link js-scroll" href="index">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="termsandcondition.php">Terms and
                            condition</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="privacyandpolicy.php">privacy and
                            policy</a></li>

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


<!-- Start Reservation Area -->
<section id="reservation" class="zr-theme-reservation-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                <h2><br></h2>


            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                <h2>Reliable Platinum Vehicle History Report</h2>


            </div>
        </div>
    </div>

    <!-- End Reservation Area -->


    <!-- Repair Services Section Start -->
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <?php

            // Include configuration file
            include_once 'config.php';

            // Include database connection file
            include_once 'dbConnect.php';
            ?>


            <form action="<?php echo PAYPAL_URL; ?>" method="post" id="paypal_form">
                <input type="hidden" name="business" border="1" value="<?php echo PAYPAL_ID; ?>">

                <!-- Important For PayPal Checkout -->
                <label></label>
                <input type="text" name="item_name" id="item" placeholder="Enter VIN NUMBER" required
                       style="background-color: white;"><br><br>

                <input type="text" name="email" id="email" required placeholder="Enter Your Email"
                       style="background-color: white;"><br><br>

                <input type="text" name="phoneno" id="phoneno" required placeholder="Enter phone no" required
                       style="background-color: white;"><br><br>
                <label style="display:none">price</label>
                <input style="display:none" type="number" required name="amount" id="amount" value="99.99" readonly>
                <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">

                <!-- Specify a Buy Now button. -->
                <input type="hidden" name="cmd" value="_xclick">
                <!-- Specify URLs -->
                <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
                <br><br>
                <!-- Display the payment button. -->
                <!-- comment by adil -->
                <!--<input type="submit" name="submit" border="0" value="Buy" class="button reservation-btn">-->
                <!-- comment by adil -->

                <label class="form-control font-weight-bold">Package: Platinum || Price: $99.99</label>
                <?php include('process_paypal_payment.php'); ?>
                <br><br><br><br>
            </form>


            <script type="text/javascript">
                jQuery(document).ready(function () {
                    jQuery("#paypal_form").submit(function () {
                        setDatap(jQuery("#amount").val(), jQuery("#item").val(), jQuery("#email").val(), jQuery("#phoneno").val());
                    });

                    function setDatap(amount, item, email, phoneno) {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function () {

                        };
                        xhttp.open("GET", "insertData.php?amount=" + amount + "&item=" + item + "&email=" + email + "&phoneno=" + phoneno, true);
                        xhttp.send();
                    }
                });

            </script>
        </div>
        <div class="col-lg-4"></div>
    </div>

    <!-- Repair Services Section End -->


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
                        <img src="assets/images/footer-logo.png">
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