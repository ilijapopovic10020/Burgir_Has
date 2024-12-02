<?php
include '../../config/connection.php';
include '../../logic/functions.php';

include '../fixed/head.php';
include '../fixed/admin-nav.php';

$categories = get_categories();
$food_id = $_GET['id'];
$food = get_food_by_id($food_id);
?>

<main>
    <div style="height: 20px"></div>
    <div class="container mt-5 text-white">
        <div class="row text-white d-flex justify-content-center align-items-center">
            <div class="col-sm-6 col-md-6 col-lg-5 shadow-lg p-3">
                <h1 class="text-center coral">
                    Izmeni proizvod
                </h1>
                <form>
                    <div class="form-group my-3">
                        <label for="foodName">Naziv proizvoda</label>
                        <input type="text" class="form-control" id="foodName" placeholder="Unesite naziv proizvoda" value="<?= $food->food_name ?>">
                    </div>
                    <div class="form-group my-3">
                        <label for="foodCategory">Kategorija proizvoda</label>
                        <select class="form-control" id="foodCategory">
                            <option value="0">Izaberite</option>
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category->category_id ?>"
                                    <?= ($category->category_name == $food->category_name) ? 'selected' : '' ?>>
                                    <?= $category->category_name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group my-3">
                        <label for="foodDesc">Opis proizvoda</label>
                        <textarea class="form-control" id="foodDesc" rows="3" placeholder="Unesite opis proizvoda"><?= $food->food_desc ?></textarea>
                    </div>
                    <div class="form-group my-3">
                        <label for="foodPrice">Cena proizvoda</label>
                        <input type="number" class="form-control" id="foodPrice" placeholder="Unesite cenu proizvoda" value="<?= $food->food_price ?>">
                    </div>
                    <div class="form-group my-3">
                        <label for="foodKcal">Broj kcal</label>
                        <input type="text" class="form-control" id="foodKcal" placeholder="Unesite broj kcal" value="<?= $food->food_kcal ?>">
                    </div>
                    <div class="form-group my-3">
                        <label for="foodImage">URL slike proizvoda</label>
                        <input type="file" class="form-control" id="foodImage">
                    </div>
                    <div class="form-group my-3">
                        <label for="foodPopular">Popularno</label>
                        <select class="form-control" id="foodPopular">
                            <option value="1"
                                <?= ($food->food_popular == 1) ? 'selected' : '' ?>>Da</option>
                            <option value="0"
                                <?= ($food->food_popular == 0) ? 'selected' : '' ?>>Ne</option>
                        </select>
                    </div>
                    <div class="text-center my-3">
                        <a type="button" class="btn btn-coral w-75">Dodaj proizvod</a>
                    </div>
                </form>
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