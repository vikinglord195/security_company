<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Presidential Security Lines (PSL) </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="http://presidentialshippinglines.com">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo/fav/favicon-16x16.png">
    <link rel="manifest" href="assets/img/logo/fav/site.webmanifest">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>


    <header>

        <div class="header-area">
            <div class="main-header ">

                <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">

                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <main>

        <div class="slider-area ">
            <div class="slider-active">

                <div class="single-slider slider-height d-flex align-items-center">
                    <section class="contact-form-area section-bg  pt-115 pb-120 fix">
                        <div class="container">
                            <div class="row justify-content-end ml-auto">

                                <div class="col-xl-12 col-lg-12 ">
                                    <div class="contact-form-wrapper">

                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="section-tittle mb-50">
                                                    <span>Welcome Back</span>
                                                    <h2></h2>
                                                    <p>We are always working round the clock to deliver the best
                                                        service.</p>
                                                    <p>
                                                        Please enter your 20 character code (Vault Id) to check your
                                                        safety deposit box.
                                                    </p>
                                                    <p>
                                                        If you are looking to track a shipment please visit
                                                        <a href="http://www.presidentialshippinglines.com"
                                                            target="_blank" style="color: #F15E23;">Presidential
                                                            Shipping Lines</a>
                                                    </p>

                                                    <p id="error" class='<?php if(isset($_SESSION['error']))
                                                            {
                                                                echo $_SESSION['error'];
                                                                unset($_SESSION['error']);
                                                            }
                                                            ?>'>
                                                        <?php
                                                            if(isset($_SESSION['error_html']))
                                                            {
                                                                echo $_SESSION['error_html'];
                                                                unset($_SESSION['error_html']);
                                                            }
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <form action="res.php" method="POST" class="contact-form" id="push">
                                            <div class="row ">

                                                <div class="col-lg-12">
                                                    <div class="input-form">
                                                        <input type="text" name="vault_id" id="vault_id"
                                                            placeholder="Vault ID">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <button type="submit" name="submit" id="sub"
                                                        class="submit-btn">Vault Status</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>


        <div class="our-info-area pt-70 pb-40 animate__animated animate__lightSpeedInLeft">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-info mb-30 m-auto">
                            <div class="info-icon">
                                <span class="flaticon-support"></span>
                            </div>
                            <div class="info-caption">
                                <p>24/7 Support</p>
                                <span>We are here to help</span>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="m-auto ">
                                <a href="contact.html" class="btn header-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </main>
    <footer>

        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top footer-padding">

                    <div class="footer-heading">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="wantToWork-caption wantToWork-caption2">
                                    <h2>We Understand The Importance Approaching Each Work!</h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <a href="contact.html" class="btn header-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>COMPANY</h4>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="stroage.html">STORAGE OF GOLD AND RARE METALS</a></li>
                                        <li><a href="money.html"> MONEY & TREASURE DEPOSIT BOXES</a></li>
                                        <li><a href="safe.html"> SAFE & SECURE COURIER SERVICES</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Open hour</h4>
                                    <ul>
                                        <li><a href="#">Monday 11am-7pm</a></li>
                                        <li><a href="#"> Tuesday-Friday 11am-8pm</a></li>
                                        <li><a href="#"> Saturday 10am-6pm</a></li>
                                        <li><a href="#"> Sunday 11am-6pm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                            <div class="single-footer-caption mb-50">

                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">
                                            Presidential Security Lines (PSL) offers several benefits over a traditional
                                            bank safe deposit box. However, the largest benefit remains the anonymity we
                                            offer. We do not require identification or verification of your identity
                                            when you rent a box from
                                            us.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Copyright &copy;
                                    <script>
                                    document.write(new Date().getFullYear());
                                    </script> All rights reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <div id="back-top">
        <a title="Go to Top" href="index.html#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/animated.headline.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>

    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');


    $("#sub").click((e) => {

        var vault_id = $("#vault_id").val();

        if (!vault_id == "") {
            if (vault_id.length < 17) {
                e.preventDefault();
                alert(redirect)
                $("#error").addClass("alert alert-danger");
                $("#error").html("Please check your vault id.");
            } else {
                $("#error").removeClass("alert alert-danger");
                $("#error").html("");
            }

        } else {
            e.preventDefault();
            $("#error").addClass("alert alert-danger");
            $("#error").html("Please enter your vault id.");
        }


    })
    </script>
</body>

</html>