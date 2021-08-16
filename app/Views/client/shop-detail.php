<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop Detail</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active">Shop Detail </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($productImage as $image) : ?>
                            <?php if ($image['url'] == $productImage[0]['url']) : ?>
                                <div class="carousel-item active"> <img class="d-block w-100" src="<?= $image['url'] ?>" alt="First slide"> </div>
                            <?php else : ?>
                                <div class="carousel-item"> <img class="d-block w-100" src="<?= $image['url'] ?>" alt="Second slide"> </div>
                                <!-- <div class="carousel-item"> <img class="d-block w-100" src="<?= base_url() ?>/client/images/big-img-03.jpg" alt="Third slide"> </div> -->
                            <?php endif ?>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <ol class="carousel-indicators">
                        <?php foreach ($productImage as $image) : ?>
                            <?php if ($image['url'] == $productImage[0]['url']) : ?>
                                <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                    <img class="d-block w-100 img-fluid" src="<?= $image['url'] ?>" alt="" />
                                </li>
                            <?php else : ?>
                                <li data-target="#carousel-example-1" data-slide-to="1">
                                    <img class="d-block w-100 img-fluid" src="<?= $image['url'] ?>" alt="" />
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <!-- <li data-target="#carousel-example-1" data-slide-to="2">
                            <img class="d-block w-100 img-fluid" src="<?= base_url() ?>/client/images/smp-img-03.jpg" alt="" />
                        </li> -->
                    </ol>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2><?= $product['product_name'] ?></h2>
                    <h5><?= $product['price'] ?>VND</h5>
                    <p class="available-stock"><span>In stock: <?= $product['quantity'] ?></span>
                    <p>
                    <h4>Short Description:</h4>
                    <p>Nam sagittis a augue eget scelerisque. Nullam lacinia consectetur sagittis. Nam sed neque id eros fermentum dignissim quis at tortor. Nullam ultricies urna quis sem sagittis pharetra. Nam erat turpis, cursus in ipsum at,
                        tempor imperdiet metus. In interdum id nulla tristique accumsan. Ut semper in quam nec pretium. Donec egestas finibus suscipit. Curabitur tincidunt convallis arcu. </p>
                    <ul>
                        <li>
                            <div class="form-group size-st">
                                <label class="size-label">Size</label>
                                <select id="basic" class="selectpicker show-tick form-control">
                                    <option value="0">Size</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="sizing">
                                <a>Hướng dẫn chọn size <span><img src="<?= base_url() ?>/client/images/sizing.png" alt="image" height="300" /></span></a>
                            </div>
                        </li>

                        <li>
                            <div class="form-group quantity-box">
                                <label class="control-label">Quantity</label>
                                <input class="form-control" value="1" min="1" max="<?= $product['quantity'] ?>" type="number">
                            </div>
                        </li>
                    </ul>

                    <div class="price-box-bar">
                        <div class="cart-and-bay-btn">
                            <a class="btn hvr-hover" data-fancybox-close="" href="#">Buy New</a>
                            <a class="btn hvr-hover" data-fancybox-close="" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Description Product -->
        <h1 class="list-group-item" style="font-style: bold; font-size:25px; align:center; width:60%;font-weight: bold" href="#sub-men1" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men1">DESCRIPTION PRODUCT
            <i style="float:right" class="fas fa-caret-down"></i>
            <hr width="100%" size="3px" align="center" />
        </h1>
        <div>
            <div id="sub-men1">
                <div data-parent="#list-group-men" style="display:inline-block">
                    <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Brand
                        <span style="float:right; margin-left: 300px">PNJ</span>
                        <hr width="80%" size="3px" align="center" />
                    </span>
                    <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Collection
                        <span style="float:right; margin-left: 300px">PNJ</span>
                        <hr width="80%" size="10px" align="center" />
                    </span>
                    <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Sex
                        <span style="float:right; margin-left: 300px">Unisex</span>
                        <hr width="80%" size="10px" align="center" />
                    </span>
                    <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Type
                        <span style="float:right; margin-left: 300px">Ring</span>
                        <hr width="80%" size="10px" align="center" />
                    </span>
                </div>
            </div>
        </div>
        <!--End Des Product -->

        <!-- My Service -->
        <h1 class="list-group-item list-group-item-action" style="font-style: bold; font-size:25px; align:center; width:60%;font-weight: bold" href="#sub-men3" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men3">MY SERVICE
            <i style="float:right" class="fas fa-caret-down"></i>
            <hr width="100%" size="3px" align="center" />
        </h1>
        <div>
            <div id="sub-men3">
                <div data-parent="#list-group-men" style="width:60%;">
                    <h3 class="txt">Bảo Hành Miễn Phí 6 Tháng</h3>
                    <div>Bảo hành 6 tháng lỗi kỹ thuật, nước xi. </div>
                </div>
                <div data-parent="#list-group-men" style="width:60%;">
                    <h3 class="txt">Miễn Phí Siêu Âm Và Đánh Bóng Bằng Máy Chuyên Dụng Trọn Đời</h3>
                    <div>Đối với sản phẩm bị oxy hóa, xuống màu, sẽ được siêu âm làm sạch bằng máy chuyên dụng (siêu âm, không xi) miễn phí trọn đời tại cửa hàng.​</div>
                    <div>Miễn phí đánh bóng trọn đời . Nhẫn cưới sẽ được bảo hành, làm mới, đánh bóng, xi miễn phí trọn đời.​</div>
                </div>
                <div data-parent="#list-group-men" style="width:60%;">
                    <h3 class="txt">Miễn Phí Thay Đá CZ Và Đá Tổng Hợp</h3>
                    <div>Miễn phí thay đá CZ và đá tổng hợp trong suốt thời gian bảo hành.​​​</div>
                    <div style="font-weight:bold">* Không áp dụng bảo hành cho các trường hợp sau:​</div>
                    <div>- Dây chuyền, lắc chế tác bị đứt gãy; bị biến dạng hoặc hư hỏng nặng.​​​​​</div>
                    <div>- Khách hàng cung cấp thông tin truy lục hóa đơn không chính xác.​​​​​ </div>
                    <div style="font-weight: bold">Lưu ý:</div>
                    <div>PNJ bảo hành các sản phẩm thuộc hệ thống cửa hàng kênh lẻ và online của PNJ. ​​</div>
                    <div>Chế độ bảo hành sản phẩm có thể thay đổi theo chính sách của PNJ đối với các dòng hàng và chương trình khuyến mãi vào từng thời điểm.​</div>
                </div>

            </div>
        </div>
        <!-- END My Service -->



        <div class="row my-5">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Featured Products</h1>
                </div>
                <div class="featured-products-box owl-carousel owl-theme">
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= base_url() ?>/client/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= base_url() ?>/client/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= base_url() ?>/client/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= base_url() ?>/client/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= base_url() ?>/client/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= base_url() ?>/client/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= base_url() ?>/client/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= base_url() ?>/client/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->

<?= $this->endSection() ?>