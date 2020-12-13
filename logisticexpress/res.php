<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['submit']))
{
    $vault_id = $_POST['vault_id'];
    $server = "localhost";
    $name = "sec";
    $username = "root";
    $password = "";
    
    try {
        $pdo = new PDO("mysql:host=$server;dbname=$name", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
    

        $sql = "SELECT * FROM sec_table WHERE vault_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$vault_id]);
        $results = $stmt->fetchAll(PDO::FETCH_OBJ);
        if(sizeof($results) < 1)
        {
            $_SESSION['error_html'] = "Please check your vault id.";
            $_SESSION['error'] = "alert alert-danger";
            echo "error";
            header("location: check.php");
            exit();
        }
        else
        {
            foreach ($results[0] as $key => $value) {
                if($key == "name"){
                    $name = $value;
                }
                if($key == "vault_id")
                    $ref = $value;
                if($key == 'nationality')
                    $nationality = $value;
                if($key == "address")
                    $address = $value;
                if($key == "purpose")
                    $purpose = $value;
                if($key == "date_of")
                    $date_of = $value;
                if($key == "item")
                    $item = $value;
                if($key == "contents")
                    $contents = $value;
                if($key == "charges")
                    $charges = $value;
                if($key == "amount_deposited")
                    $amount_deposited = $value;
                if($key == "remarks")
                    $remarks = $value;
                if($key == "your_ref")
                    $your_ref = $value;
            }
            
            
            ?>


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

        <div class="container mt-4 mb-4" style="background-color: #f15e23; margin: auto; border-radius: 20px;">
            <div class="table-responsive">
                <h2 class="text-center pt-2">
                    Vault Details for Vault Id <?php echo $vault_id ?>
                </h2>
                <div class="row text-white">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <p class="text-center">
                            Our Ref: <span>
                                <?php echo $ref ?>
                            </span>
                        </p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <p class="text-center">
                            Your Ref: <span>
                                <?php
                                    echo $your_ref;
                                ?>
                            </span>
                        </p>

                    </div>
                </div>
                <table class="table text-white">

                    <tbody>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                NAME OF DEPOSITOR
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace; ">
                                <?php 
                                    echo $name;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                NATIONALITY
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace;">
                                <?php 
                                    echo $nationality;
                                    
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                ADDRESS OF DEPOSITOR
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace;">
                                <?php 
                                    echo $address;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                PURPOSE OF DEPOSITOR
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace;">
                                <?php 
                                    echo $purpose;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                DATE OF DEPOSITOR
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace;">
                                <?php 
                                    echo $date_of;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                ITEM DEPOSITED
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace;">
                                <?php 
                                    echo $item;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                REFERENCE CODE
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace;">
                                <?php 
                                    echo $ref;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                CONTENTS / VALUE
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace;">
                                <?php 
                                    echo $contents;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                CHARGES PER MONTH
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace;">
                                <?php 
                                    echo $charges;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                AMOUNT DEPOSITED
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace;">
                                <?php 
                                    echo $amount_deposited;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="font-size: 1.3rem;">
                                REMARKS
                            </td>
                            <td style="font-size: 1.3rem; font-family:'Courier New', Courier, monospace;">
                                <?php 
                                    echo $remarks;
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
        e.preventDefault();
        var vault_id = $("#vault_id").val();

        if (!vault_id == "") {

        } else {
            $("#error").addClass("alert alert-danger");
            $("#error").html("Please enter your vault id.");
            alert("kk")
        }

        alert("here");
    })
    </script>
</body>

</html>

<?php

 }
            
        
    
}else{
    header("location: check.php");
    exit();
}
?>