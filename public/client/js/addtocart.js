let cart = [];
const pricesDOM = document.querySelectorAll('.price');
const prices = Array.from(pricesDOM);

console.log(prices)
addToCart = (event, element) => {
    event.preventDefault();
    var pathArray = window.location.pathname.split('/');
    const quantity = document.querySelector('input[name="quantity"]') ? +document.querySelector('input[name="quantity"]').value : 0;
    let pid = element.dataset.id;
    if (!pid) pid = pathArray[pathArray.length - 1];
    let check = countProductInCart(pid, quantity); //kiem tra mat hang da ton tai trong cart hay chua, neu ton tai thi quantity++
    if (check == -1) {
        getProductById(pid, quantity);
    }
    $.toast({
        text: '<a href="http://localhost:8080/thewayshop/public/Checkout">Check cart</a>', // Text that is to be shown in the toast
        heading: 'Add to cart suscess', // Optional heading to be shown on the toast
        icon: 'success', // Type of toast icon
        showHideTransition: 'slide', // fade, slide or plain
        allowToastClose: true, // Boolean value true or false
        hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
        stack: false, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
        position: 'mid-center', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
        
        textAlign: 'left',  // Text alignment i.e. left, right or center
        loader: true,  // Whether to show loader or not. True by default
        loaderBg: '#9EC600',  // Background color of the toast loader
        beforeShow: function () {}, // will be triggered before the toast is shown
        afterShown: function () {}, // will be triggered after the toat has been shown
        beforeHide: function () {}, // will be triggered before the toast gets hidden
        afterHidden: function () {}  // will be triggered after the toast has been hidden
    });
};
deleteItem = (event, element) => {
    event.preventDefault();
    let pid = element.dataset.id;
    getCart();
    let allItem = [...cart];
    let affterDelete = allItem.filter(e => e.id != pid);
    cart = affterDelete;
    setCart();
    renderCart();
};

getProductById = (id, quantity) => {
    //get product from sv
    $.ajax({
        url: "http://localhost:8080/thewayshop/public/Product/getById",
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
            }
        },
    });
};

countProductInCart = (pid, quantity) => {
    getCart(); //lay ve cart moi nhat
    let allItem = [...cart];
    let itemIndex = allItem.findIndex((i) => i.id == pid); //tim kiem product

    if (itemIndex === -1) {
        return -1;
    }
    // console.log(quantity);
    let newQuantity = quantity ? allItem[itemIndex].quantity + quantity : allItem[itemIndex].quantity + 1; //quantity++

    let newItem = {
        ...cart[itemIndex],
        quantity: newQuantity, //update quantity vao item moi
    };

    cart[itemIndex] = newItem; //thya item moi vao item cu

    setCart();
    getCart();
    renderCart();
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

// herehrehrehrhehhr
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
            <a target="_blank" href="Product/${i.id}" class="photo"><img src="${i.image}" class="cart-thumb" alt="${i.name}" /></a>
            <h6><a target="_blank" href="Product/${i.id}">${i.name}</a></h6>
            <p style="margin-left: 60px">${i.quantity} x <span class="price">${i.price} VND</span></p>
        </li> `;
        });

    cart.every((i) => {
        if (i.price == "Liên hệ") {
            totalPrice = "Liên hệ";
            return false;
        } else {
            // console.log(i)
            let bef = i.price.replaceAll(".", "");
            var t = Number(bef);
            totalPrice += t * +i.quantity;
            // console.log(totalPrice);
            return true;
        }
    });

    if (html == "") {
        html = "<li><p>You have no items in your shopping cart.</p></li>";
    }

    let totalPricehtml = `<strong>Total</strong>: ${totalPrice} VND`; //cart_totatl

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

rendetListProductCheckOut = () => {
    let list = document.querySelector(".checkout-cart");
    if (list != null) {
        getCart();
        html = "";
        cart.forEach((e) => {
            html += ` <tr>
          <td>${e.name} <span class="product-qty">x ${e.quantity}</span></td>
          <td>$${e.price}</td>
      </tr>`;
        });
        list.innerHTML = html;
    }
};

rendetListProductCheckOut();