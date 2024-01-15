<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>
    <!-- Header -->
    <div class="header-wrapper">
        <div class="container">
            <header class="header">
                <a href="index.php" class="header__logo">
                    <img src="images/logo.png" alt="Logo" class="imgFluid">
                </a>
                <ul class="header__nav">
                    <li><a href="shop.php" class="active">Trays</a></li>
                    <li>
                        <a href="#">Paper <i class='bx bx-chevron-down'></i></a>
                        <ul class="header__dropdown">
                            <li><a href="#">Rolling Papers</a></li>
                            <li><a href="#">Pre-rolled cones</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Accessories <i class='bx bx-chevron-down'></i></a>
                        <ul class="header__dropdown">
                            <li><a href="#">Pipes</a></li>
                            <li><a href="#">Bubblers</a></li>
                            <li><a href="#">Grinders</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Merch</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li>
                        <a href="#">Resources <i class='bx bx-chevron-down'></i></a>
                        <ul class="header__dropdown">
                            <li><a href="reviews.php">Reviews</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="blogs.php">Blog</a></li>
                            <li><a href="wholesale.php">Wholesale</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="terms.php">Terms</a></li>
                            <li><a href="shipping.php">Shipping</a></li>
                            <li><a href="order-management.php">Order Management</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="header__options">
                    <li><a href="#" data-toggle-btn="searchbar"><i class='bx bx-search bx-sm'></i></a></li>
                    <li><a href="signin.php"><i class='bx bx-user bx-sm'></i></a></li>
                    <li><a href="cart.php">
                            <i class='bx bx-shopping-bag bx-sm'></i>
                            <div class="badge">1</div>
                        </a>
                    </li>
                </ul>
            </header>
        </div>
    </div>
    <!-- Search Bar -->
    <?php include 'include/search-bar.php' ?>