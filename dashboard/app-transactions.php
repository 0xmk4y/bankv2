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
    <title>CapitalOne</title>
    <meta name="description" content="CapitalOne HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
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
            <a href="app-transactions.php#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Transactions
        </div>
        <div class="right">
            <a href="app-notifications.php" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Today</div>
            <div class="transactions">
                <!-- item -->
                <a href="app-transaction-detail-1.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Amazon</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 150</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail-2.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Apple</strong>
                            <p>Appstore Purchase</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger">- $ 29</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail-3.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/avatar/avatar3.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Alex Ljung</strong>
                            <p>Transfer</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price">+ $ 1,000</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail-4.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/avatar/avatar4.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Beatriz Brito</strong>
                            <p>Transfer</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger">- $ 186</div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Yesterday</div>
            <div class="transactions">
                <!-- item -->
                <a href="app-transaction-detail-1.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Amazon</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 150</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail-2.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Apple</strong>
                            <p>Appstore Purchase</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger">- $ 29</div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Sep 20, 2020</div>
            <div class="transactions">
                <!-- item -->
                <a href="app-transaction-detail.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/3.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Envato</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 24</div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Sep 14, 2020</div>
            <div class="transactions">
                <!-- item -->
                <a href="app-transaction-detail-1.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Amazon</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 1,500</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail-2.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Apple</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 150</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail-5.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/avatar/avatar7.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Lara Madrigal</strong>
                            <p>Transfer</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 550</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail-6.php" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/avatar/avatar6.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Dina Glenn</strong>
                            <p>Transfer</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 620</div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <div class="section mt-2 mb-2">
            <a href="app-transactions.php#" class="btn btn-primary btn-block btn-lg">Load More</a>
        </div>


    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="index.php" class="item">
            <div class="col">
                <ion-icon name="pie-chart-outline"></ion-icon>
                <strong>Overview</strong>
            </div>
        </a>
        <a href="app-pages.php" class="item">
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