<?php
include '../../config/connection.php';
include '../../logic/functions.php';
include '../fixed/head.php';
include '../fixed/nav.php';

$foods = get_food();
$categories = get_categories();
?>
<div class="container my-5">
    <div class="row text-center coral mb-3">
        <h1>Pogledajte sve sa našeg menija</h1>
    </div>
    <div class="row justify-content-center align-items-center g-3 p-3 bg-gradient my-3">
        <div class="col-md">
            <input type="text" id="sort-keyword" placeholder="Pretraži" class="form-control">
        </div>
        <div class="col-md">
            <Select id="sort-category" class="form-control">
                <option value="0">Izaberite</option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category->category_id ?>"><?= $category->category_name ?></option>
                <?php endforeach; ?>
            </Select>
        </div>
        <div class="col-md">
            <div class="form-check form-check-inline">
                <input type="checkbox" id="sort-popular" class="form-check-input" />
                <label class="form-check-label text-white">Popularno</label>
            </div>
        </div>
        <div class="col-md">
            <button class="btn btn-danger w-100" id="btn-filter"> Pretraži</button>
        </div>
        <div class="col-md">
            <button class="btn btn-danger w-100" id="btn-filter-clear">Poništi</button>
        </div>
    </div>

    <div class="row g-3" id="food-display">
        <?php foreach ($foods as $food) : ?>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="food-card h-100 mx-2">
                    <div class="food-card_img">
                        <img src="../../assets/imgs/food_img/<?= $food->food_image_url ?>" alt="<?= $food->food_image_alt ?>">
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
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
include '../fixed/footer.php'
?>