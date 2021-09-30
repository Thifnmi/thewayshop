let cart = [];
const pricesDOM = document.querySelectorAll('.price');
const prices = Array.from(pricesDOM);

// console.log(prices)
addToCart = (event, element) => {
    event.preventDefault();
    var pathArray = window.location.pathname.split('/');
    const quantity = document.querySelector('input[name="quantity"]') ? + document.querySelector('input[name="quantity"]').value : 0;
    let pid = element.dataset.id;
    if (!pid) pid = pathArray[pathArray.length - 1];
    let check = countProductInCart(pid, quantity);

    if (check == -1) {
        getProductById(pid, quantity);
    }
    
};

deleteItem = (event, element) => {
    event.preventDefault();
    let pid = element.dataset.id;
    console.log(pid);
    getCart();
    let allItem = [...cart];
    let affterDelete = allItem.filter(e => e.id != pid);
    cart = affterDelete;
    setCart();
    renderCart();
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
            }
        },
    });
};

countProductInCart = (pid, quantity) => {
    getCart();
    let allItem = [...cart];
    let itemIndex = allItem.findIndex((i) => i.id == pid);

    if (itemIndex === -1) {
        return -1;
    }

    let newQuantity = quantity ? allItem[itemIndex].quantity + quantity : allItem[itemIndex].quantity + 1;

    let newItem = {
        ...cart[itemIndex],
        quantity: newQuantity,
    };

    cart[itemIndex] = newItem;

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
            <a target="_blank" href="http://localhost/thewayshop/public/Product/${i.id}">${i.name}</a>
            <p style="margin-left: 60px">${i.quantity} x <span class="price">${i.price} VND</span></p>
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

    let totalPricehtml = `<strong>Total</strong>: ${totalPrice} VND`;

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
          <td>${e.price}</td>
      </tr>`;
        });
        list.innerHTML = html;
    }
};

rendetListProductCheckOut();