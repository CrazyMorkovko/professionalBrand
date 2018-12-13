<?php
include "header.template.php";
?>
<section class="catalog-header">
    <div class="container">
        <h1 class="pink">
            New Arrivals
        </h1>
        <div class="bread-crumbs">
            <ul>
                <li><a href="/">Home</a></li>
                <li> / <a href="#">Men</a></li>
                <li> / <a href="#" class="active">New Arrivals</a></li>
            </ul>
        </div>
    </div>
</section>
<div class="shopping-card">
    <div class="container">
        <div class="nav-cart">
            <ul>
                <li>Product Details</li>
                <li>unite Price</li>
                <li>Quantity</li>
                <li>shipping</li>
                <li>Subtotal</li>
                <li>ACTION</li>
            </ul>
        </div>
        <div class="add-product">
            <img src="/uploads/products/product-9.jpg" alt="product">
        </div>
        <div class="add-product">
            <img src="/uploads/products/product-10.jpg" alt="product">
        </div>
        <div class="add-product">
            <img src="/uploads/products/product-13.jpg" alt="product">
        </div>
        <div class="cart-btn">
            <button class="btn">cLEAR SHOPPING CART</button>
            <button class="btn">cONTINUE sHOPPING</button>
        </div>
        <div class="cart-instruments">
            <div class="cart-instrument">
                <h4>Shipping Address</h4>
                <input type="text">
                <input type="text">
                <input type="text">
                <button class="btn">get a quote</button>
            </div>
            <div class="cart-instrument">
                <h4>coupon discount</h4>
                <p>Enter your coupon code if you have one</p>
                <input type="text">
                <button class="btn">Apply coupon</button>
            </div>
            <div class="cart-instrument">
                <p>Sub total $900</p>
                <h4>GRAND TOTAL $900</h4>
                <button class="btn pink-button">proceed to checkout</button>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.template.php";
?>
