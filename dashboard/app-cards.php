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
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/icon/favicon.ico" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/capitalone1.png">
    <script src="https://cdn.tailwindcss.com"></script>
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
            <a href="app-cards.php#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            My Cards
        </div>
        <div class="right">
            <a href="app-cards.php#" class="headerButton" data-bs-toggle="modal" data-bs-target="#addCardActionSheet">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- Add Card Action Sheet -->
    <div class="modal fade action-sheet" id="addCardActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add a Card</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="cardnumber1">Card Number</label>
                                    <input type="number" id="cardnumber1" class="form-control"
                                        placeholder="Enter Card Number">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label">Expiry Date</label>
                                            <div class="row">
                                                <div class="col-4">
                                                    <select class="form-control custom-select" id="exp-month">
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <select class="form-control custom-select" id="exp-year">
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="cardcvv">
                                                CVV
                                                <a href="app-cards.php#" class="ms-05" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="3-4 digit number back of your card">
                                                    What is this?
                                                </a>
                                            </label>
                                            <input type="number" id="cardcvv" class="form-control"
                                                placeholder="Enter 3 digit">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group basic mt-2">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Add Card Action Sheet -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 flex flex-col items-center">

            <!-- card block -->
            <div class="card-block mb-2 w-full max-w-[400px] justify-center">
                <div class="card-main">
                    <div class="balance">
                        <span class="label">BALANCE</span>
                        <h1 class="title">$ 56,351</h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label">Card Number</span>
                            •••• 9905
                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Expiry</span>
                                07 / 28
                            </div>
                            <div class="card-ccv">
                                <span class="label">CCV</span>
                                187
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * card block -->

            <!-- card block -->
            <div class="card-block bg-secondary mb-2 w-full max-w-[400px] justify-center">
                <div class="card-main">
                    <div class="balance">
                        <span class="label">BALANCE</span>
                        <h1 class="title">$ 221</h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label">Card Number</span>
                            •••• 3307
                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Expiry</span>
                                04 / 23
                            </div>
                            <div class="card-ccv">
                                <span class="label">CCV</span>
                                553
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * card block -->

            <!-- card block -->
            <div class="card-block bg-success mb-2 w-full max-w-[400px] justify-center">
                <div class="card-main">
                    <div class="balance">
                        <span class="label">BALANCE</span>
                        <h1 class="title">$ 52,60</h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label">Card Number</span>
                            •••• 0273
                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Expiry</span>
                                09 / 26
                            </div>
                            <div class="card-ccv">
                                <span class="label">CCV</span>
                                120
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * card block -->

            <!-- card block -->
            <div class="card-block bg-danger mb-2 w-full max-w-[400px] justify-center">
                <div class="card-main">
                    <div class="balance">
                        <span class="label">BALANCE</span>
                        <h1 class="title">$ 14,328</h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label">Card Number</span>
                            •••• 0273
                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Expiry</span>
                                09 / 26
                            </div>
                            <div class="card-ccv">
                                <span class="label">CCV</span>
                                120
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * card block -->

            <!-- card block -->
            <div class="card-block bg-warning mb-2 w-full max-w-[400px] justify-center">
                <div class="card-main">
                    <div class="balance">
                        <span class="label">BALANCE</span>
                        <h1 class="title">$ 2,462</h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label">Card Number</span>
                            •••• 3702
                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Expiry</span>
                                05 / 23
                            </div>
                            <div class="card-ccv">
                                <span class="label">CCV</span>
                                119
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * card block -->

            <!-- card block -->
            <div class="card-block bg-info mb-2 w-full max-w-[400px] justify-center">
                <div class="card-main">
                    <div class="balance">
                        <span class="label">BALANCE</span>
                        <h1 class="title">$ 2,456</h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label">Card Number</span>
                            •••• 1010
                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Expiry</span>
                                03 / 25
                            </div>
                            <div class="card-ccv">
                                <span class="label">CCV</span>
                                180
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * card block -->

            <!-- card block -->
            <div class="card-block bg-dark mb-2 w-full max-w-[400px] justify-center">
                <div class="card-main">
                    <div class="balance">
                        <span class="label">BALANCE</span>
                        <h1 class="title">$ 234</h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label">Card Number</span>
                            •••• 1037
                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Expiry</span>
                                12 / 28
                            </div>
                            <div class="card-ccv">
                                <span class="label">CCV</span>
                                190
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * card block -->

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
        <a href="app-cards.php" class="item active">
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