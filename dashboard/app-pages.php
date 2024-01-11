<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: ../");
    exit();
};

?>
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Finapp</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords"
        content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/icon/favicon.ico" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/capitalone1.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="app-pages.php#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Pages
        </div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="listview-title mt-1">App Pages</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <a href="app-transactions.php" class="item">
                    <div class="icon-box " style="background-color: #026597;">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Transactions
                    </div>
                </a>
            </li>
            <li>
                <a href="app-transaction-detail.php" class="item">
                    <div class="icon-box " style="background-color: #026597;">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Transaction Detail
                    </div>
                </a>
            </li>
            <li>
                <a href="app-transaction-verification.php" class="item">
                    <div class="icon-box " style="background-color: #026597;">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Transaction Verification
                    </div>
                </a>
            </li>
            <li>
                <a href="app-cards.php" class="item">
                    <div class="icon-box " style="background-color: #026597;">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Cards
                    </div>
                </a>
            </li>
            <li>
                <a href="app-savings.php" class="item">
                    <div class="icon-box " style="background-color: #026597;">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Savings
                    </div>
                </a>
            </li>
            <li>
                <a href="app-bills.php" class="item">
                    <div class="icon-box " style="background-color: #026597;">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Bills
                    </div>
                </a>
            </li>
            <li>
                <a href="app-notifications.php" class="item">
                    <div class="icon-box " style="background-color: #026597;">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Notifications
                    </div>
                </a>
            </li>
            <li>
                <a href="app-notification-detail.php" class="item">
                    <div class="icon-box " style="background-color: #026597;">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Notification Detail
                    </div>
                </a>
            </li>
            <li>
                <a href="app-settings.php" class="item">
                    <div class="icon-box " style="background-color: #026597;">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Settings
                    </div>
                </a>
            </li>
        </ul>

        <!-- <div class="listview-title">Cryptocurrency</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <a href="crypto-index.php" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Home
                    </div>
                </a>
            </li>
            <li>
                <a href="crypto-coin-detail.php" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Coin Detail
                    </div>
                </a>
            </li>
            <li>
                <a href="crypto-exchange.php" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Exchange
                    </div>
                </a>
            </li>
            <li>
                <a href="crypto-portfolio.php" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Portfolio
                    </div>
                </a>
            </li>
            <li>
                <a href="crypto-transactions.php" class="item">
                    <div class="icon-box bg-info">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Transactions
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title">Authentication</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <a href="app-login.php" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Login
                    </div>
                </a>
            </li>
            <li>
                <a href="app-register.php" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Register
                    </div>
                </a>
            </li>
            <li>
                <a href="app-forgot-password.php" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Forgot Password
                    </div>
                </a>
            </li>
            <li>
                <a href="app-sms-verification.php" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        SMS Verification
                    </div>
                </a>
            </li>
            <li>
                <a href="app-qr-code.php" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        QR Code Verification
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title">Blog</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <a href="app-blog.php" class="item">
                    <div class="icon-box bg-secondary">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Blog Category
                    </div>
                </a>
            </li>
            <li>
                <a href="app-blog-post.php" class="item">
                    <div class="icon-box bg-secondary">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Blog Post
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title">Theme</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <div class="item">
                    <div class="icon-box " style="background-color: #026597;">
                        <ion-icon name="moon-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Dark Mode</div>
                        <div class="form-check form-switch  ms-2">
                            <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                            <label class="form-check-label" for="darkmodeSwitch"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="listview-title">Home</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <a href="app-home.php" class="item">
                    <div class="icon-box bg-dark">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Discover Home
                    </div>
                </a>
            </li>
        </ul>


        <div class="listview-title">Others</div>
        <ul class="listview image-listview inset mb-3">
            <li>
                <a href="app-about.php" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        About Page
                    </div>
                </a>
            </li>
            <li>
                <a href="app-contact.php" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Contact
                    </div>
                </a>
            </li>
            <li>
                <a href="app-faq.php" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        FAQ
                    </div>
                </a>
            </li>
            <li>
                <a href="app-404.php" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        404
                    </div>
                </a>
            </li>
            <li>
                <a href="app-splash.php" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Splash Icon
                    </div>
                </a>
            </li>
            <li>
                <a href="app-splash-image.php" class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Splash Image
                    </div>
                </a>
            </li>
        </ul>

    </div> -->
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="index.php" class="item">
            <div class="col">
                <ion-icon name="pie-chart-outline"></ion-icon>
                <strong>Overview</strong>
            </div>
        </a>
        <a href="app-pages.php" class="item active">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong>Pages</strong>
            </div>
        </a>
        <a href="app-home.php" class="item">
            <div class="col">
                <ion-icon name="apps-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="app-cards.php" class="item">
            <div class="col">
                <ion-icon name="card-outline"></ion-icon>
                <strong>My Cards</strong>
            </div>
        </a>
        <a href="app-settings.php" class="item">
            <div class="col">
                <ion-icon name="settings-outline"></ion-icon>
                <strong>Settings</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->


    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>


</body>

</html>