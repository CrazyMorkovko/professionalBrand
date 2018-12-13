<?php
include "header.template.php";
?>
<section class="catalog-header">
    <div class="container">
        <h1 class="pink">
            <?=$product['name']?>
        </h1>
        <div class="bread-crumbs">
            <ul>
                <li><a href="/">Home</a></li>
                <li> / <a href="/?page=catalog&id=<?=$product['category_id']?>"><?=$product['category_name']?></a></li>
                <li> / <a href="#" class="active"><?=$product['name']?></a></li>
            </ul>
        </div>
    </div>
</section>
<div class="single-product-slider">
    <div class="slider-buttons">
        <a href="#"><i class="fas fa-angle-left"></i></a>
        <a href="#"><i class="fas fa-angle-right"></i></a>
    </div>
    <div class="container">
        <div class="slider-img">
            <img src="/uploads/products/product-15.jpg" alt="product">
        </div>
    </div>
</div>
<div class="product-details">
    <div class="container">
        <div class="product-details-container">
            <h4 class="pink category-name">
                <?=$product['category_name']?> COLLECTION
            </h4>
            <div class="divider"></div>
            <h4 class="product-name">
                <?=$product['name']?>
            </h4>
            <p>
                <?=$product['description']?>
            </p>
            <div class="product-attributes">
                <div>MATERIAL: <span class="grey">COTTON</span></div>
                <div>DESIGNER: <span class="grey">BINBURHAN</span></div>
            </div>
            <h4 class="pink product-price">$<?=$product['price']?></h4>
            <hr>
            <div class="choose-forms">
                <div class="choose-form">
                    CHOOSE COLOR
                    <select name="color">
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                        <option value="black">Black</option>
                    </select>
                </div>
                <div class="choose-form">
                    CHOOSE SIZE
                    <select name="size">
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="xxl">XXL</option>
                    </select>
                </div>
                <div class="choose-form">
                    QUANTITY
                    <input type="number" value="2">
                </div>
                <button class="pink-button btn">
                    <i class="icon icon-cart"></i>
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
</div>
<div class="other-product">
    <div class="container">
        <h2>you may like also</h2>
        <div class="product-flex">
            <div class="product">
                <a href="#" class="product-card">
                    <div class="add-to-card-block">
                        <img src="/uploads/products/product-19.jpg" alt="product" class="product-img">
                        <button class="add-to-card-button btn">
                            <i class="icon icon-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                    <p class="titles">BLAZE LEGGINGS</p>
                    <p class="pink price">$52.00</p>
                </a>
            </div>
            <div class="product">
                <a href="#" class="product-card">
                    <div class="add-to-card-block">
                        <img src="/uploads/products/product-18.jpg" alt="product" class="product-img">
                        <button class="add-to-card-button btn">
                            <i class="icon icon-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                    <p class="titles">ALEXA SWEATER</p>
                    <p class="pink price">$52.00</p>
                </a>
            </div>
            <div class="product">
                <a href="#" class="product-card">
                    <div class="add-to-card-block">
                        <img src="/uploads/products/product-17.jpg" alt="product" class="product-img">
                        <button class="add-to-card-button btn">
                            <i class="icon icon-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                    <p class="titles">AGNES TOP</p>
                    <p class="pink price">$52.00</p>
                </a>
            </div>
            <div class="product">
                <a href="#" class="product-card">
                    <div class="add-to-card-block">
                        <img src="/uploads/products/product-16.jpg" alt="product" class="product-img">
                        <button class="add-to-card-button btn">
                            <i class="icon icon-cart"></i>
                            Add to Cart
                        </button>
                    </div>
                    <p class="titles">AGNES TOP</p>
                    <p class="pink price">$52.00</p>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.template.php";
?>
