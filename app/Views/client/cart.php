<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Giỏ hàng</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Cửa hàng</a></li>
                    <li class="breadcrumb-item active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng cộng</th>
                                <th>Loại bỏ</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- <div class="row my-5">
            <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" id="code" name="code" placeholder="Nhập mã giảm giá" aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button id="coupon" name="coupon" class="btn btn-theme" type="button">Nhập mã</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <input value="Update Cart" type="submit">
                </div>
            </div>
        </div> -->

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Hóa đơn đặt hàng</h3>
                    <div class="d-flex">
                        <h4>Số tiền</h4>
                        <div class="product-subtotal ml-auto h5"> 0 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Mã giảm giá</h4>
                        <input type="hidden" value="0" id="discount-percent" />
                        <div class="ml-auto font-weight-bold discount-percent"> 0 % </div>
                    </div>
                    <!-- <div class="d-flex">
                        <h4>Phí giao hàng</h4>
                        <div class="ml-auto font-weight-bold"> Free </div>
                    </div> -->
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Tổng cộng</h5>
                        <div class="total-price-payment ml-auto h5">0</div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="<?= base_url() ?>/Checkout" style="color: #ffffff;" class="ml-auto btn hvr-hover">Thanh toán</a> </div>
        </div>

    </div>
</div>
<!-- End Cart -->

<?= $this->endSection() ?>