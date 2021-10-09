<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

<?php if (($message == "success")) : ?>
    <script>
        localStorage.removeItem('cart');
    </script>
    <?php 
        echo '<script>alert("Đặt hàng thành công");</script>';
        header('Refresh: 1; URL=http://localhost/thewayshop/public/Bought');
    ?>
    <?php elseif ($message == "not enough") :
        echo '<script>alert("'.$notify.'");</script>';
        $newUrl = "http://localhost/thewayshop/public/Product/".$pid;
        header('Refresh: 0; URL='.$newUrl); ?>
    <?php elseif ($message == "fail") :
        echo '<script>alert("Đặt hàng không thành công");</script>'; ?>
    <?php endif; ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Thanh toán</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Thanh toán</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <form action="<?= base_url() ?>/Checkout" method="post">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Thông tin liên hệ</h3>
                        </div>
                        <div class="needs-validation" novalidate>
                            <div class="row">
                                <?php $ar_name = explode(" ", $_SESSION['customer']['fullname']);
                                $length = count(explode(" ", $_SESSION['customer']['fullname'])) - 1;
                                $name = "";
                                for ($i = 0; $i < $length; $i++) {
                                    $name = $name . $ar_name[$i] . " ";
                                } ?>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Họ *</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="<?= $name ?>" required>
                                    <div class="invalid-feedback">Bạn phải điền họ. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Tên *</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="<?= $ar_name[$length] ?>" required>
                                    <div class="invalid-feedback"> Bạn phải điền tên. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Tài khoản *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="" readonly="true" required value="<?= $_SESSION['customer']['username'] ?>">
                                    <div class="invalid-feedback" style="width: 100%;">Bạn phải điền tài khoản. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone">Số điện thoại *</label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="" required value="<?= $_SESSION['customer']['phone_number'] ?>">
                                <div class="invalid-feedback"> Hãy nhập số điện thoại để được liên hệ nhận đơn hàng. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Địa chỉ *</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="" required value="<?= $_SESSION['customer']['address'] ?>">
                                <div class="invalid-feedback"> Hãy nhập địa chỉ nhận hàng! </div>
                            </div>
                            <hr class="mb-4">
                            <div class="title"> <span>Thanh toán</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="home" name="paymentMethod" value="0" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="home">Thanh toán khi nhận hàng</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="momo" name="paymentMethod" value="1" type="radio" class="custom-control-input" data-toggle="modal" data-target="#modal-content" required>
                                    <label class="custom-control-label" for="momo">Thanh toán qua Momo</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="bank" name="paymentMethod" value="2" type="radio" class="custom-control-input" data-toggle="modal" data-target="#modal-content"  required>
                                    <label class="custom-control-label" for="bank">Thanh toán qua tài khoản ngân hàng</label>
                                </div>
                            </div>
                            
                            <div class="modal fade" id="modal-content">
                                <div class="modal-dialog modal-sm12">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" style="font-weight:bold">Thông báo</h3>
                                            <a type="button" id="close=modal" onclick="changePaymentMethod()" class="close" data-dismiss="modal">×</a>
                                        </div>
                                        <h1>Chức năng đang bảo trì. Vui lòng chọn phương thức thanh toán khác.</h1>
                                    </div>
                                </div>
                            </div>

                            <hr class="mb-1">
                            <div class="title"> <span>Ghi chú</span> </div>
                            <div class="input-group">
                                <textarea type="text" style="margin-top: 12px; margin-bottom: 0px; height: 198px;" class="form-control" name="note" id="note" placeholder="Ghi chú"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Phương thức giao hàng</h3>
                                </div>
                                <div name="ship-method" class="mb-4 ship-method">
                                    <!-- <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Giao hàng cơ bản</label> <span class="float-right font-weight-bold">Miễn phí</span>
                                    </div>
                                    <div class="ml-4 mb-2 small">(3-7 ngày làm việc)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="shipping-option" class="custom-control-input" type="radio">
                                        <label class="custom-control-label" for="shippingOption2">Giao hàng nhanh</label> <span class="float-right font-weight-bold">$10.00</span>
                                    </div>
                                    <div class="ml-4 mb-2 small">(2-4 ngày)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="shipping-option" class="custom-control-input" type="radio">
                                        <label class="custom-control-label" for="shippingOption3">Ngày làm việc tiếp theo</label> <span class="float-right font-weight-bold">$20.00</span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Giỏ hàng</h3>
                                </div>
                                <div class="rounded p-2 bg-light">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Hóa đơn đặt hàng</h3>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Số tiền</h4>
                                    <div class="total-price ml-auto font-weight-bold"> 0 </div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Mã giảm giá</h4>
                                    <div class="ml-auto font-weight-bold"> 0 % </div>
                                </div>

                                <div class="d-flex">
                                    <h4>Phí giao hàng</h4>
                                    <div class="feeship ml-auto font-weight-bold"> Miễn phí </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Tổng cộng</h5>
                                    <div class="total-price-payment ml-auto h5">0 </div>
                                    <input type="hidden" name="sum-prices" value=""/>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <button type="submit" style="color: white;" class="ml-auto btn hvr-hover">Đặt hàng</button> </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<!-- End Cart -->
<script>
    function changePaymentMethod() {
        document.getElementById('home').checked = true;
    }

</script>

<?= $this->endSection() ?>