<?php
include "header.template.php";
?>
<section class="catalog-header">
    <div class="container">
        <h1 class="pink">
            Welcome, <?=\App\AuthManager::get()->user()->name?>!
        </h1>
        <div class="bread-crumbs">
            <ul>
                <li><a href="/">Home</a></li>
                <li> / <a href="#" class="active"><?=\App\AuthManager::get()->user()->name?></a></li>
            </ul>
        </div>
    </div>
</section>
<?php
include "footer.template.php";
?>
