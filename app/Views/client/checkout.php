<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

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
                                    <label for="firstName">Họ *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="<?= $ar_name[$length] ?>" required>
                                    <div class="invalid-feedback">Bạn phải điền họ. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Tên *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="<?= $name ?>" required>
                                    <div class="invalid-feedback"> Bạn phải điền tên. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Tài khoản *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" placeholder="" readonly="true" required value="<?= $_SESSION['customer']['username'] ?>">
                                    <div class="invalid-feedback" style="width: 100%;">Bạn phải điền tài khoản. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Số điện thoại *</label>
                                <input type="email" class="form-control" id="email" placeholder="" required value="<?= $_SESSION['customer']['phone_number'] ?>">
                                <div class="invalid-feedback"> Hãy nhập số điện thoại để được liên hệ nhận đơn hàng. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Địa chỉ *</label>
                                <input type="text" class="form-control" id="address" placeholder="" required value="<?= $_SESSION['customer']['address'] ?>">
                                <div class="invalid-feedback"> Hãy nhập địa chỉ nhận hàng! </div>
                            </div>
                            <hr class="mb-4">
                            <div class="title"> <span>Thanh toán</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="home" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="home">Thanh toán khi nhận hàng</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="momo" name="paymentMethod" type="radio" class="custom-control-input" data-toggle="modal" data-target="#modal-content" required>
                                    <label class="custom-control-label" for="momo">Thanh toán qua Momo</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="bank" name="paymentMethod" type="radio" class="custom-control-input" data-toggle="modal" data-target="#modal-content"  required>
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
                                <textarea type="text" style="margin-top: 12px; margin-bottom: 0px; height: 198px;" class="form-control" id="note" placeholder="Ghi chú"></textarea>
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
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
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
                                    </div>
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
                                    <div class="ml-auto font-weight-bold"> $ 440 </div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Mã giảm giá</h4>
                                    <div class="ml-auto font-weight-bold"> $ 40 </div>
                                </div>

                                <div class="d-flex">
                                    <h4>Phí giao hàng</h4>
                                    <div class="ml-auto font-weight-bold"> Free </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Tổng cộng</h5>
                                    <div class="total-price ml-auto h5">0 </div>
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
        // console.log("close");
        document.getElementById('home').checked = true;
    }

    const data = localStorage.getItem('cart');
    const cart = JSON.parse(data);
    // console.log('cart :' +cart);

    let subtotal = 0;
    cart.map(element => {
        subtotal += +(element.price.split('.').join('')) * element.quantity;
    });
    subtotalcart = +subtotal;
    // console.log('subtotal cart:' +subtotalcart);
    const list = cart.map(element =>
        `<div class="media mb-2 border-bottom">
            <div class="media-body"> <a target="_blank" href="<?= base_url() ?>/Product/${element.id}">${element.name}</a>
                <div class="small text-muted">Giá: ${element.price} VND<span class="mx-2">|</span> Số lượng: ${element.quantity} <span class="mx-2">|</span> Tổng tiền: ${(element.price.split('.').join('')) * (element.quantity)} VND</div>
            </div>
        </div>`
    );
    // console.log('list: ' + list);
    const listProduct = cart.map(element =>
        `<input type="hidden" name="productIds[]" value="${element.id}"/>
        <input type="hidden" name="productQuantities[]" value="${element.quantity}" />
        <input type="hidden" name="productPrices[]" value="${element.price.split('.').join('')}" />`
    );
    let list_affter_split = "";
    let list_a = list.toString().split(',');
    for (let i = 0; i < list_a.length; i++) {
        list_affter_split += list_a[i];
    }
    // console.log('list affter split:' +list_affter_split);
    const listItem = document.querySelector('div > div.rounded.p-2.bg-light');
    listItem.insertAdjacentHTML('beforeend', list_affter_split);
    const subtotalDOM = document.querySelector('.total-price');
    subtotalDOM.innerHTML = subtotalcart + ' VND';
    const html = `<input type="hidden" name="subtotal" value=${subtotalcart}/>`;
    document.querySelector('.breadcrumb').insertAdjacentHTML('afterend', listProduct + html);
</script>

<?= $this->endSection() ?>