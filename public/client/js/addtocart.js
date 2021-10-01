if ( typeof cart !== 'undefined'){
    console.log(cart);
} else{
    let feeShip = 0;
    let totalPricePayments = 0;
    let inputHidden = document.querySelector('input[name="sum-prices"]');
    let cart = [];

    addToCart = (event, element) => {
        event.preventDefault();
        var pathArray = window.location.pathname.split('/');
        let pid = element.dataset.id;
        const maxquantity = (document.getElementById('maxquantity-'+pid)) ? + document.getElementById('maxquantity-'+pid).value : 0;
        const quantity = document.querySelector('input[name="quantity"]') ? + document.querySelector('input[name="quantity"]').value : 0;
        // console.log(pid, "max:" + maxquantity);
        if (!pid) pid = pathArray[pathArray.length - 1];
        let check = countProductInCart(pid, quantity, maxquantity);
        // console.log(check);
        if (check == -1) {
            getProductById(pid, quantity);
        }
    };

    addToCartFromDetail = (event, element)=>{

    };

    deleteItem = (event, element) => {
        event.preventDefault();
        let pid = element.dataset.id;
        // console.log(pid);
        getCart();
        let allItem = [...cart];
        let affterDelete = allItem.filter(e => e.id != pid);
        cart = affterDelete;
        setCart();
        renderCart();
        CheckUrl();
    };

    getProductById = (id, quantity) => {
        $.ajax({
            url: "http://localhost/thewayshop/public/Product/getById",
            type: "GET",
            dataType: "json",
            data: {
                pid: id,
            },
            success: function (result) {
                if (result.status == 200) {
                    let { data } = result;
                    const product = {
                        id: data.id,
                        name: data.product_name,
                        image: data.image,
                        price: data.price,
                        quantity: quantity ? quantity : 1,
                    };

                    getCart();
                    cart.push(product);
                    setCart();
                    renderCart();
                    CheckUrl();
                }
            },
        });
    };

    countProductInCart = (pid, quantity, maxquantity) => {
        getCart();
        let allItem = [...cart];
        let itemIndex = allItem.findIndex((i) => i.id == pid);

        if (itemIndex === -1) {
            return -1;
        }

        let newQuantity = quantity ? allItem[itemIndex].quantity + quantity : allItem[itemIndex].quantity + 1;
        if(newQuantity > maxquantity){
            newQuantity = maxquantity;
        }
        let newItem = {
            ...cart[itemIndex],
            quantity: newQuantity,
        };

        cart[itemIndex] = newItem;

        setCart();
        getCart();
        renderCart();
        CheckUrl();
        return 1;
    };

    function setCart() {
        localStorage.setItem("cart", JSON.stringify(cart));
    }

    function getCart() {
        if (localStorage.getItem("cart") != null) {
            cart = JSON.parse(localStorage.getItem("cart"));
        }
    }

    function renderCart() {
        getCart();
        let list = document.querySelector(".cart-list");
        let cartTotal = document.querySelector(".cart-total");
        let html = "";

        var totalPrice = 0;

        cart
            .slice()
            .reverse()
            .forEach((i) => {
                html += `<li>
                <a href="#" style="float: right;margin-left: 5px;color: #333 !important;" data-id="${i.id}" onclick="deleteItem(event, this)"><i class="fas fa-times"></i></a>
                <a class="photo"><img src="${i.image}" class="cart-thumb" alt="${i.name}" /></a>
                <a target="_blank" href="http://localhost/thewayshop/public/Product/${i.id}">${i.name.slice(0, 52) + (i.name.length > 52 ? "..." : "")}</a>
                <p style="margin-left: 60px">${i.quantity} x <span class="price">${i.price} VNĐ</span></p>
            </li> `;
            });

        cart.every((i) => {
            if (i.price == "") {
                totalPrice = "";
                return false;
            } else {
                let bef = i.price.replaceAll(".", "");
                var t = Number(bef);
                totalPrice += t * + i.quantity;
                return true;
            }
        });

        if (html == "") {
            html = "<li><p>Giỏ hàng trống.</p></li>";
        }

        let totalPricehtml = `<strong>Total</strong>: ${formatNumber(totalPrice)} VNĐ`;

        let cart_count = document.querySelectorAll(".badge");

        cart_count.forEach((e) => {
            e.classList.add("shake");
            setTimeout(() => {
                e.classList.remove("shake");
            }, 1000);
            e.innerHTML = cart.length;
        });

        cartTotal.innerHTML = totalPricehtml;

        list.innerHTML = html;
    }

    renderCart();
    change_quantity = (event, element) =>{
        event.preventDefault();
        let pid = element.dataset.id;
        let chqty = document.getElementById('quantity-product-'+pid).value;

        // console.log(pid,chqty);
        getCart();
        let allItem = [...cart];
        allItem.slice().reverse().forEach((i)=>{
            if(i.id == pid){
                i.quantity = chqty
            }
        })
        setCart();
        renderCart();
        CheckUrl();
        // console.log(allItem);
    };
    changeShipMethod = (event, element) =>{
        const sid = element.dataset.idship;
        const option = document.querySelector('span[name="ship-fee-'+sid+'"]').innerHTML;
        const total = document.querySelector('.total-price-payment');
        if(option == "Miễn phí"){
            feeShip = 0;
        } else{
            feeShip = ((option.split(" ")[0]).split(".")).join("");
        }
        let ship = document.querySelector('.feeship');
        ship.innerHTML = option;
        let sum = Number(totalPricePayments) + Number(feeShip);
        total.innerHTML = formatNumber(sum) + " VNĐ";
        inputHidden.value = formatNumber(sum);
        // console.log(formatNumber(sum));
        // console.log(new Intl.NumberFormat('vi-VN',{style:'currency',currency:'VND'}).format(sum));
    };

    // function to convert numbers into Vietnamese currency
    function formatNumber(number) {
        return number.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }

    // To convert the number of mandarins into Vietnamese currency, you can use:
    // console.log(new Intl.NumberFormat('vi-VN',{style:'currency',currency:'VND'}).format(sum));
    // or function formatNumber()
    
    function CheckUrl() {
        if(((window.location.href).split('/'))[5] == "Cart"){
            CartBeforCheckout();
        }
        if(((window.location.href).split('/'))[5] == "Checkout"){
            // console.log("checkout");
            CartCheckout();
        }
    }

    function CartBeforCheckout() {
        getCart();
        const CartView = document.querySelector('.cart-box-main');
        // console.log(CartView);
        const listItem = document.querySelector('table > tbody');
        const totalPricePayment= document.querySelector('.total-price-payment');
        const discountPercent = document.getElementById('discount-percent').value;
        
        // console.log(CartView, listItem);
        const subtotalDOM = document.querySelector('.product-subtotal');
        let html = "";

        cart.slice().reverse().forEach((i) => {
            html +=
            `<tr>
                <td class="thumbnail-img">
                    <a href="#">
                        <img class="img-fluid" src="${i.image}" alt="" />
                    </a>
                </td>
                <td class="name-pr">
                    <a href="Product/${i.id}">
                        ${i.name}
                    </a>
                </td>
                <td class="price-pr">
                    <input type="hidden" id="price-one" value="${(i.price.split('.').join(''))}">
                    <p>${i.price} VNĐ</p>
                </td>
                <td class="quantity-box">
                    <input type="number" data-id="${i.id}" id="quantity-product-${i.id}" onchange="change_quantity(event, this)"  value="${i.quantity}" min="1" max="" class="c-input-text qty text">
                </td>
                <td class="total-pr">
                    <p id="total-price-${i.id}">${formatNumber((i.price.split('.').join('')) * (i.quantity))} VNĐ</p>
                </td>
                <td>
                    <a href="#"  data-id="${i.id}" onclick="deleteItem(event, this)">
                        <i class="fas fa-times"></i>
                    </a>
                </td>
            </tr>`;
        });
        let subtotal = 0;
        cart.map(element => {
            subtotal += +(element.price.split('.').join('')) * element.quantity;
        });
        subtotalcart = +subtotal;
        
        if(html != ""){
            listItem.innerHTML = html;
            subtotalDOM.innerHTML = formatNumber(subtotalcart) + " VNĐ";
            var pricepayment = (subtotalcart - ((subtotalcart/100)*discountPercent));
            console.log(pricepayment);
            totalPricePayment.innerHTML = formatNumber(pricepayment) + " VNĐ";
            console.log("discount "+discountPercent+" %");
        }else{
            CartView.innerHTML = "";
            CartView.innerHTML = `<div style="text-align: center;" class="container">
            <h1>Giỏ hàng rỗng</h1>
            <a class="btn hvr-hover" style="color: #ffffff;" data-id="<?=$item['id']?>" type="button" href="http://localhost/thewayshop/public/" >Tiếp tục mua hàng</a>
            </div>`;
        }
        
    }
    // console.log(((window.location.href).split('/'))[5]);
    CheckUrl();
    function CartCheckout() {
        getCart();
        let shipMethod = document.querySelector(".ship-method");
        let totalPrice = document.querySelector('.total-price');
        // console.log(ship);
        let html_shipMethod = `<div class="custom-control custom-radio">
        <input id="shippingOption1" name="shipping-option" class="custom-control-input" value="1" checked="checked" type="radio" data-idship="1" onclick="changeShipMethod(event, this)">
        <label class="custom-control-label" for="shippingOption1">Giao hàng cơ bản</label> <span name="ship-fee-1" class="float-right font-weight-bold">Miễn phí</span>
    </div>
    <div class="ml-4 mb-2 small">(3-7 ngày làm việc)</div>
    <div class="custom-control custom-radio">
        <input id="shippingOption2" name="shipping-option" class="custom-control-input" value="2" type="radio" data-idship="2" onclick="changeShipMethod(event, this)">
        <label class="custom-control-label" for="shippingOption2">Giao hàng nhanh</label> <span name="ship-fee-2" class="float-right font-weight-bold">40.000 VNĐ</span>
    </div>
    <div class="ml-4 mb-2 small">(2-4 ngày)</div>`;
        shipMethod.innerHTML = html_shipMethod;
        let ViewList = document.querySelector('div > div.rounded.p-2.bg-light');
        let totalPricePay = document.querySelector('.total-price-payment');
        let html_listProduct = "";
        cart.slice().reverse().forEach((e) => {
            html_listProduct += `<div class="media mb-2 border-bottom">
            <div class="media-body"><input type="hidden" name="productname[]" value="${e.id}"/> <a target="_blank" href="Product/${e.id}">${e.name}</a>
            <div class="small text-muted" value=""> <input type="hidden" name="prices[]" value="${e.price}"/>Giá: ${(e.price)} VNĐ<span class="mx-2">|</span><input type="hidden" name="quantity[]" value="${e.quantity}"/> Số lượng: ${e.quantity} <span class="mx-2">|</span><input type="hidden" name="total-prices[]" value="${formatNumber((e.price.split('.').join('')) * (e.quantity))}"/> Tổng tiền: ${formatNumber((e.price.split('.').join('')) * (e.quantity))} VNĐ</div>
            </div>
        </div>`;
        });
        
        // console.log(ViewList, html_listProduct);
        let subtotal = 0;
        cart.map(element => {
            subtotal += +(element.price.split('.').join('')) * element.quantity;
        });
        subtotalcart = +subtotal;
        totalPricePayments = subtotalcart;
        ViewList.innerHTML = html_listProduct;
        totalPrice.innerHTML = formatNumber(subtotalcart) + " VNĐ";
        totalPricePay.innerHTML = formatNumber(subtotalcart) + " VNĐ";
        inputHidden.value = formatNumber(subtotalcart);
    }
    // CartCheckout();
    rendetListProductCheckOut = () => {
        let list = document.querySelector(".checkout-cart");
        if (list != null) {
            getCart();
            html = "";
            cart.forEach((e) => {
                html += ` <tr>
            <td>${e.name} <span class="product-qty">x ${e.quantity}</span></td>
            <td>${e.price}</td>
        </tr>`;
            });
            list.innerHTML = html;
        }
    };
    rendetListProductCheckOut();
}