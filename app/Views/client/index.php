<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-left">
            <img src="<?= base_url() ?>/client/images/banner3.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Thewayshop</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="<?= base_url() ?>/client/images/banner2.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Thewayshop</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-right">
            <img src="<?= base_url() ?>/client/images/banner1.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Thewayshop</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class="categories-shop">
    <div class="container">
        <div class="row" style="display: inline-flex;">
            <?php foreach($categories as $category):?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= $category['image']?>" alt="" />
                        <a class="btn hvr-hover" href="<?= base_url()?>/Category/<?=$category['id']?>"><?= $category['name']?></a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- End Categories -->

<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Featured Products</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <?php foreach($categories as $category):?>
                            <?php if($category['name'] == 'Nhẫn'):?>
                                <button class="active" data-filter=".<?= $category['name']?>"><?= $category['name']?></button>
                            <?php else:?>
                                <button data-filter=".<?= $category['name']?>"><?= $category['name']?></button>
                            <?php endif?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <?php foreach($products as $product):?>
                <?php foreach($product as $key => $item):?>
                    <?php if ($key < 4):?>
                        <div class="col-lg-3 col-md-6 active special-grid <?php foreach($categories as $category):?>
                                                                                <?php if ($category['id'] = $item['category_id']):?>
                                                                                    <?= $category['name']?>
                                                                                <?php endif?>
                                                                            <?php endforeach;?>">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <div class="type-lb">
                                        <p class="sale">Sale</p>
                                    </div>
                                    <img src="<?=$item['image']?>" class="img-fluid" alt="Image">
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                            <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                        </ul>
                                        <a class="cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4><?=$item['product_name']?></h4>
                                    <h5><?=$item['price']?> VNĐ</h5>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach;?>
            <?php endforeach;?>
            <!-- <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">New</p>
                        </div>
                        <img class="dat" src="<?= base_url() ?>/client/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $9.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img class="dat" src="<?= base_url() ?>/client/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $10.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img class="dat" src="<?= base_url() ?>/client/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $15.79</h5>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- End Products  -->


<?= $this->endSection() ?>