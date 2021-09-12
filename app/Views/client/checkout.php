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
        <div class="row">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="checkout-address">
                    <div class="title-left">
                        <h3>Thông tin liên hệ</h3>
                    </div>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <?php  $ar_name = explode(" ",$_SESSION['customer']['fullname']);
                                    $length = count(explode(" ",$_SESSION['customer']['fullname'])) - 1;
                                    $name = "";
                                    for($i = 0;$i < $length;$i++){
                                        $name = $name . $ar_name[$i]. " ";
                                    }?>
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Họ *</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="<?= $ar_name[$length]?>" required>
                                <div class="invalid-feedback">Bạn phải điền họ. </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Tên *</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="<?= $name?>" required>
                                <div class="invalid-feedback"> Bạn phải điền tên. </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username">Tài khoản *</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="username" placeholder="" readonly="true" required value="<?= $_SESSION['customer']['username']?>">
                                <div class="invalid-feedback" style="width: 100%;">Bạn phải điền tài khoản. </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Điạ chỉ email *</label>
                            <input type="email" class="form-control" id="email" placeholder="" value="<?= $_SESSION['customer']['email']?>">
                            <div class="invalid-feedback"> Hãy nhập địa chỉ email để cập nhập thông tin đơn hàng. </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Địa chỉ *</label>
                            <input type="text" class="form-control" id="address" placeholder="" required value="<?= $_SESSION['customer']['address']?>">
                            <div class="invalid-feedback"> Hãy nhập địa chỉ nhận hàng! </div>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="address2">Address 2 *</label>
                            <input type="text" class="form-control" id="address2" placeholder="">
                        </div>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country *</label>
                                <select class="wide w-100" id="country">
                                    <option value="Choose..." data-display="Select">Choose...</option>
                                    <option value="United States">United States</option>
                                </select>
                                <div class="invalid-feedback"> Please select a valid country. </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">State *</label>
                                <select class="wide w-100" id="state">
                                    <option data-display="Select">Choose...</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback"> Please provide a valid state. </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip *</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback"> Zip code required. </div>
                            </div>
                        </div>-->
                        <!--  -->
                        <hr class="mb-4">
                        <div class="title"> <span>Payment</span> </div>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="credit">Thanh toán khi nhận hàng</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="debit">Thanh toán qua Momo</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="paypal">Thanh toán qua tài khoản ngân hàng</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Tên trên thẻ</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required> <small class="text-muted">Tên được ghi trên thẻ</small>
                                <div class="invalid-feedback">Bạn phải điền tên chứ </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Số thẻ</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback"> Hãy điền số thẻ </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Hết hạn</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">Hãy nhập ngày hết hạn </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">Hãy nhập mã CCV </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="payment-icon">
                                    <ul>
                                        <li><img class="img-fluid" src="<?= base_url()?>/client/images/payment-icon/1.png" alt=""></li>
                                        <li><img class="img-fluid" src="<?= base_url()?>/client/images/payment-icon/2.png" alt=""></li>
                                        <li><img class="img-fluid" src="<?= base_url()?>/client/images/payment-icon/3.png" alt=""></li>
                                        <li><img class="img-fluid" src="<?= base_url()?>/client/images/payment-icon/5.png" alt=""></li>
                                        <li><img class="img-fluid" src="<?= base_url()?>/client/images/payment-icon/7.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-1">
                    </form>
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
                    <div class="col-12 d-flex shopping-box"> <a href="checkout.html" class="ml-auto btn hvr-hover">Đặt hàng</a> </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->
<script>
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
            <div class="media-body"> <a target="_blank" href="<?= base_url()?>/Product/${element.id}">${element.name}</a>
                <div class="small text-muted">Giá: ${element.price} VND<span class="mx-2">|</span> Số lượng: ${element.quantity} <span class="mx-2">|</span> Tổng tiền: ${(element.price.split('.').join('')) * (element.quantity)} VND</div>
            </div>
        </div>`
    );
    console.log('list: ' +list);
    const listProduct = cart.map(element =>
        `<input type="hidden" name="productIds[]" value="${element.id}"/>
        <input type="hidden" name="productQuantities[]" value="${element.quantity}" />
        <input type="hidden" name="productPrices[]" value="${element.price.split('.').join('')}" />`
    );
    let list_affter_split = "";
    let list_a = list.toString().split(',');
    for (let i = 0; i < list_a.length; i++){
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