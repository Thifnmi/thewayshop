<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Checkout</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
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
                        <h3>Billing address</h3>
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
                                <label for="firstName">First name *</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="<?= $ar_name[$length]?>" required>
                                <div class="invalid-feedback"> Valid first name is required. </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name *</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="<?= $name?>" required>
                                <div class="invalid-feedback"> Valid last name is required. </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username">Username *</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="username" placeholder="" required value="<?= $_SESSION['customer']['username']?>">
                                <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email Address *</label>
                            <input type="email" class="form-control" id="email" placeholder="" value="<?= $_SESSION['customer']['email']?>">
                            <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Address *</label>
                            <input type="text" class="form-control" id="address" placeholder="" required value="<?= $_SESSION['customer']['address']?>">
                            <div class="invalid-feedback"> Please enter your shipping address. </div>
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
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                        <hr class="mb-4">
                        <div class="title"> <span>Payment</span> </div>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required> <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback"> Name on card is required </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback"> Credit card number is required </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback"> Expiration date required </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback"> Security code required </div>
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
                                <h3>Shipping Method</h3>
                            </div>
                            <div class="mb-4">
                                <div class="custom-control custom-radio">
                                    <input id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked" type="radio">
                                    <label class="custom-control-label" for="shippingOption1">Standard Delivery</label> <span class="float-right font-weight-bold">FREE</span>
                                </div>
                                <div class="ml-4 mb-2 small">(3-7 business days)</div>
                                <div class="custom-control custom-radio">
                                    <input id="shippingOption2" name="shipping-option" class="custom-control-input" type="radio">
                                    <label class="custom-control-label" for="shippingOption2">Express Delivery</label> <span class="float-right font-weight-bold">$10.00</span>
                                </div>
                                <div class="ml-4 mb-2 small">(2-4 business days)</div>
                                <div class="custom-control custom-radio">
                                    <input id="shippingOption3" name="shipping-option" class="custom-control-input" type="radio">
                                    <label class="custom-control-label" for="shippingOption3">Next Business day</label> <span class="float-right font-weight-bold">$20.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="odr-box">
                            <div class="title-left">
                                <h3>Shopping cart</h3>
                            </div>
                            <div class="rounded p-2 bg-light">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="order-box">
                            <div class="title-left">
                                <h3>Your order</h3>
                            </div>
                            <div class="d-flex">
                                <div class="font-weight-bold">Product</div>
                                <div class="ml-auto font-weight-bold">Total</div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex">
                                <h4>Sub Total</h4>
                                <div class="ml-auto font-weight-bold"> $ 440 </div>
                            </div>
                            <div class="d-flex">
                                <h4>Discount</h4>
                                <div class="ml-auto font-weight-bold"> $ 40 </div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex">
                                <h4>Coupon Discount</h4>
                                <div class="ml-auto font-weight-bold"> $ 10 </div>
                            </div>
                            <div class="d-flex">
                                <h4>Tax</h4>
                                <div class="ml-auto font-weight-bold"> $ 2 </div>
                            </div>
                            <div class="d-flex">
                                <h4>Shipping Cost</h4>
                                <div class="ml-auto font-weight-bold"> Free </div>
                            </div>
                            <hr>
                            <div class="d-flex gr-total">
                                <h5>Grand Total</h5>
                                <div class="total-price ml-auto h5">0 </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-12 d-flex shopping-box"> <a href="checkout.html" class="ml-auto btn hvr-hover">Place Order</a> </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Cart -->
<script>
    const data = localStorage.getItem('cart');
    const cart = JSON.parse(data);
    console.log('cart :' +cart);
    
    let subtotal = 0;
    cart.map(element => {
        subtotal += +(element.price.split('.').join('')) * element.quantity;
    });
    subtotalcart = +subtotal;
    // console.log('subtotal cart:' +subtotalcart);
    const list = cart.map(element =>
        `<div class="media mb-2 border-bottom">
            <div class="media-body"> <a href="detail.html">${element.name}</a>
                <div class="small text-muted">Price: ${element.price} VND<span class="mx-2">|</span> Qty: ${element.quantity} <span class="mx-2">|</span> Subtotal: ${(element.price.split('.').join('')) * (element.quantity)} VND</div>
            </div>
        </div>`
    );
    // console.log('list product:' +list);
    const listProduct = cart.map(element =>
        `<input type="hidden" name="productIds[]" value="${element.id}"/>
        <input type="hidden" name="productQuantities[]" value="${element.quantity}" />
        <input type="hidden" name="productPrices[]" value="${element.price.split('.').join('')}" />`
    );
    const listItem = document.querySelector('div > div.rounded.p-2.bg-light');
    listItem.insertAdjacentHTML('beforeend', list);
    const subtotalDOM = document.querySelector('.total-price');
    subtotalDOM.innerHTML = subtotalcart + ' VND';
    const html = `<input type="hidden" name="subtotal" value=${subtotalcart}/>`;
    document.querySelector('.breadcrumb').insertAdjacentHTML('afterend', listProduct + html);
</script>

<?= $this->endSection() ?>