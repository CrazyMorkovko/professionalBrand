<?php
include "header.template.php";
?>
<section class="catalog-header">
    <div class="container">
        <h1 class="pink">
            Log In
        </h1>
        <div class="bread-crumbs">
            <ul>
                <li><a href="/">Home</a></li>
                <li> / <a href="#" class="active">Log In</a></li>
            </ul>
        </div>
    </div>
</section>
<div class="checkout-blocks login-blocks">
    <div class="container">
        <div class="checkout-form">
            <form action="/?page=login" method="post">
                <fieldset class="login-form">
                    <div class="help-text">Please log in below</div>
                    <div class="form-group">
                        <label>
                            EMAIL ADDRESS
                            <span class="text-error">
                                *
                            </span>
                        </label>
                        <input class="input-text" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label>
                            PASSWORD
                            <span class="text-error">
                                *
                            </span>
                        </label>
                        <input class="input-text" type="password" name="password">
                    </div>
                    <div class="text-error">* Required Fields</div>
                    <?php if (isset($errors) && count($errors) > 0): ?>
                        <div class="text-error">
                            <?php foreach ($errors as $error): ?>
                                <?=$error?> <br>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="btn-group">
                        <button class="btn grey-button">Log in</button>
                        <a href="#">Forgot Password?</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.template.php";
?>
