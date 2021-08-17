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
                        <img href="<?= base_url()?>/Category/<?=$category['id']?>" class="img-fluid" src="<?= $category['image']?>" alt="<?= $category['name']?>"/>
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
                            <?php if($category['meta_title'] == 'ring'):?>
                                <button class="active" data-filter=".<?= $category['meta_title']?>"><?= $category['name']?></button>
                            <?php else:?>
                                <button data-filter=".<?= $category['meta_title']?>"><?= $category['name']?></button>
                            <?php endif?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <?php foreach($categories as $category):
                $i = 1?>
                <?php foreach($products as $item):?>
                    <?php if($category['id'] == $item['category_id']):  if($i < 5): $i++; ?>
                        <?php if($item['category_id'] != 1):?>
                            <div class="col-lg-3 col-md-6 special-grid <?=$category['meta_title']?>" style="display :none">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <a href="<?= base_url()?>/Product/<?= $item['id']?>">
                                            <div class="type-lb">
                                                <p class="sale">Sale</p>
                                            </div>
                                            <img class="img-fluid dat" src="<?=$item['image']?>" alt="<?=$item['product_name']?>">
                                        </a>
                                    </div>
                                    <div class="why-text">
                                        <h4><a href="<?= base_url()?>/Product/<?= $item['id']?>"><?=$item['product_name']?></a></h4>
                                        <h5 style="color:red;"><?=$item['price']?> VNĐ</h5>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-lg-3 col-md-6 active special-grid <?=$category['meta_title']?>">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                    <a href="<?= base_url()?>/Product/<?= $item['id']?>">
                                        <div class="type-lb">
                                            <p class="sale">Sale</p>
                                        </div>
                                        <img class="img-fluid dat" src="<?=$item['image']?>" alt="<?=$item['product_name']?>">
                                    </a>
                                    </div>
                                    <div class="why-text">
                                        <h4><a href="<?= base_url()?>/Product/<?= $item['id']?>"><?=$item['product_name']?></a></h4>
                                        <h5 style="color:red;"><?=$item['price']?> VNĐ</h5>
                                    </div>
                                </div>
                            </div>
                        <?php endif?>
                    <?php else:
                        break;?>
                    <?php endif ?>
                <?php endif ?>
                <?php endforeach;?>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- End Products  -->


<?= $this->endSection() ?>