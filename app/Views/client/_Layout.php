<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Metas -->
    <title>ThewayShop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= base_url() ?>/client/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url() ?>/client/images/apple-touch-icon.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/client/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/client/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/client/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/client/css/custom.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url() ?>/client/images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>/About">About Us</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link" data-toggle="dropdown">Jewelry <i class="fad fa-chevron-down"></i></a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Types</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <?php foreach ($categories as $item):?>
                                                        <li><a href="<?= base_url()?>/Category/<?= $item['id']?>"><?= $item['name']?></a></li>
                                                    <?php endforeach;?>
                                                    <!-- <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">Sweaters & Cardigans</a></li>
                                                    <li><a href="#">T-shirts</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Material</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Swimwear</a></li>
                                                    <li><a href="#">Skirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Trousers</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Collections</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Sun Flower</a></li>
                                                    <li><a href="#">True Love</a></li>
                                                    <li><a href="#">First Diamond</a></li>
                                                    <li><a href="#">Mother's Day</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Brands</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Bags</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                    <li><a href="#">Fragrances</a></li>
                                                    <li><a href="#">Wallets</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link" data-toggle="dropdown">Watches <i class="fad fa-chevron-down"></i></a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Gender</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Mens</a></li>
                                                    <li><a href="#">Ladies</a></li>
                                                    <li><a href="#">Unisex</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Material</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Diamond</a></li>
                                                    <li><a href="#">Gold</a></li>
                                                    <li><a href="#">Silver</a></li>
                                                    <!-- <li><a href="#">Trousers</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Collections</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Sun Flower</a></li>
                                                    <li><a href="#">True Love</a></li>
                                                    <li><a href="#">First Diamond</a></li>
                                                    <li><a href="#">Mother's Day</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Brands</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">PNJ</a></li>
                                                    <li><a href="#">Silver|PNJ</a></li>
                                                    <li><a href="#">Michael Kors</a></li>
                                                    <li><a href="#">Fossil</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>/Contact">Contact Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">My Account <i class="fad fa-user-circle"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Profile</a></li>
                                <li><a href="<?= base_url() ?>/Login">Login</a></li>
                                <li><a href="">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">3</span>
                            </a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="<?= base_url() ?>/client/images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="<?= base_url() ?>/client/images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="<?= base_url() ?>/client/images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="<?= base_url() ?>/Cart" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->


    <?= $this->renderSection('content_Shop') ?>
    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url() ?>/client/images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url() ?>/client/images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url() ?>/client/images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url() ?>/client/images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url() ?>/client/images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url() ?>/client/images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url() ?>/client/images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url() ?>/client/images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url() ?>/client/images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= base_url() ?>/client/images/instagram-img-10.jpg" alt="" />
                    <div class="hov-in">
                        <a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>HELP</h4>
                            <ul>
                                <li><a href="<?= base_url() ?>">Advise </a></li>
                                <li><a href="<?= base_url() ?>/About">Shipping and Delivery</a></li>
                                <li><a href="<?= base_url() ?>/About">Payment</a></li>
                                <li><a href="<?= base_url() ?>/Contact">Returns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Collection</h4>
                            <ul>
                                <li><a href="<?= base_url() ?>"> Home </a></li>
                                <li><a href="<?= base_url() ?>/About">About Us</a></li>
                                <li><a href="<?= base_url() ?>/About">Product</a></li>
                                <li><a href="<?= base_url() ?>/Contact">Contact Us</a></li>
                                <li><a href="<?= base_url() ?>/About">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: University of Transport Technology <br>54 Phố Triều Khúc, Thanh Xuân Nam, Thanh Xuân, Hà Nội<br></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel: 024 3854 4264"> 024 3854 4264</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved &copy; 2021 <a href="#">The Way Shop</a> Design By :
            <a href="#">Nhóm 2 69DCTT21</a>
        </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="<?= base_url() ?>/client/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>/client/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/client/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?= base_url() ?>/client/js/jquery.superslides.min.js"></script>
    <script src="<?= base_url() ?>/client/js/bootstrap-select.js"></script>
    <script src="<?= base_url() ?>/client/js/inewsticker.js"></script>
    <script src="<?= base_url() ?>/client/js/bootsnav.js."></script>
    <script src="<?= base_url() ?>/client/js/images-loded.min.js"></script>
    <script src="<?= base_url() ?>/client/js/isotope.min.js"></script>
    <script src="<?= base_url() ?>/client/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/client/js/baguetteBox.min.js"></script>
    <script src="<?= base_url() ?>/client/js/form-validator.min.js"></script>
    <script src="<?= base_url() ?>/client/js/contact-form-script.js"></script>
    <script src="<?= base_url() ?>/client/js/custom.js"></script>
   

</body>

</html>