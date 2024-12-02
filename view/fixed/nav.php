<?php
session_start();
$path = calculate_relative_path(__FILE__);
?>
<nav class="navbar navbar-expand-lg navbar-dark shadow-lg px-2">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#"><img src="<?= $path ?>assets/imgs/hamburger32x32.png">Burgir<span class="coral">Has</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="<?= $path ?>index.php">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="<?= $path ?>view/pages/meni.php">Meni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="<?= $path ?>view/pages/contact.php">Kontakt</a>
                </li>
                <?php if (isset($_SESSION['user'])) : ?>
                    <?php if ($_SESSION['user']->role_name == 'admin') : ?>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="<?= $path ?>view/pages/admin-foods.php">Admin Panel</a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="<?= $path ?>view/pages/cart.php"><i class="fa-solid fa-cart-shopping"></i> Korpa</a>
                    </li>
                    <?php if (isset($_SESSION['user'])) : ?>
                        <?php if ($_SESSION['user']->role_name == 'user') : ?>
<!--                            <li class="nav-item dropdown">-->
<!--                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                                    --><?php //= $_SESSION['user']->fullname ?><!-- <i class="fa-solid fa-user">-->
<!--                                </a>-->
<!--                                <ul class="dropdown-menu">-->
<!--                                    <li><a class="dropdown-item" href="--><?php //= $path ?><!--view/pages/user-profile.php"><i class="fa-solid fa-user"> Nalog</a></li>-->
<!--                                    <li><a class="dropdown-item" href="--><?php //= $path ?><!--logic/sign-out.php">Odjavi se</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="<?= $path ?>view/pages/user-profile.php"><i class="fa-solid fa-user"></i> <?= $_SESSION['user']->fullname ?></a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page"
                               href="<?= $path ?>logic/sign-out.php"><i
                                        class="fa-solid fa-arrow-right-from-bracket"></i> Odjavi se</a>
                        </li>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['user'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="<?= $path ?>view/pages/sign-in.php"><i class="fa-solid fa-user"></i> Prijavi se</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>