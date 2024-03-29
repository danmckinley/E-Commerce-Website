<!DOCTYPE html>

<?php include("functions/functions.php"); ?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McKinley Comics Co</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="styles/main.css" />

</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <!-- Banner -->
            <div class="container-fluid">

                <!-- Logo -->
                <div class="row site-banner">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <a href="./index.html">
                            <img class="logo" src="img/logo.png">
                        </a>
                    </div>

                    <div class="col-sm-4 basket-wrapper rounded">
                        <?php basket(); ?>
                        <b> Shopping Basket </b>
                        Total Items: <?php total_items(); ?>
                        Total Price: £<?php total_price(); ?>
                        <a href="basket.php">View</a>
                    </div>
                </div>

                <!-- Nav Bar -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 site-nav-bar">
                        <ul class="nav nav-pills nav-justified">
                            <!-- nav-justified used instead of nav-fill since it makes all the buttons the same size , rather than ones with more text being longer, while still filling the row-->
                            <li class="nav-item">
								<a class="nav-link active" href="./index.html">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="./shop.php">Shop</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="./about.html">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="./login.php">Login/Sign Up</a>
							</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="page-content">
                <div class="container bold-border rounded shop-wrapper">
                    <div class="row">
                        <!-- Sidebar -->
                        <div class="col-sm-3 sidebar-wrapper">
                            <!-- Search Box -->
                            <div class="sidebar-section">
                                <div class="sidebar-heading"> Search Our Products: </div>
                                <div class="form-group">
                                    <form method="get" action="results.php" enctype="multipart/form-data">
                                        <input type="submit" class="btn btn-primary float-right" name="search" value="Go" />
                                        <div style="overflow: hidden; padding-right: .5em;">
                                            <input type="text" class="form-control" name="user_query" placeholder="Type here..." />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-section">
                                <div class="sidebar-heading"> Filter By Brand: </div>
                                <div class="row">
                                    <div class="col-sm-12 btn-group-vertical">
                                        <?php getBrands(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-section">
                                <div class="sidebar-heading"> Filter By Product: </div>
                                <div class="row">
                                    <div class="col-sm-12 btn-group-vertical">
                                        <?php getCategories(); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Product display area-->
                        <div class="col-sm-9">
                            <?php getIp(); ?>
                            <div class="row">
                                <?php getProducts(); ?>
                                <?php getProductsByCategory(); ?>
                                <?php getProductsByBrand() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <h2 style="text-align: center; color:white;"> &copy; 2019 by Daniel McKinley for
                    E-Commerce at
                    City University London
                </h2>
            </div>
        </footer>
    </div>

    <!-- FIXME: JavaScript may not be working properly?-->
    <script src="dist/js/jquery-3.0.0.slim.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
</body>


</html> 