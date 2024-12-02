<?php
include '../../config/connection.php';
include '../../logic/functions.php';

include '../fixed/head.php';
include '../fixed/admin-nav.php';

$food_id = $_GET['id'];
$food = get_food_by_id($food_id)
?>

<main>
    <div style="height: 30px"></div>
    <div class="container mt-5 text-white" id="display-field">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="food-card text-dark">
                    <div class="food-card_img">
                        <img src="../../assets/imgs/food_img/<?= $food->food_image_url ?>"
                             alt="<?= $food->food_image_alt ?>">
                        <?php if ($food->food_popular) : ?>
                            <p class="p-1 rounded">
                                Popularno
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="food-card_content">
                        <div class="food-card_title-section mb-0">
                            <p class="food-card_title"><?= $food->food_name ?></p>
                            <p class="food-card_author"><?= $food->category_name ?></p>
                        </div>
                        <hr>
                        <div class="food-card_bottom-section">
                            <div class="space-between">
                                <p><?= $food->food_desc ?></p>
                            </div>
                            <div class="space-between">
                                <div>
                                    <span class="fa fa-fire"></span> <?= $food->food_kcal ?> Kcal
                                </div>
                            </div>
                            <hr>
                            <div class="space-between">
                                <div class="food-card_price">
                                    <span><?= $food->food_price ?> RSD</span>
                                </div>
                            </div>
                            <div class="space-between">
                                <a href="admin-update-food.php?id=<?= $food->food_id ?>"
                                   class="btn btn-success w-50 me-2">Izmeni
                                </a>
                                <a href="admin-delete-food.php?id=<?= $food->food_id ?>" class="btn btn-danger w-50">Obriši</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/25d233a38a.js" crossorigin="anonymous"></script>

<script src="../../assets/js/main.js"></script>