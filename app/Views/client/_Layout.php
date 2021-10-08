<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Metas -->
    <title>Mỹ Hạnh</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= base_url() ?>/client/images/logo.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url() ?>/client/images/apple-touch-icon.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/client/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/client/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/client/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/client/css/custom.css">
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
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>/About">Về chúng tôi</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link" data-toggle="dropdown">Trang sức <i class="fad fa-chevron-down"></i></a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Loại</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <?php foreach ($categories as $item) :
                                                        if ($item['id'] != 4) : ?>
                                                            <li><a href="<?= base_url() ?>/Category/<?= $item['meta_title'] ?>"><?= $item['name'] ?></a></li>
                                                        <?php endif ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Chất liệu</h6>
                                            <div class="content">
                                                <ul class="menu-col">

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Bộ sưu tập</h6>
                                            <div class="content">
                                                <ul class="menu-col">

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Thương hiệu</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <?php foreach ($supplier as $item) : ?>
                                                        <li><a href="<?= base_url() ?>/Product/<?= $item['id'] ?>"><?= $item['name'] ?></a></li>
                                                    <?php endforeach; ?>
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
                            <a href="<?= base_url() ?>/Category/watch" class="nav-link" data-toggle="dropdown">Đồng hồ <i class="fad fa-chevron-down"></i></a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Giới tính</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Nam</a></li>
                                                    <li><a href="#">Nữ</a></li>
                                                    <li><a href="#">Unisex</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Chất liệu</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Kim cương</a></li>
                                                    <li><a href="#">Vàng</a></li>
                                                    <li><a href="#">Bạc</a></li>
                                                    <!-- <li><a href="#">Trousers</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Bộ sưu tập</h6>
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
                                            <h6 class="title">Thương hiệu</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <?php foreach ($supplier as $item) : ?>
                                                        <li><a href="<?= base_url() ?>/Product/<?= $item['id'] ?>"><?= $item['name'] ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>/Contact">Liên hệ </a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link" name="fullname" data-toggle="dropdown">
                                <?php if (empty($_SESSION['customer'])) : ?>
                                    Tài khoản
                                <?php else : ?>
                                    <?= $_SESSION['customer']['fullname'] ?>
                                <?php endif ?><i class="fad fa-user-circle"></i></a>
                            <ul class="dropdown-menu">
                                <?php if (empty($_SESSION['customer'])) : ?>
                                    <li><a href="<?= base_url() ?>/Login">Đăng nhập</a></li>
                                    <li><a href="<?= base_url() ?>/Register">Đăng ký tài khoản</a></li>
                                <?php else : ?>
                                    <li><a href="<?= base_url() ?>/Account">Hồ sơ của tôi</a></li>
                                    <li>
                                        <a href="<?= base_url() ?>/Bought">Lịch sử mua hàng</a>
                                    </li>
                                    <li><a href="<?= base_url() ?>/Login/logout">Đăng xuất</a></li>
                                <?php endif ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">

                    </ul>
                <li class="total" style="background: white; padding-bottom: 10px !important;">
                    <a style="margin-left: 10px; color: #ffffff" href="<?= base_url() ?>/Cart" class="btn btn-default hvr-hover btn-cart">Xem giỏ hàng</a>
                    <span class="float-right cart-total" style="margin-right: 15px;"></span>
                </li>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <form action="<?= base_url() ?>/Search">
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search" name="key" id="input-search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
    </form>
    <!-- End Top Search -->

    <!-- Start Content -->
    <?= $this->renderSection('content_Shop') ?>
    <!-- End Content -->

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

    <!-- Start Back To Top -->
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
    <!-- End Back To Top -->

    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Về chúng tôi</h4>
                            <ul>
                                <li><a href="<?= base_url() ?>/About"> Thông tin về Mỹ Hạnh</a></li>
                                <li><a href="<?= base_url() ?>/About">Quá trình phát triển</a></li>
                                <li><a href="<?= base_url() ?>/About">Hệ thống cửa hàng</a></li>
                                <li><a href="<?= base_url() ?>/Contact">Thành tựu</a></li>
                                <li><a href="<?= base_url() ?>/About">Câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Hỗ trợ mua hàng</h4>
                            <ul>
                                <li><a href="<?= base_url() ?>/Contact">Hướng dẫn mua hàng</a></li>
                                <li><a href="<?= base_url() ?>/About">Vận chuyển và giao hàng</a></li>
                                <li><a href="<?= base_url() ?>/About">Thanh toán</a></li>
                                <li><a href="<?= base_url() ?>/Contact">Đổi trả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Liên hệ với chúng tôi</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Địa chỉ: Trường Đại học công nghệ Giao thông vận tải <br>54 Phố Triều Khúc, Thanh Xuân Nam, Thanh Xuân, Hà Nội<br></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Hotline: <a href="tel: 024 3854 4264"> 024 3854 4264</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:myhanh@gmail.com">myhanh@gmail.com</a></p>
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
        <p class="footer-company">Đã được đăng ký bản quyền &copy; 2021 <a href="#">Mỹ Hạnh</a> Thiết kế bởi :
            <a href="#">Nhóm 2 69DCTT21</a>
        </p>
    </div>
    <!-- End copyright  -->

    <!-- ALL JS FILES -->
    <script src="<?= base_url() ?>/client/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>/client/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/client/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?= base_url() ?>/client/js/jquery.superslides.min.js"></script>
    <script src="<?= base_url() ?>/client/js/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/client/js/jquery-ui.js"></script>
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
    <script src="<?= base_url() ?>/client/js/dialog.js"></script>
    <script src="<?= base_url() ?>/client/js/addtocart.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>