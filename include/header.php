<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php';?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>

    <!-- Header Section Start -->
    <div class="header-top wow bounceInLeft" style="animation-duration: 1.5s;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-detail">
                    <div class="header-location">
                        <a href=""><i class='bx bx-map'></i></a>
                        <p>Jl. Raya Ubud No.88, Bali 80571</p>
                    </div>
                    <div class="header-location">
                        <a href=""><i class='bx bx-phone-call'></i></a>
                        <p>(+62) 81 2345 1234</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-time">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-main wow bounceInDown center" style="animation-duration: 1.5s;">
        <div class="container">
            <div class="row">
                    <div class="col-lg-2" data-aos="fade-up">
                        <div class="header-logo">
                           <a href="index.php"><img src="images/logo-noot.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="header-nav" data-aos="zoom-in">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="">Adaptogens</a></li>
                                <li><a href="">Anxiolytics (Anti-Anxiety)</a></li>
                                <li><a href="">Antioxidants</a></li>
                                <li><a href="">Neuroprotection</a></li>
                                <li><a href="">Memory Enhancers</a></li>
                                <li><a href="">Neuroprotection</a></li>
                                <li><a href="">Mood Regulation</a></li>
                                <li><a href="">Synthetic Nootropics</a></li>
                                <li><a href="">Nootropics Guides</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="header-end">
                            <div class="header-icon">
                                <a href=""><img src="images/3 - bag.png" alt=""></a>
                                <a href=""><img src="images/user-login.png" alt=""></a>
                            </div>
                            <div class="header-btn">
                                <a href="">Sign Up</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </header>


    <!-- Header Section End -->
    