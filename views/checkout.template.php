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
<div class="checkout-blocks">
    <div class="container">
        <div class="checkout-block shipping-address">
            <button class="btn catalog-menu-expand">01. Shipping Address</button>
            <div class="checkout-forms">
                <form class="checkout-form">
                    <fieldset>
                        <legend>Check as a guest or register</legend>
                        <div class="help-text">Register with us for future convenience</div>
                        <div class="form-group">
                            <label class="radio">
                                <input type="radio" name="checkout-type">
                                checkout as guest
                            </label>
                            <label class="radio">
                                <input type="radio" name="checkout-type" checked>
                                register
                            </label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>register and save time!</legend>
                        <div class="help-text">Register with us for future convenience</div>
                        <div class="features">
                            <div class="help-text">
                                <i class="fas fa-angle-double-right"></i> Fast and easy checkout
                            </div>
                            <div class="help-text">
                                <i class="fas fa-angle-double-right"></i> Easy access to your order history and status
                            </div>
                        </div>
                        <button class="btn grey-button">Continue</button>
                    </fieldset>
                </form>
                <div class="checkout-form">
                    <fieldset class="login-form">
                        <legend>Already registered?</legend>
                        <div class="help-text">Please log in below</div>
                        <div class="form-group">
                            <label>
                                EMAIL ADDRESS
                                <span class="text-error">
                                    *
                                </span>
                            </label>
                            <input class="input-text" type="email">
                        </div>
                        <div class="form-group">
                            <label>
                                PASSWORD
                                <span class="text-error">
                                    *
                                </span>
                            </label>
                            <input class="input-text" type="password">
                        </div>
                        <div class="text-error">* Required Fields</div>
                        <div class="btn-group">
                            <button class="btn grey-button">Log in</button>
                            <a href="#">Forgot Password?</a>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="checkout-block">
            <button class="btn catalog-menu-expand">02. BILLING INFORMATION</button>
        </div>
        <div class="checkout-block">
            <button class="btn catalog-menu-expand">03. SHIPPING INFORMATION</button>
        </div>
        <div class="checkout-block">
            <button class="btn catalog-menu-expand">04. SHIPPING METHOD</button>
        </div>
        <div class="checkout-block">
            <button class="btn catalog-menu-expand">05. PAYMENT METHOD</button>
        </div>
        <div class="checkout-block">
            <button class="btn catalog-menu-expand">06. ORDER REVIEW</button>
        </div>
    </div>
</div>
<?php
include "footer.template.php";
?>
