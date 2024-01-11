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
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="crypto-coin-detail.php#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Bitcoin (BTC)
        </div>
        <div class="right">
            <a href="app-notifications.php" class="headerButton" data-bs-toggle="modal"
                data-bs-target="#actionSheetShare">
                <ion-icon name="share-social-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- Share Action Sheet -->
    <div class="modal fade action-sheet inset" id="actionSheetShare" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Share with</h5>
                </div>
                <div class="modal-body">
                    <ul class="action-button-list">
                        <li>
                            <a href="crypto-coin-detail.php#" class="btn btn-list" data-bs-dismiss="modal">
                                <span>
                                    <ion-icon name="logo-facebook"></ion-icon>
                                    Facebook
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="crypto-coin-detail.php#" class="btn btn-list" data-bs-dismiss="modal">
                                <span>
                                    <ion-icon name="logo-twitter"></ion-icon>
                                    Twitter
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="crypto-coin-detail.php#" class="btn btn-list" data-bs-dismiss="modal">
                                <span>
                                    <ion-icon name="logo-instagram"></ion-icon>
                                    Instagram
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="crypto-coin-detail.php#" class="btn btn-list" data-bs-dismiss="modal">
                                <span>
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                    Linkedin
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- * Share Action Sheet -->

    <!-- App Capsule -->
    <div id="appCapsule">


        <!-- Coin Status -->
        <div class="section full gradientSection">
            <div class="in coin-head">
                <h1 class="total">$ 32,517.50</h1>
                <h4 class="caption">
                    <span class="iconbox text-success">
                        <ion-icon name="caret-up"></ion-icon>
                    </span>
                    $2,325.19 <strong>(+1.50%)</strong>
                </h4>
            </div>
        </div>
        <!-- * Coin Status -->


        <!-- Coin Chart -->
        <div class="section mb-2">

            <div class="card coin-chart">
                <div class="card-body pt-1">
                    <!-- tabs -->
                    <ul class="nav nav-tabs lined" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="crypto-coin-detail.php#tab-24h" role="tab">
                                24H
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="crypto-coin-detail.php#tab-1w" role="tab">
                                1W
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="crypto-coin-detail.php#tab-1m" role="tab">
                                1M
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="crypto-coin-detail.php#tab-1y" role="tab">
                                1Y
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="crypto-coin-detail.php#tab-all" role="tab">
                                All
                            </a>
                        </li>
                    </ul>
                    <!-- * tabs -->
                </div>


                <!-- tab content -->
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="tab-24h" role="tabpanel">
                        <div class="chart-example-1"></div>
                    </div>

                    <div class="tab-pane fade" id="tab-1w" role="tabpanel">
                        <div class="chart-example-2"></div>
                    </div>
                    <div class="tab-pane fade" id="tab-1m" role="tabpanel">
                        <div class="chart-example-3"></div>
                    </div>
                    <div class="tab-pane fade" id="tab-1y" role="tabpanel">
                        <div class="chart-example-4"></div>
                    </div>
                    <div class="tab-pane fade" id="tab-all" role="tabpanel">
                        <div class="chart-example-5"></div>
                    </div>
                </div>
                <!-- * tab content -->

            </div>
        </div>
        <!-- Coin Chart -->


        <!-- Buttons -->
        <div class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="crypto-exchange.php" class="btn btn-block btn-lg btn-success">BUY</a>
                        </div>
                        <div class="col">
                            <a href="crypto-exchange.php" class="btn btn-block btn-lg btn-secondary">SELL</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Buttons -->

        <!-- Stats -->
        <div class="section mt-2 mb-4">
            <div class="card">
                <ul class="listview no-line transparent flush simple-listview">
                    <li>
                        <div class="text-muted">Daily Change</div>
                        <strong class="text-success">+5.10%</strong>
                    </li>
                    <li>
                        <div class="text-muted">High Price</div>
                        <strong>$56,367.23</strong>
                    </li>
                    <li>
                        <div class="text-muted">Low Price</div>
                        <strong>$18,529.90</strong>
                    </li>
                    <li>
                        <div class="text-muted">Market Supply</div>
                        <strong>BTC 14.62M</strong>
                    </li>
                    <li>
                        <div class="text-muted">Market Cap</div>
                        <strong>$526.48B</strong>
                    </li>
                </ul>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <div class="row mb-05 fontsize-sub">
                        <div class="col text-success"><strong>72% Buy</strong></div>
                        <div class="col text-secondary text-end"><strong>26% Sell</strong></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 72%" aria-valuenow="72"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 28%" aria-valuenow="28"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stats -->

        <!-- History -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">History</h2>
                <a href="crypto-coin-detail.php#" class="link">View All</a>
            </div>
            <div class="card">
                <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                    <!-- item -->
                    <li>
                        <a href="crypto-coin-detail.php#" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Sell Order #7893</div>
                                </div>
                                <div class="text-end">
                                    <strong>$855,24</strong>
                                    <div class="text-small">
                                        Today 11:38 AM
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="crypto-coin-detail.php#" class="item">
                            <div class="icon-box bg-danger">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Buy order #5501</div>
                                </div>
                                <div class="text-end">
                                    <strong>$550,26</strong>
                                    <div class="text-small">
                                        March 23, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="crypto-coin-detail.php#" class="item">
                            <div class="icon-box bg-danger">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Buy order #5432</div>
                                </div>
                                <div class="text-end">
                                    <strong>$1.509,24</strong>
                                    <div class="text-small">
                                        March 22, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="crypto-coin-detail.php#" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Sell order #5245</div>
                                </div>
                                <div class="text-end">
                                    <strong>$52,68</strong>
                                    <div class="text-small">
                                        March 5, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="crypto-coin-detail.php#" class="item">
                            <div class="icon-box bg-danger">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Buy order #4954</div>
                                </div>
                                <div class="text-end">
                                    <strong>$1.509,24</strong>
                                    <div class="text-small">
                                        March 3, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="crypto-coin-detail.php#" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>Bitcoin</strong>
                                    <div class="text-small text-secondary">Sell order #4923</div>
                                </div>
                                <div class="text-end">
                                    <strong>$52,68</strong>
                                    <div class="text-small">
                                        March 2, 2021
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                </ul>
                <div class="card-body pt-0">
                    <a href="crypto-coin-detail.php#" class="btn btn-block btn-outline-secondary">Load more</a>
                </div>
            </div>
        </div>
        <!-- History -->

        <!-- News -->
        <div class="section full mt-4 mb-4">
            <div class="section-heading padding">
                <h2 class="title">Bitcoin News</h2>
                <a href="app-blog.php" class="link">View All</a>
            </div>

            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <a href="app-blog-post.php">
                                <div class="blog-card">
                                    <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w-100">
                                    <div class="text">
                                        <h4 class="title">What will be the value of bitcoin in the next...</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="splide__slide">
                            <a href="app-blog-post.php">
                                <div class="blog-card">
                                    <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w-100">
                                    <div class="text">
                                        <h4 class="title">Rules you need to know in business</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="splide__slide">
                            <a href="app-blog-post.php">
                                <div class="blog-card">
                                    <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w-100">
                                    <div class="text">
                                        <h4 class="title">10 easy ways to save your money</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="splide__slide">
                            <a href="app-blog-post.php">
                                <div class="blog-card">
                                    <img src="assets/img/sample/photo/4.jpg" alt="image" class="imaged w-100">
                                    <div class="text">
                                        <h4 class="title">Follow the financial agenda with...</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

        </div>
        <!-- * News -->


        <div class="section inset mb-4 mt-4">
            <div class="accordion" id="accordionExample1">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion01">
                            What is Bitcoin?
                        </button>
                    </h2>
                    <div id="accordion01" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at feugiat tellus. Sed quis
                            velit tellus.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion02">
                            How Bitcoin works?
                        </button>
                    </h2>
                    <div id="accordion02" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at feugiat tellus. Sed quis
                            velit tellus.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#accordion03">
                            How can i buy/sell Bitcoin?
                        </button>
                    </h2>
                    <div id="accordion03" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at feugiat tellus. Sed quis
                            velit tellus.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- app footer -->
        <div class="appFooter">
            <div class="footer-title">
                Copyright © Finapp 2021. All Rights Reserved.
            </div>
            Bootstrap 5 based mobile template.
        </div>
        <!-- * app footer -->

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
    <!-- Apex Charts -->
    <script src="assets/js/plugins/apexcharts/apexcharts.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

    <script>

        var chartExample1 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 1600, 1400, 1600, 2000, 1100, 501, 3000, 1000, 2000]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample2 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 1700, 1600, 1400, 1600]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample3 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 405, 666, 1090, 1309, 1400, 1500]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample4 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1500, 700, 1000, 2000, 512, 405, 666, 1090, 1309, 1400, 1500]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        var chartExample5 = {
            series: [{
                data: [512, 405, 666, 1090, 1309, 1400, 1309, 1400, 1500]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 140,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.chart-example-1').forEach(chart => new ApexCharts(chart, chartExample1).render());
            document.querySelectorAll('.chart-example-2').forEach(chart => new ApexCharts(chart, chartExample2).render());
            document.querySelectorAll('.chart-example-3').forEach(chart => new ApexCharts(chart, chartExample3).render());
            document.querySelectorAll('.chart-example-4').forEach(chart => new ApexCharts(chart, chartExample4).render());
            document.querySelectorAll('.chart-example-5').forEach(chart => new ApexCharts(chart, chartExample5).render());
        })

    </script>

</body>

</html>