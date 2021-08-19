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
                    <?php $array_image = [
                            '1' => 'First slide',
                            '2' => 'Second slide',
                            '3' => 'Third slide',
                            '4' => 'Four slide',
                            '5' => 'Five slide',
                            '6' => 'Six slide',
                            '7' => 'Seven slide',
                            '8' => 'Eight slide',
                            '8' => 'Nine slide',
                            '10' => 'Ten slide'
                        ]; $i= 0;?>
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($productImage as $image) : ?>
                            <?php if ($image['url'] == $productImage[0]['url']) :
                                $i += 1?>
                                <div class="carousel-item active"> <img class="d-block w-100 dat" src="<?= $image['url'] ?>" alt="<?= $array_image[(string)$i] ?>"> </div>
                            <?php else : 
                                $i += 1?>
                                <div class="carousel-item"> <img class="d-block w-100 dat" src="<?= $image['url'] ?>" alt="<?= $array_image[(string)$i] ?>"> </div>
                            <?php endif ?>
                        <?php endforeach; $i = 0?>
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
                                <li data-target="#carousel-example-1" data-slide-to="<?= $i ?>" class="active">
                                    <img class="d-block w-100 img-fluid" src="<?= $image['url'] ?>" alt="" />
                                </li>
                            <?php $i += 1; else : ?>
                                <li data-target="#carousel-example-1" data-slide-to="<?= $i ?>">
                                    <img class="d-block w-100 img-fluid" src="<?= $image['url'] ?>" alt="" />
                                </li>
                            <?php $i += 1; endif; ?>
                        <?php endforeach; $i = 0?>
                    </ol>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2><?= $product['product_name'] ?></h2>
                    <h4>Product code: <?= $product['product_code']?></h4>
                    <h5><?= $product['price'] ?>VND</h5>
                    <p class="available-stock"><span>In stock: <?= $product['quantity'] ?></span>
                    <p>
                    <!-- <h4>Short Description:</h4>
                    <p>Nam sagittis a augue eget scelerisque. Nullam lacinia consectetur sagittis. Nam sed neque id eros fermentum dignissim quis at tortor. Nullam ultricies urna quis sem sagittis pharetra. Nam erat turpis, cursus in ipsum at,
                        tempor imperdiet metus. In interdum id nulla tristique accumsan. Ut semper in quam nec pretium. Donec egestas finibus suscipit. Curabitur tincidunt convallis arcu. </p> -->
                    <ul>
                        <li>
                            <div class="form-group size-st">
                                <label class="size-label">Size</label>
                                <select id="basic" class="selectpicker show-tick form-control">
                                    <option>Size</option>
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
            <i style="float:right" class="fal fa-chevron-down"></i>
            <hr width="100%" size="3px" align="center" />
        </h1>
        <div>
            <div id="sub-men1" class="collapse show">
                <div data-parent="#list-group-men" style="display:inline-block">
                    <?php foreach($supplier as $supplier):?>
                        <?php if($product['supplier_id'] == $supplier['id']):?>
                            <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Brand
                                <span style="float:right; margin-left: 300px"><?= $supplier['name']?></span>
                                <hr width="100%" size="3px" align="center" />
                            </span>
                        <?php endif ?>
                    <?php endforeach;?>
                    <?php if($product['collection'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Collection:
                            <span style="float:right; margin-left: 300px"><?= $product['collection']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['main_stone_type'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Main Stone Type:
                            <span style="float:right; margin-left: 300px"><?= $product['main_stone_type']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['main_stone_color'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Main Stone Color:
                            <span style="float:right; margin-left: 300px"><?= $product['main_stone_color']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?><?php if($product['stone_shape'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Stone Shape:
                            <span style="float:right; margin-left: 300px"><?= $product['stone_shape']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['sub_stone_type'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Sub Stone Type:
                            <span style="float:right; margin-left: 300px"><?= $product['sub_stone_type']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['secondary_stone_color'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Secondary Stone Color:
                            <span style="float:right; margin-left: 300px"><?= $product['secondary_stone_color']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['gender'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Gender:
                            <span style="float:right; margin-left: 300px"><?= $product['gender']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['gift_giving_occasions'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Gift Giving Occasions:
                            <span style="float:right; margin-left: 300px"><?=$product['gift_giving_occasions']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['gift_for'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Gift For:
                            <span style="float:right; margin-left: 300px"><?= $product['gift_for']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['weight_of_gold'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Weight Of Gold:
                            <span style="float:right; margin-left: 300px"><?= $product['weight_of_gold']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['gold_age'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Gold Age:
                            <span style="float:right; margin-left: 300px"><?= $product['gold_age']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['style'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Style:
                            <span style="float:right; margin-left: 300px"><?= $product['style']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['wire_size'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Wire Size:
                            <span style="float:right; margin-left: 300px"><?= $product['wire_size']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['face_size'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Face Size:
                            <span style="float:right; margin-left: 300px"><?= $product['face_size']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['machine_thickness'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Machine Thickness:
                            <span style="float:right; margin-left: 300px"><?= $product['machine_thickness']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['brand_origin'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Brand Origin:
                            <span style="float:right; margin-left: 300px"><?= $product['brand_origin']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['origin_of_the_apparatus'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Origin Of The Apparatus:
                            <span style="float:right; margin-left: 300px"><?= $product['origin_of_the_apparatus']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['assembled_at'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Assemble At:
                            <span style="float:right; margin-left: 300px"><?= $product['assembled_at']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['watch_movement_type'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Watch Movement Type:
                            <span style="float:right; margin-left: 300px"><?= $product['watch_movement_type']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['glass_type'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Glass Type:
                            <span style="float:right; margin-left: 300px"><?= $product['glass_type']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['wire_material'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Wire Material:
                            <span style="float:right; margin-left: 300px"><?= $product['wire_material']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['shell_material'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Shell Material:
                            <span style="float:right; margin-left: 300px"><?= $product['shell_material']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['face_shape'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Face Shape:
                            <span style="float:right; margin-left: 300px"><?= $product['face_shape']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['water_resistance'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Water Resistance:
                            <span style="float:right; margin-left: 300px"><?= $product['water_resistance']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['needle_number'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Needle Number:
                            <span style="float:right; margin-left: 300px"><?= $product['needle_number']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['watch_stones_attached'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Watch Stones Attached:
                            <span style="float:right; margin-left: 300px"><?= $product['watch_stones_attached']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['chronometer_certification'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Chronometer Certification:
                            <span style="float:right; margin-left: 300px"><?= $product['chronometer_certification']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    <?php if($product['main_function'] != ''):?>
                        <span class="list-group-item" style="margin-left: 20px; font-size: 16px">Main Function
                            <span style="float:right; margin-left: 300px"><?= $product['main_function']?></span>
                            <hr width="100%" size="10px" align="center" />
                        </span>
                    <?php endif?>
                    
                    
                </div>
            </div>
        </div>
        <!--End Des Product -->

        <!-- My Service -->
        <h1 class="list-group-item list-group-item-action" style="font-style: bold; font-size:25px; align:center; width:60%;font-weight: bold" href="#sub-men3" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men3">MY SERVICE
            <i style="float:right" class="fal fa-chevron-down"></i>
            <hr width="100%" size="3px" align="center" />
        </h1>
        <div style="margin-left: 40px;">
            <div id="sub-men3" class="collapse">
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
                    <div>TheWayShop bảo hành các sản phẩm thuộc hệ thống cửa hàng kênh lẻ và online của PNJ. ​​</div>
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
                    <?php foreach($featuredProducts as $item):?>
                        <div class="item">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <img src="<?= $item['image']?>" class="img-fluid dat" alt="Image">
                                </div>
                                <div class="why-text">
                                    <h4><?= $item['product_name']?></h4>
                                    <h5><?= $item['price']?> VND</h5>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->

<?= $this->endSection() ?>