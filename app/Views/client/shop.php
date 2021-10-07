<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2> Sản phẩm</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">
                    <div class="search-product">
                        <form action="#">
                            <input class="form-control" placeholder="Search here..." type="text">
                            <button type="submit"> <i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                    <div class="filter-sidebar-left">
                        <div class="title-left">
                            <h3>Danh mục</h3>
                        </div>
                        <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Trang sức <small class="text-muted">(100)</small>
                                    <i style="margin-left:115px" class="fas fa-caret-down"></i>
                                </a>
                                <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">Nhẫn <small class="text-muted">(50)</small></a>
                                        <a href="#" class="list-group-item list-group-item-action">Bông tai <small class="text-muted">(10)</small></a>
                                        <a href="#" class="list-group-item list-group-item-action">Lắc & Vòng tay <small class="text-muted">(10)</small></a>
                                        <a href="#" class="list-group-item list-group-item-action">Dây chuyền <small class="text-muted">(10)</small></a>
                                        <a href="#" class="list-group-item list-group-item-action">Mặt dây chuyền <small class="text-muted">(20)</small></a>
                                        <a href="#" class="list-group-item list-group-item-action">Dây cổ <small class="text-muted">(20)</small></a>
                                        <a href="#" class="list-group-item list-group-item-action">Phụ kiện <small class="text-muted">(20)</small></a>

                                    </div>
                                </div>
                            </div>
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Đồng hồ
                                    <small class="text-muted">(50)</small>
                                    <i style="margin-left:115px" class="fas fa-caret-down"></i>
                                </a>
                                <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">Cho Nam <small class="text-muted">(10)</small></a>
                                        <a href="#" class="list-group-item list-group-item-action">Cho Nữ <small class="text-muted">(20)</small></a>
                                        <a href="#" class="list-group-item list-group-item-action">Unisex <small class="text-muted">(20)</small></a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item list-group-item-action" href="#sub-men3" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men3">Bộ sưu tập
                                    <small class="text-muted">(100)</small>
                                    <i style="margin-left:100px" class="fas fa-caret-down"></i>
                                </a>
                                <div class="collapse" id="sub-men3" data-parent="#list-group-men">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">Sun Flower </a>
                                        <a href="#" class="list-group-item list-group-item-action">True Love </a>
                                        <a href="#" class="list-group-item list-group-item-action">First Diamond </a>
                                        <a href="#" class="list-group-item list-group-item-action">Mother's Day </a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="list-group-item list-group-item-action"> Kim cương <small class="text-muted">(150) </small></a>
                            <a href="#" class="list-group-item list-group-item-action">Vàng <small class="text-muted">(11)</small></a>
                            <a href="#" class="list-group-item list-group-item-action">Bạc <small class="text-muted">(22)</small></a>
                        </div>
                    </div>
                    <!-- <div class="filter-price-left">
                        <div class="title-left">
                            <h3>Price</h3>
                        </div>
                        <div class="price-box-slider">
                            <div id="slider-range"></div>
                            <p>
                                <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                                <button class="btn hvr-hover" type="submit">Filter</button>
                            </p>
                        </div>
                    </div> -->
                    <div class="filter-brand-left">
                        <div class="title-left">
                            <h3>Thương hiệu</h3>
                        </div>
                        <div class="brand-box">
                            <ul>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios1" value="Yes" type="checkbox">
                                        <label for="Radios1"> Disney | PNJ</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios2" value="No" type="checkbox">
                                        <label for="Radios2"> PNJSilver </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios3" value="declater" type="checkbox">
                                        <label for="Radios3"> PNJ </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios4" value="declater" type="checkbox">
                                        <label for="Radios4"> STYLE BY PNJ </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios5" value="declater" type="checkbox">
                                        <label for="Radios5"> Michael Kors </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios6" value="declater" type="checkbox">
                                        <label for="Radios6"> Fossil </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios7" value="declater" type="checkbox">
                                        <label for="Radios7"> Orient </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios8" value="declater" type="checkbox">
                                        <label for="Radios8"> Casio </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios9" value="declater" type="checkbox">
                                        <label for="Radios9"> Tissot </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios10" value="declater" type="checkbox">
                                        <label for="Radios10"> Citizen </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios11" value="declater" type="checkbox">
                                        <label for="Radios10"> Calvin Klein </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios12" value="declater" type="checkbox">
                                        <label for="Radios10"> SKAGEN </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio radio-danger">
                                        <input name="survey" id="Radios13" value="declater" type="checkbox">
                                        <label for="Radios10"> MVMT </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-8 text-center text-sm-left">
                            <div class="toolbar-sorter-right">
                                <span>Sắp xếp </span>
                                <select id="basic" class="selectpicker show-tick form-control" onchange="location = this.value;">
                                    <?php $keys = str_replace(" ","+",$key);
                                    if($keys==""):{?>
                                        <option data-display="Select">Mặc định</option>
                                        <!-- <option value="1">Phổ biến</option> -->
                                        <option value="?page=<?= $page ?>&price=desc">Giá cao → thấp</option>
                                        <option value="?page=<?= $page ?>&price=asc">Giá thấp → cao</option>
                                        <option value="?key=<?= $keys ?>&page=<?= $page ?>">Bán chạy nhất</option>
                                    <?php }
                                    else:{ ?>
                                        <option data-display="Select">Mặc định</option>
                                        <!-- <option value="1">Phổ biến</option> -->
                                        <option value="?key=<?= $keys ?>&page=<?= $page ?>&price=desc">Giá cao → thấp</option>
                                        <option value="?key=<?= $keys ?>&page=<?= $page ?>&price=asc">Giá thấp → cao</option>
                                        <option value="?key=<?= $keys ?>&page=<?= $page ?>">Bán chạy nhất</option>
                                    <?php }
                                    endif;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 text-center text-sm-right">
                            <ul class="nav nav-tabs ml-auto">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    <?php foreach ($products as $product) : ?>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover dat">
                                                <?php
                                                    $today = date("Y-m-d");
                                                    $time = date('Y-m-d',strtotime($product['created_on'].' + '.'7 day'));
                                                    if($time >= $today): ?>
                                                        <div class="type-lb">
                                                            <p class="new">New</p>
                                                        </div>
                                                <?php endif?>
                                                    <img src="<?= $product['image'] ?>" style="height: 100%;width: 100%;" class="img-fluid" alt="Image">
                                                </div>
                                                <div class="why-text">
                                                    <a href="<?= base_url() ?>/Product/<?= $product['id'] ?>">
                                                        <h4>
                                                        <?= substr($product['product_name'],0,58).((strlen($product['product_name']) > 58) ? '...' : '');?>
                                                        </h4>
                                                        <div align="center" >
                                                            <h5 style="color:red;"><?= $product['price'] ?> VNĐ</h5>
                                                            <a class="btn hvr-hover" style="color: #ffffff;" data-id="<?=$product['id']?>" type="button" onclick="addToCart(event, this)">Thêm vào giỏ hàng</a>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="list-view">
                                <?php foreach ($products as $product) : ?>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <?php
                                                            $today = date("Y-m-d");
                                                            $time = date('Y-m-d',strtotime($product['created_on'].' + '.'7 day'));
                                                            if($time >= $today): ?>
                                                                <div class="type-lb">
                                                                    <p class="new">New</p>
                                                                </div>
                                                        <?php endif?>
                                                        <img class="dat" src="<?= $product['image'] ?>" style="height: 100%;width: 100%;" class="img-fluid" alt="Image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <a href="<?= base_url() ?>/Product/<?= $product['id'] ?>">
                                                        <h4><?= $product['product_name'] ?></h4>
                                                    </a>
                                                    <h7><?= $product['product_name'] ?> là sản phẩm chính hãng tại ThewayShop
                                                        <?php if($product['collection'] != ""):?>, nằm trong bộ sưu tập <?=$product['collection']?><?php endif?>
                                                        <?php if($product['gender'] != ""):?>. Sản phẩm phù hợp để tặng cho <?=$product['gender']?><?php endif?>
                                                        <?php if($product['gift_for'] != ""):?>, đặc biệt là <?=$product['gift_for']?><?php endif?>
                                                        <?php if($product['gift_giving_occasions'] != ""):?>, vào các dịp như: <?=$product['gift_giving_occasions']?><?php endif?>
                                                        <?php if($product['style'] != ""):?>. Là dòng sản phẩm <?=$product['style']?><?php endif?>
                                                        <?php if($product['brand_origin'] != ""):?>, có xuất xứ từ <?=$product['brand_origin']?><?php endif?>.</h7>
                                                    <h5><?= $product['price'] ?> VNĐ</h5>
                                                    <a class="btn hvr-hover" style="color: #ffffff;" data-id="<?=$product['id']?>" type="button" onclick="addToCart(event, this)">Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="phanTrang">
                        <a class="lfr-pagination-buttons pager">
                            <?php if($key ==""):{?>
                                <?php if ($page > 1) : ?>
                                    <a class="page-item"><a class="page-link" href="<?= "?page=" . ($page - 1) ?>"><i class="fas fa-chevron-left"></i></a></a>
                                <?php endif;
                                for ($i = 1; $i < $total_pages + 1; $i++) {
                                    for($j = 1; $j<4;$j++){
                                        if($i == ($page-$j)){
                                            echo "<a class='page-item'><a class='page-link' href='?page=$i'>" . $i . " </a></a>";
                                        }
                                    }
                                    if($i == $page){
                                        echo "<a class='page-item active'><a class='page-link page-link-cus' href='?page=$i'>" . $i . " </a></a>";
                                    }
                                    for($j = 1; $j<4;$j++){
                                        if($i == ($page+$j)){
                                            echo "<a class='page-item'><a class='page-link' href='?page=$i'>" . $i . " </a></a>";
                                        }
                                    }
                                }
                                if ($page < $total_pages) : ?>
                                    <a class="page-item"><a class="page-link" href="<?= "?page=" . ($page + 1) ?>"><i class="fas fa-chevron-right"></i></a></a>
                                <?php endif; }
                            else:{
                                if($total_pages < 2):{

                                }
                                else:{
                                    if ($page > 1) : ?>
                                        <a class="page-item"><a class="page-link" href="<?= "?key=$keys&page=" . ($page - 1) ?>"><i class="fas fa-chevron-left"></i></a></a>
                                    <?php endif;
                                    for ($i = 1; $i < $total_pages + 1; $i++) {
                                        for($j = 1; $j<4;$j++){
                                            if($i == ($page-$j)){
                                                echo "<a class='page-item'><a class='page-link' href='?key=$keys&page=$i'>" . $i . " </a></a>";
                                            }
                                        }
                                        if($i == $page){
                                            echo "<a class='page-item active'><a class='page-link page-link-cus' href='?key=$keys&page=$i'>" . $i . " </a></a>";
                                        }
                                        for($j = 1; $j<4;$j++){
                                            if($i == ($page+$j)){
                                                echo "<a class='page-item'><a class='page-link' href='?key=$keys&page=$i'>" . $i . " </a></a>";
                                            }
                                        }
                                    }
                                    if ($page < $total_pages) : ?>
                                        <a class="page-item"><a class="page-link" href="<?= "?key=$keys&page=" . ($page + 1) ?>"><i class="fas fa-chevron-right"></i></a></a>
                                    <?php endif; }
                                endif; }
                            endif; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->


<?= $this->endSection() ?>