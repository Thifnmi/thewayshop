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
                        <h1 class="m-b-20"><strong>Chào mừng bạn đến với <br> Mỹ Hạnh</strong></h1>
                        <p class="m-b-40">Tham khảo những món đồ trang sức <br> đang làm mưa làm gió ở thời điểm hiện tại</p>
                        <p><a class="btn hvr-hover" href="#category">Mua ngay</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="<?= base_url() ?>/client/images/banner2.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Chào mừng bạn đến với <br> Mỹ Hạnh</strong></h1>
                        <p class="m-b-40">Chúng tôi cung cấp giá tốt cho khách hàng <br> dù bạn đã từng mua hàng tại cửa hàng hay chưa</p>
                        <p><a class="btn hvr-hover" href="#product">Mua ngay</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-right">
            <img src="<?= base_url() ?>/client/images/banner1.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Chào mừng bạn đến với <br> Mỹ Hạnh</strong></h1>
                        <p class="m-b-40">Hãy thử và tận hưởng <br> chúng tôi sẽ không làm bạn thất vọng</p>
                        <p><a class="btn hvr-hover" href="#product">Mua ngay</a></p>
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
<a name="category"></a>
<div name="special-list" class="categories-shop" >
    <div class="container">
        <div class="row" style="display: inline-flex;">
            <?php foreach($categories as $category):?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" style="cursor: no-drop;" src="<?= $category['image']?>" alt="<?= $category['name']?>">
                        <a class="btn hvr-hover" href="<?= base_url()?>/Category/<?=$category['meta_title']?>"><?= $category['name']?></a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- End Categories -->

<!-- Start Products  -->
<a name="product"></a>
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Một số sản phẩm</h1>
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
                                            <?php
                                                $today = date("Y-m-d");
                                                $time = date('Y-m-d',strtotime($item['created_on'].' + '.'7 day'));
                                                if($time >= $today):
                                            ?>
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                            
                                            <?php endif?>
                                            <img class="img-fluid dat" src="<?=$item['image']?>" alt="<?=$item['product_name']?>">
                                        </a>
                                    </div>
                                    <div class="why-text">
                                        <h4>
                                            <a href="<?= base_url()?>/Product/<?= $item['id']?>" alt="<?=$item['product_name']?>">
                                                <?= substr($item['product_name'],0,58).((strlen($item['product_name']) > 58) ? '...' : '');?>
                                            </a>
                                        </h4>
                                        <div align="center">
                                            <h5 class="price" style="color:red;"><?=$item['price']?> VNĐ</h5><p></p>
                                            <a class="btn hvr-hover" style="color: #ffffff;" data-id="<?=$item['id']?>" type="button" onclick="addToCart(event, this)">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-lg-3 col-md-6 active special-grid <?=$category['meta_title']?>">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                    <a href="<?= base_url()?>/Product/<?= $item['id']?>">
                                        <?php
                                            $today = date("Y-m-d");
                                            $time = date('Y-m-d',strtotime($item['created_on'].' + '.'7 day'));
                                            if($time >= $today):
                                        ?>
                                            <div class="type-lb">
                                                <p class="new">New</p>
                                            </div>
                                        <?php endif?>
                                        <img class="img-fluid dat" src="<?=$item['image']?>" alt="<?=$item['product_name']?>">
                                    </a>
                                    </div>
                                    <div class="why-text">
                                        <h4>
                                            <a style="color: #212121;" href="<?= base_url()?>/Product/<?= $item['id']?>" alt="<?=$item['product_name']?>">
                                                <?= substr($item['product_name'],0,58).((strlen($item['product_name']) > 58) ? '...' : '');?>
                                            </a>
                                        </h4>
                                        <div align="center">
                                            <h5 class="price" style="color:red;"><?=$item['price']?> VNĐ</h5><p></p>
                                            <a class="btn hvr-hover" style="color: #ffffff;" data-id="<?=$item['id']?>" type="button" onclick="addToCart(event, this)">Thêm vào giỏ hàng</a>
                                        </div>
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

<?= $this->endSection() ?>