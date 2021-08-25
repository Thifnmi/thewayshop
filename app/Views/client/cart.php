<?= $this->extend('client/_Layout') ?>
<?= $this->section('content_Shop') ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Cart</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>/Shop">Shop</a></li>
                    <li class="breadcrumb-item active">Cart</li>
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
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" id="code" name="code" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button id="coupon" name="coupon" class="btn btn-theme" type="button">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <input value="Update Cart" type="submit">
                </div>
            </div> -->
        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold"> $ 130 </div>
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
                        <div class="product-subtotal ml-auto h5">0</div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="<?= base_url() ?>/Checkout" class="ml-auto btn hvr-hover">Checkout</a> </div>
        </div>

    </div>
</div>
<!-- End Cart -->
<script>
    const data = localStorage.getItem('cart');
    const cart = JSON.parse(data);
    console.log('cart :' +cart);
    if(cart == null){
        console.log('cart có cl gì đâu mà render cart');
    }
    let subtotal = 0;
    cart.map(element => {
        subtotal += +(element.price.split('.').join('')) * element.quantity;
    });
    subtotalcart = +subtotal;
    // console.log('subtotal cart:' +subtotalcart);
    const list = cart.map(element =>
        `<tr>
            <td class="thumbnail-img">
                <a href="#">
                    <img class="img-fluid" src="${element.image}" alt="" />
                </a>
            </td>
            <td class="name-pr">
                <a href="#">
                    ${element.name}
                </a>
            </td>
            <td class="price-pr">
                <p>${element.price}</p>
            </td>
            <td class="quantity-box"><input type="number" id="quantity-product-" onchange="change_quantity()" size="4" value="${element.quantity}" min="0" step="1" class="c-input-text qty text"></td>
            <td class="total-pr">
                <p>${(element.price.split('.').join('')) * (element.quantity)}</p>
            </td>
            <td class="remove-pr">
                <a href="#" class="item_remove" data-id="${element.id}" onclick="deleteItem(event, this)">
                    <i class="fas fa-times"></i>
                </a>
            </td>
        </tr>`
    );
    // console.log('list product:' +list);
    const listProduct = cart.map(element =>
        `<input type="hidden" name="productIds[]" value="${element.id}"/>
        <input type="hidden" name="productQuantities[]" value="${element.quantity}" />
        <input type="hidden" name="productPrices[]" value="${element.price.split('.').join('')}" />`
    );
    const listItem = document.querySelector('table > tbody');
    listItem.insertAdjacentHTML('beforeend', list);
    const subtotalDOM = document.querySelector('.product-subtotal');
    subtotalDOM.innerHTML = subtotalcart + ' VND';
    const html = `<input type="hidden" name="subtotal" value=${subtotalcart}/>`;
    document.querySelector('.breadcrumb').insertAdjacentHTML('afterend', listProduct + html);
    // console.log(subtotalDOM)
    // console.log(subtotalcart)
</script>
<script>
    function change_quantity(){
        var quantity = document.getElementById('quantity').value;
        console.log(quantity);
    }
</script>

<?= $this->endSection() ?>