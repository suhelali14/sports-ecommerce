<?php
error_reporting(0);
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport X</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/logo/icons8-s-32.png" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        
        .showcase-img{
            aspect-ratio: 4/5;
        }
        #cycle-bar:before{
            width:50%;
        }
        #person{
            display: none;
        }
        #person-icon:hover #person{
            display: block;
            position: absolute;
            font-size:1rem;
            font-weight:500;
            color:white;
            background-color:hsl(0, 0%, 60%);
            padding:15%;
            border-radius: 15px;
        }
        
    </style>

</head>

<body>


    <div class="overlay" data-overlay></div>

    <!--
    - MODAL
  -->

    <div class="modal" data-modal>

        <div class="modal-close-overlay" data-modal-overlay></div>

        <div class="modal-content">

            <button class="modal-close-btn" data-modal-close>
                <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="newsletter-img">
                <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
            </div>

            <div class="newsletter">

                <form action="#">

                    <div class="newsletter-header">

                        <h3 class="newsletter-title">Subscribe Newsletter.</h3>

                        <p class="newsletter-desc">
                            Subscribe the <b>Sport X</b> to get latest Information and Products.
                        </p>

                    </div>

                    <input type="email" name="email" class="email-field" placeholder="Email Address" required>

                    <button type="submit" class="btn-newsletter">Subscribe</button>

                </form>

            </div>

        </div>

    </div>





    <!--
    - NOTIFICATION TOAST
  -->

    <div class="notification-toast" data-toast>

        <button class="toast-close-btn" data-toast-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="toast-banner">
            <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=725&q=80" alt="Rose Gold Earrings" width="80" height="70">
        </div>

        <div class="toast-detail">

            <p class="toast-message">
                Someone in new just bought
            </p>

            <p class="toast-title">
                Rose Gold Earrings
            </p>

            <p class="toast-meta">
                <time datetime="PT2M">2 Minutes</time> ago
            </p>

        </div>

    </div>





    <!--
    - HEADER
  -->

    <header>

        <div class="header-top">

            <div class="container">

                <ul class="header-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

                <div class="header-alert-news">
                    <p>
                        <b>Free Shipping</b>
                        This Week Order Over - $55
                    </p>
                </div>

                <div class="header-top-actions">

                    <select name="currency">

                        <option value="usd">USD &dollar;</option>
                        <option value="eur">Ruppies</option>

                    </select>

                    <select name="language">

                        <option value="en-US">English</option>
                        <option value="es-ES">Hindi</option>
                        <option value="fr">Marathi</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="header-main">

            <div class="container">

                <a href="#" class="header-logo">
                    <img src="./assets/images/logo/logosvg.svg" alt="Anon's logo" width="120" height="36">
                </a>

                <div class="header-search-container">

                    <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

                    <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>

                </div>

                <div class="header-user-actions">

                    <button class="action-btn" id="person-icon">
                        <ion-icon name="person-outline"></ion-icon>
                        <p id="person"><?php echo " ". $_SESSION['username']?></a></p>
                    </button>

                    <button class="action-btn">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>

                    <button class="action-btn">
                        <ion-icon name="bag-handle-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>

                </div>

            </div>

        </div>

        <nav class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="#" class="menu-title">Home</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Categories</a>

                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Outdoor</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Cricket</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Football</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Running</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Golf</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Baseball</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/sport-eq.jpg" alt="headphone collection" width="250"
                                            height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Indoor</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Batminton</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Tenis</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Table Tenis</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Swimming</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Basketball</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/sport-eq2.jpg" alt="men's fashion" width="250"
                                            height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Acadmies</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Cricket Academy</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Football Academy</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Basketball Academy</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Batminton Academy</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Tenis Academy</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/sport-ep3.jpg" alt="women's fashion" width="250"
                                            height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Gym</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart Watch</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart TV</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Keyboard</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Mouse</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Microphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/sport-ep4.jpg" alt="mouse collection" width="250"
                                            height="119">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Cricket</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Bat</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Cricket Shoes</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Ball</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Complete Kit</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Table Tenis</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Racket & Ball</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Table</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Other</a>
                            </li>

                            

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Stores</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Pune</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Mumbai</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Delhi</a>
                            </li>

                            

                        </ul>
                    </li>



                    <li class="menu-category">
                        <a href="#" class="menu-title">Blog</a>
                    </li>


                    <li class="menu-category">
                        <a href="#" class="menu-title">Hot Offers</a>
                    </li>
                    <li class="menu-category">
                        <a href="logout.php" class="menu-title">Log Out</a>
                    </li>
                </ul>

            </div>

        </nav>

        <div class="mobile-bottom-navigation">

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="bag-handle-outline"></ion-icon>

                <span class="count">0</span>
            </button>

            <button class="action-btn">
                <ion-icon name="home-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="heart-outline"></ion-icon>

                <span class="count">0</span>
            </button>

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="grid-outline"></ion-icon>
            </button>

        </div>

        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

            <div class="menu-top">
                <h2 class="menu-title">Menu</h2>

                <button class="menu-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <ul class="mobile-menu-category-list">

                <li class="menu-category">
                    <a href="#" class="menu-title">Home</a>
                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Outdoor</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Cricket</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Football</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Golf</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Base Ball</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Indoor</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Basketball</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Tenis</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Batminton</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Table Tenis</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Acadmies</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Cricket Academy</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Football Academy</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Basketball Academy</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Batminton Academy</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Gym</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Normal Package</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Standered Package</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Near me</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Online</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Blog</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Hot Offers</a>
                </li>
                <li class="menu-category">
                    <a href="logout.php" class="menu-title">Log Out</a>
                </li>

            </ul>

            <div class="menu-bottom">

                <ul class="menu-category-list">

                    <li class="menu-category">

                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Language</p>

                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">English</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Hindi</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Marathi</a>
                            </li>

                        </ul>

                    </li>

                    <li class="menu-category">
                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Currency</p>
                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>
                            <li class="submenu-category">
                                <a href="#" class="submenu-title">USD &dollar;</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title" id="ruppies">Ruppies</a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <ul class="menu-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

    </header>





    <!--
    - MAIN
  -->

    <main>

        <!--
      - BANNER
    -->

        <div class="banner">

            <div class="container">

                <div class="slider-container has-scrollbar">

                    <div class="slider-item">

                        <img src="./assets/images/sport-banner1.jpg" alt="women's latest fashion sale"
                            class="banner-img">

                        <div class="banner-content">

                            <p class="banner-subtitle" style="color: #ff6571;">Trending item</p>

                            <h2 class="banner-title" style="color: rgb(114, 114, 114); ">Table Tenis Accessories</h2>

                            <p class="banner-text" style="color: #000000;">
                                starting at &dollar; <b>20</b>.00
                            </p>

                            <a href="#" class="banner-btn">Shop now</a>

                        </div>

                    </div>

                    <div class="slider-item">

                        <img src="./assets/images/sport-banner2.jpg" alt="modern sunglasses" class="banner-img">

                        <div class="banner-content">

                            <p class="banner-subtitle" style="color: #ff6571;">Trending Academy</p>

                            <h2 class="banner-title" style="color: rgb(23, 23, 96);">Football Academy</h2>

                            <p class="banner-text" style="color: rgb(0, 0, 0);">
                                starting at &dollar; <b>15</b>.00
                            </p>

                            <a href="#" class="banner-btn">Contact now</a>

                        </div>

                    </div>

                    <div class="slider-item">

                        <img src="./assets/images/sport-banner3.jpg" alt="new fashion summer sale" class="banner-img">

                        <div class="banner-content">

                            <p class="banner-subtitle" style="color: #ff6571;">Sale Offer</p>

                            <h2 class="banner-title" style="color: rgb(244, 112, 55);">Basketball Accessories</h2>

                            <p class="banner-text" style="color: #000000;">
                                starting at &dollar; <b>29</b>.99
                            </p>

                            <a href="#" class="banner-btn">Shop now</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <!--
      - CATEGORY
    -->

        <div class="category">

            <div class="container">

                <div class="category-item-container has-scrollbar">

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/game.svg" alt="dress & frock" width="30">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Cricket bat</h3>

                                <p class="category-item-amount">(53)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/icons8-basketball-48.png" alt="winter wear" width="30">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Basketball</h3>

                                <p class="category-item-amount">(18)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>



                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/shorts.svg" alt="shorts & jeans" width="30">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Shorts</h3>

                                <p class="category-item-amount">(84)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/tee.svg" alt="t-shirts" width="30">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">T-shirts</h3>

                                <p class="category-item-amount">(35)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/jacket.svg" alt="jacket" width="30">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Jacket</h3>

                                <p class="category-item-amount">(16)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/watch.svg" alt="watch" width="30">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Watch</h3>

                                <p class="category-item-amount">(27)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/hat.svg" alt="hat & caps" width="30">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Hat & caps</h3>

                                <p class="category-item-amount">(39)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <!--
      - PRODUCT
    -->

        <div class="product-container">

            <div class="container">


                <!--
          - SIDEBAR
        -->

                <div class="sidebar  has-scrollbar" data-mobile-menu>

                    <div class="sidebar-category">

                        <div class="sidebar-top">
                            <h2 class="sidebar-title">Category</h2>

                            <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                                <ion-icon name="close-outline"></ion-icon>
                            </button>
                        </div>

                        <ul class="sidebar-menu-category-list">

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons//jacket.svg" alt="clothes" width="20"
                                            height="20" class="menu-title-img">

                                        <p class="menu-title">Clothes</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Shirt</p>
                                            <data value="300" class="stock" title="Available Stock">300</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">shorts & Trackpant</p>
                                            <data value="60" class="stock" title="Available Stock">60</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">jacket</p>
                                            <data value="50" class="stock" title="Available Stock">50</data>
                                        </a>
                                    </li>



                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/shoes.svg" alt="footwear" class="menu-title-img"
                                            width="20" height="20">

                                        <p class="menu-title">Footwear</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Sports Running</p>
                                            <data value="45" class="stock" title="Available Stock">45</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Cricket</p>
                                            <data value="75" class="stock" title="Available Stock">75</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Football</p>
                                            <data value="35" class="stock" title="Available Stock">35</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Basketball</p>
                                            <data value="26" class="stock" title="Available Stock">26</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/game.svg" alt="clothes" class="menu-title-img"
                                            width="20" height="20">

                                        <p class="menu-title">Cricket Kit</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">SS Brand</p>
                                            <data value="46" class="stock" title="Available Stock">46</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">SG Brand</p>
                                            <data value="73" class="stock" title="Available Stock">73</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">MRF Brand</p>
                                            <data value="61" class="stock" title="Available Stock">61</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">CEAT Brand</p>
                                            <data value="61" class="stock" title="Available Stock">61</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/icons8-basketball-48.png" alt="perfume"
                                            class="menu-title-img" width="20" height="20">

                                        <p class="menu-title">Basketball</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Basketball</p>
                                            <data value="12" class="stock" title="Available Stock">12 pcs</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Basket</p>
                                            <data value="60" class="stock" title="Available Stock">60 pcs</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">jacket</p>
                                            <data value="50" class="stock" title="Available Stock">50 pcs</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Basketball Shoes</p>
                                            <data value="87" class="stock" title="Available Stock">87 pcs</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/icons8-dumbbell-48.png" alt="cosmetics"
                                            class="menu-title-img" width="20" height="20">

                                        <p class="menu-title">Gym</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Doumbuls</p>
                                            <data value="68" class="stock" title="Available Stock">68</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Plates</p>
                                            <data value="46" class="stock" title="Available Stock">46</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Running Machine</p>
                                            <data value="79" class="stock" title="Available Stock">79</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Cycle</p>
                                            <data value="23" class="stock" title="Available Stock">23</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>



                        </ul>

                    </div>

                    <div class="product-showcase">

                        <h3 class="showcase-heading">best sellers</h3>

                        <div class="showcase-wrapper">

                            <div class="showcase-container">

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/icons/game.svg" alt="baby fabric shoes" width="75"
                                            height="75" class="showcase-img">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Cricket Bat</h4>
                                        </a>

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>$65.00</del>
                                            <p class="price">$40.00</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/products/sports-1.jpg" alt="men's hoodies t-shirt"
                                            class="showcase-img" width="75" height="75">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Sports Shoes</h4>
                                        </a>
                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-half-outline"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>$150.00</del>
                                            <p class="price">$80.00</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/products/watch-1.jpg" alt="girls t-shirt"
                                            class="showcase-img" width="75" height="75">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Watch</h4>
                                        </a>
                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-half-outline"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>$25.00</del>
                                            <p class="price">$15.00</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/products/4.jpg" alt="woolen hat for men"
                                            class="showcase-img" width="75" height="75">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">woolen hat for men</h4>
                                        </a>
                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>$15.00</del>
                                            <p class="price">$12.00</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="product-box">

                    <!--
            - PRODUCT MINIMAL
          -->

                    <div class="product-minimal">

                        <div class="product-showcase">

                            <h2 class="title">New Arrivals</h2>

                            <div class="showcase-wrapper has-scrollbar">

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/1.jpg"
                                                alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Darts</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Casual Sport</a>

                                            <div class="price-box">
                                                <p class="price">$8.00</p>
                                                <del>$15.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/2.jpg"
                                                alt="girls pink embro design top" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Chess Board</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Indoor Sports</a>

                                            <div class="price-box">
                                                <p class="price">$10.00</p>
                                                <del>$30.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/3.jpg"
                                                alt="black floral wrap midi skirt" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Running Machine</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Gym</a>

                                            <div class="price-box">
                                                <p class="price">$650.00</p>
                                                <del>$750.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/4.jpg"
                                                alt="pure garment dyed cotton shirt" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Baseball Ball</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Outdoor Sports</a>

                                            <div class="price-box">
                                                <p class="price">$11.00</p>
                                                <del>$18.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/5.jpg"
                                                alt="men yarn fleece full-zip jacket" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Ice Skets</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Outdoor Sports</a>

                                            <div class="price-box">
                                                <p class="price">$41.00</p>
                                                <del>$61.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/6.jpg"
                                                alt="mens winter leathers jackets" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Ball</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Outdoor Sport</a>

                                            <div class="price-box">
                                                <p class="price">$5.00</p>
                                                <del>$20.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/7.jpg"
                                                alt="mens winter leathers jackets" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Basketball Shoes</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Indoor Sport</a>

                                            <div class="price-box">
                                                <p class="price">$40.00</p>
                                                <del>$85.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/shorts-1.jpg"
                                                alt="better basics french terry sweatshorts" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Better Basics Wear</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Shorts</a>

                                            <div class="price-box">
                                                <p class="price">$10.00</p>
                                                <del>$20.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-showcase">

                            <h2 class="title">Trending</h2>

                            <div class="showcase-wrapper  has-scrollbar">

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/sports-1.jpg"
                                                alt="running & trekking shoes - white" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Sports</a>

                                            <div class="price-box">
                                                <p class="price">$30.00</p>
                                                <del>$75.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/sports-2.jpg"
                                                alt="trekking & running shoes - black" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Sports</a>

                                            <div class="price-box">
                                                <p class="price">$25.00</p>
                                                <del>$66.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/16.jpg"
                                                alt="womens party wear shoes" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Basket</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Indoor Sport</a>

                                            <div class="price-box">
                                                <p class="price">$14.00</p>
                                                <del>$42.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/14.jpg"
                                                alt="sports claw women's shoes" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Baseball Bat</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Sports</a>

                                            <div class="price-box">
                                                <p class="price">$20.00</p>
                                                <del>$65.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/10.jpg"
                                                alt="air tekking shoes - white" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Sports</a>

                                            <div class="price-box">
                                                <p class="price">$30.00</p>
                                                <del>$55.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/11.jpg" alt="Boot With Suede Detail"
                                                class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Boot With Suede Detail</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Indoor Sport</a>

                                            <div class="price-box">
                                                <p class="price">$20.00</p>
                                                <del>$30.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/12.jpeg"
                                                alt="men's leather formal wear shoes" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Football</h4>
                                            </a>

                                            <a href="#" class="showcase-category">For Kids</a>

                                            <div class="price-box">
                                                <p class="price">$12.00</p>
                                                <del>$35.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/22.jpg"
                                                alt="casual men's brown shoes" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Football</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Outdoor Sport</a>

                                            <div class="price-box">
                                                <p class="price">$20.00</p>
                                                <del>$35.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-showcase">

                            <h2 class="title">Top Rated</h2>

                            <div class="showcase-wrapper  has-scrollbar">

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/15.jpg"
                                                alt="pocket watch leather pouch" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Boat paddle</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Outdoor Sport</a>

                                            <div class="price-box">
                                                <p class="price">$20.00</p>
                                                <del>$54.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/18.jpg"
                                                alt="silver deer heart necklace" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Barbells</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Gym</a>

                                            <div class="price-box">
                                                <p class="price">$34.00</p>
                                                <del>$80.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/19.jpg"
                                                alt="titan 100 ml womens perfume" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Ice Surrfing skets</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Outdoor Sport</a>

                                            <div class="price-box">
                                                <p class="price">$25.00</p>
                                                <del>$45.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/20.jpg"
                                                alt="men's leather reversible belt" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Cycling kit</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Outdoor Sport</a>

                                            <div class="price-box">
                                                <p class="price">$32.00</p>
                                                <del>$80.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/28.jpg"
                                                alt="platinum zircon classic ring" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Gym Equipments</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Gym</a>

                                            <div class="price-box">
                                                <p class="price"> starting $15.00</p>
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/watch-1.jpg"
                                                alt="smart watche vital plus" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Smart watche Plus</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Watches</a>

                                            <div class="price-box">
                                                <p class="price">$46.00</p>
                                                <del>$78.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/21.jpg"
                                                alt="shampoo conditioner packs" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Fitness Watch</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Watch</a>

                                            <div class="price-box">
                                                <p class="price">$30.00</p>
                                                <del>$50.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ppt/25.jpg"
                                                alt="rose gold peacock earrings" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Rugby</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Outdoor Sport</a>

                                            <div class="price-box">
                                                <p class="price">$20.00</p>
                                                <del>$30.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!--
            - PRODUCT FEATURED
          -->

                    <div class="product-featured">

                        <h2 class="title">Deal of the day</h2>

                        <div class="showcase-wrapper has-scrollbar">

                            <div class="showcase-container">

                                <div class="showcase">

                                    <div class="showcase-banner">
                                        <img src="./assets/images/ppt/20.jpg"
                                            alt="shampoo, conditioner & facewash packs" class="showcase-img">
                                    </div>

                                    <div class="showcase-content">

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>

                                        <a href="#">
                                            <h3 class="showcase-title">Cycling Kit</h3>
                                        </a>

                                        <p class="showcase-desc">
                                            Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet consectetur Lorem ipsum dolor
                                        </p>

                                        <div class="price-box">
                                            <p class="price">$32.00</p>

                                            <del>$80.00</del>
                                        </div>

                                        <button class="add-cart-btn">add to cart</button>

                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p>
                                                    already sold: <b>20</b>
                                                </p>

                                                <p>
                                                    available: <b>40</b>
                                                </p>
                                            </div>

                                            <div class="showcase-status-bar" id="cycle-bar"></div>
                                        </div>

                                        <div class="countdown-box">

                                            <p class="countdown-desc">
                                                Hurry Up! Offer ends in:
                                            </p>

                                            <div class="countdown">

                                                <div class="countdown-content">

                                                    <p class="display-number">360</p>

                                                    <p class="display-text">Days</p>

                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">24</p>
                                                    <p class="display-text">Hours</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">59</p>
                                                    <p class="display-text">Min</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">00</p>
                                                    <p class="display-text">Sec</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="showcase-container">

                                <div class="showcase">

                                    <div class="showcase-banner">
                                        <img src="./assets/images/ppt/14.jpg"
                                            alt="Rose Gold diamonds Earring" class="showcase-img">
                                    </div>

                                    <div class="showcase-content">

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>

                                        <h3 class="showcase-title">
                                            <a href="#" class="showcase-title">Baseball Bat</a>
                                        </h3>

                                        <p class="showcase-desc">
                                            Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet consectetur Lorem ipsum dolor
                                        </p>

                                        <div class="price-box">
                                            <p class="price">$20.00</p>
                                            <del>$65.00</del>
                                        </div>

                                        <button class="add-cart-btn">add to cart</button>

                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p> already sold: <b>15</b> </p>

                                                <p> available: <b>50</b> </p>
                                            </div>

                                            <div class="showcase-status-bar"></div>
                                        </div>

                                        <div class="countdown-box">

                                            <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                                            <div class="countdown">
                                                <div class="countdown-content">
                                                    <p class="display-number">360</p>
                                                    <p class="display-text">Days</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">24</p>
                                                    <p class="display-text">Hours</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">59</p>
                                                    <p class="display-text">Min</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">00</p>
                                                    <p class="display-text">Sec</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!--
            - PRODUCT GRID
          -->

                    <div class="product-main">

                        <h2 class="title">New Products</h2>

                        <div class="product-grid">

                            <div class="showcase">

                                <div class="showcase-banner">

                                    <img src="./assets/images/ppt/foot-1.jpg" alt="Mens Winter Leathers Jackets"
                                        width="300" class="product-img default">
                                    <img src="./assets/images/ppt/foot-2.jpg" alt="Mens Winter Leathers Jackets"
                                        width="300" class="product-img hover">

                                    <p class="showcase-badge">15%</p>

                                    <div class="showcase-actions">

                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>

                                    </div>

                                </div>

                                <div class="showcase-content">

                                    <a href="#" class="showcase-category">Football</a>

                                    <a href="#">
                                        <h3 class="showcase-title">Football of best Quality Which use in Fifa and Premier Leage Tournament </h3>
                                    </a>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$25.00</p>
                                        <del>$75.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/ppt/bat-1.jpg" alt="Pure Garment Dyed Cotton Shirt"
                                        class="product-img default" width="300">
                                    <img src="https://images.unsplash.com/photo-1589801258579-18e091f4ca26?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=901&q=80" alt="Pure Garment Dyed Cotton Shirt"
                                        class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Cricket Bat</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Pure Kashmir Willow Bat made in India </a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$45.00</p>
                                        <del>$56.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="https://images.unsplash.com/photo-1605050824853-7fb0755face3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                        alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default" width="300">
                                    <img src="https://images.unsplash.com/photo-1615387289628-34cb93a9ec7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                        alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Cycling Helmete</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Cycling Helmete</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$38.00</p>
                                        <del>$65.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="https://images.unsplash.com/photo-1609710228159-0fa9bd7c0827?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Black Floral Wrap Midi Skirt"
                                        class="product-img default" width="300">
                                    <img src="https://images.unsplash.com/photo-1611251135345-18c56206b863?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Black Floral Wrap Midi Skirt"
                                        class="product-img hover" width="300">

                                    <p class="showcase-badge angle pink">new</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Table Tenis</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Table Tenis Rackets and Ball </a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$25.00</p>
                                        <del>$35.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="https://images.unsplash.com/photo-1600185365926-3a2ce3cdb9eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=725&q=80" alt="Casual Men's Brown shoes"
                                        class="product-img default" width="300">
                                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=725&q=80" alt="Casual Men's Brown shoes"
                                        class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Sport Shoes</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Sport Shoes Unisex</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$59.00</p>
                                        <del>$105.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="https://images.unsplash.com/photo-1609096458733-95b38583ac4e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="Pocket Watch Leather Pouch"
                                        class="product-img default" width="300">
                                    <img src="https://images.unsplash.com/photo-1619037961390-f2047d89bc55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" alt="Pocket Watch Leather Pouch"
                                        class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">watches</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Fitness Watch </a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$50.00</p>
                                        <del>$90.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/products/watch-1.jpg" alt="Smart watche Vital Plus"
                                        class="product-img default" width="300">
                                    <img src="./assets/images/products/watch-2.jpg" alt="Smart watche Vital Plus"
                                        class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">watches</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Smart watche Vital Plus</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$100.00</p>
                                        <del>$120.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="https://images.unsplash.com/photo-1521369909029-2afed882baee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Womens Party Wear Shoes"
                                        class="product-img default" width="300">
                                    <img src="https://images.unsplash.com/photo-1572460737616-866a25d4d61a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Womens Party Wear Shoes"
                                        class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Caps</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Sport and Casual Caps Unisex</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$25.00</p>
                                        <del>$30.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="https://plus.unsplash.com/premium_photo-1669021454145-49146869b916?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Mens Winter Leathers Jackets"
                                        class="product-img default" width="300">
                                    <img src="https://plus.unsplash.com/premium_photo-1669021454207-b4af6335dc90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Mens Winter Leathers Jackets"
                                        class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Track Suit</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Track Suit Which are Usefull in different diffent Senarios</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$32.00</p>
                                        <del>$45.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/products/sports-2.jpg"
                                        alt="Trekking & Running Shoes - black" class="product-img default" width="300">
                                    <img src="./assets/images/products/sports-4.jpg"
                                        alt="Trekking & Running Shoes - black" class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">sports</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Trekking & Running Shoes - black</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$58.00</p>
                                        <del>$64.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="https://images.unsplash.com/photo-1519861531473-9200262188bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="Men's Leather Formal Wear shoes"
                                        class="product-img default" width="300">
                                    <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=890&q=80"
                                        alt="Men's Leather Formal Wear shoes" class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Basketball</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Basketball and one Complimentry Basket free</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$30.00</p>
                                        <del>$65.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/products/shorts-1.jpg"
                                        alt="Better Basics French Terry Sweatshorts" class="product-img default"
                                        width="300">
                                    <img src="./assets/images/products/shorts-2.jpg"
                                        alt="Better Basics French Terry Sweatshorts" class="product-img hover"
                                        width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">shorts</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Better Basics Shorts</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$40.00</p>
                                        <del>$85.00</del>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

        <div>

            <div class="container">

                <div class="testimonials-box">

                    <!--
            - TESTIMONIALS
          -->

                    <div class="testimonial">

                        <h2 class="title">testimonial</h2>

                        <div class="testimonial-card">

                            <img src="./assets/images/ppt/sportx-logo.png" alt="alan doe" class="testimonial-banner"
                                width="100" height="80">

                            <p class="testimonial-name">Sporx</p>

                            <p class="testimonial-title">Sportx Team</p>

                            <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img"
                                width="26">

                            <p class="testimonial-desc">
                                    We Are Created this platform Were you can get all Sports Related Things 
                                    Incliding Acadmies Of Sports
                            </p>

                        </div>

                    </div>



                    <!--
            - CTA
          -->

                    <div class="cta-container">

                        <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

                        <a href="#" class="cta-content">

                            <p class="discount">25% Discount</p>

                            <h2 class="cta-title">Summer Offer</h2>

                            <p class="cta-text">Starting @ $5</p>

                            <button class="cta-btn">Shop now</button>

                        </a>

                    </div>



                    <!--
            - SERVICE
          -->

                    <div class="service">

                        <h2 class="title">Our Services</h2>

                        <div class="service-container">

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="boat-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Worldwide Delivery</h3>
                                    <p class="service-desc">For Order Over $100</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="rocket-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Next Day delivery</h3>
                                    <p class="service-desc">Maharashtra Orders Only</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="call-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Best Online Support</h3>
                                    <p class="service-desc">Hours: 8AM - 11PM</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="arrow-undo-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Return Policy</h3>
                                    <p class="service-desc">Easy & Free Return</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="ticket-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">20% money back</h3>
                                    <p class="service-desc">For Order Over $100</p>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <!--
      - BLOG
    -->

        <div class="blog">

            <div class="container">

                <div class="blog-container has-scrollbar">

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-1.jpg"
                                alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300"
                                class="blog-banner">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Sports For Girls</a>

                            <a href="#">
                                <h3 class="blog-title">Sport Is not only For Men</h3>
                            </a>

                            <p class="blog-meta">
                                By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-2.jpg"
                                alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner"
                                width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Clothes</a>

                            <h3>
                                <a href="#" class="blog-title">Cricket,Tenis,Football Clothings</a>
                            </h3>

                            <p class="blog-meta">
                                By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-3.jpg"
                                alt="EBT vendors: Claim Your Share of SNAP Online Revenue." class="blog-banner"
                                width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Shoes</a>

                            <h3>
                                <a href="#" class="blog-title">Shoes Categories By Sports</a>
                            </h3>

                            <p class="blog-meta">
                                By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-4.jpg"
                                alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner"
                                width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Cheapest Ever Market</a>

                            <h3>
                                <a href="#" class="blog-title">How we can give best price?
                                    </a>
                            </h3>

                            <p class="blog-meta">
                                By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>





    <!--
    - FOOTER
  -->

    <footer>

        <div class="footer-category">

            <div class="container">

                <h2 class="footer-category-title">Brand directory</h2>

                <div class="footer-category-box">

                    <h3 class="category-box-title">Sports Shoes :</h3>

                    <a href="#" class="footer-category-link">Adidas</a>
                    <a href="#" class="footer-category-link">Nike</a>
                    <a href="#" class="footer-category-link">Puma</a>
                    <a href="#" class="footer-category-link">Bacca Bussi</a>
                    <a href="#" class="footer-category-link">Fila</a>
                    <a href="#" class="footer-category-link">Sparx</a>
                    

                </div>

                

                <div class="footer-category-box">
                    <h3 class="category-box-title">Cricket :</h3>

                    <a href="#" class="footer-category-link">Bat</a>
                    <a href="#" class="footer-category-link">Ball</a>
                    <a href="#" class="footer-category-link">Complete Kit</a>
                    <a href="#" class="footer-category-link">Stumps</a>
                    <a href="#" class="footer-category-link">Caps</a>
                    <a href="#" class="footer-category-link">Kashmir Willow Bat</a>
                    <a href="#" class="footer-category-link">English Willow Bat</a>
                    
                </div>

                <div class="footer-category-box">
                    <h3 class="category-box-title">Others :</h3>

                    <a href="#" class="footer-category-link">Football</a>
                    <a href="#" class="footer-category-link">Basketball</a>
                    <a href="#" class="footer-category-link">Baseball</a>
                    <a href="#" class="footer-category-link">Tenis kit</a>
                    <a href="#" class="footer-category-link">Table tenis</a>
                    <a href="#" class="footer-category-link">Swimming Glass</a>
                    <a href="#" class="footer-category-link">Dumbbell</a>
                    <a href="#" class="footer-category-link">Sport Short</a>
                    <a href="#" class="footer-category-link">Helmete</a>
                    <a href="#" class="footer-category-link">Cycle Kit</a>
                    
                </div>

            </div>

        </div>

        <div class="footer-nav">

            <div class="container">

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Popular Categories</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Cricket</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Football</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Table Tenis</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Gym</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Watches</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Products</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Our Company</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Delivery</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Legal Notice</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Terms and conditions</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">About us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Secure payment</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Services</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Contact</h2>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="content">
                            419 State 414 Rte
                            Vallabh Nagar, Pune, Pimpri, India
                        </address>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="tel:+917558436263" class="footer-nav-link">(91) 7558436263</a>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto:Sportx@gmail.com" class="footer-nav-link">Sportx@gmail.com</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Follow Us</h2>
                    </li>

                    <li>
                        <ul class="social-link">

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="container">

                <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

                <p class="copyright">
                    Copyright &copy; <a href="#">SportX</a> all rights reserved.
                </p>

            </div>

        </div>

    </footer>






    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>