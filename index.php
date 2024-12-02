<?php
include 'config/connection.php';
include 'logic/functions.php';
include 'view/fixed/head.php';

$popular_food = get_food();
$ratings = get_ratings();
?>

    <header>
        <?php
        include "view/fixed/nav.php";
        ?>
        <div class="pt-5 text-center" style="margin: 4rem;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Burgir<span class="coral">HAS</span></h1>
                    <h4 class="mb-5">Doživite pravu eksploziju ukusa u svakom
                        zalogaju</h4>
                    <h6>Pogledaj više</h6>
                </div>
            </div>
            <div class="icon-wrapper">
                <a class="lg-coral" href="#trending-title"><i class="fa-solid fa-caret-down text-white"></i></a>
            </div>
        </div>
    </header>

    <main>
        <div class="container my-5">
            <div class="row">
                <h3 id="trending-title" class="text-center text-white mb-5">Najpopularnije</h3>
            </div>
            <div id="trending" class="row g-3">
                <?php foreach ($popular_food as $food) : ?>
                    <?php if ($food->food_popular) : ?>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                            <div class="food-card mx-2">
                                <div class="food-card_img">
                                    <img src="assets/imgs/food_img/<?= $food->food_image_url ?>"
                                         alt="<?= $food->food_image_alt ?>"
                                         class="h-100 w-100 object-fit-cover">
                                    <p class="p-1 rounded">Popularno</p>
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
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php
            if (isset($_SESSION['user'])) {
                $user_id = $_SESSION['user']->user_id;
                $survey_user = get_survey_by_user($user_id);
                if ($survey_user != null) {
                    $checked_rating = $survey_user->rating_id;
                    $entered_message = $survey_user->message;
                } else {
                    $checked_rating = 0;
                    $entered_message = '';
                }

            }
            ?>
            <div class="row rounded-5 shadow justify-content-around align-items-center  p-3 h-100 text-white g-3">
                <div class="col-lg">
                    <?php if (isset($_SESSION['user'])) : ?>
                        <h1 class="text-center">Anketa o sajtu</h1>
                        <?php if ($survey_user == null) : ?>
                            <p class="text-center">Molimo Vas da nam posvetite nekoliko trenutaka za ocenu našeg sajta
                                i,
                                ako želite, ostavite nam povratnu informaciju.</p>
                        <?php else: ?>
                            <p class="text-center">Ukoliko želite možete izmeniti anketu u svakom trenutku.</p>
                        <?php endif; ?>
                        <p class="text-center" for="rating">Opšta ocena:</p>
                        <form id="surveyForm">
                            <div class="form-group my-3 ms-5">
                                <?php foreach ($ratings as $rating) : ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sur-rating"
                                               value="<?= $rating->rating_id ?>" <?= $checked_rating == $rating->rating_id ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="sur-rating-1">
                                            <?= $rating->rating_name ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                                <p id="rating-error" class="text-danger" hidden="hidden"></p>
                            </div>
                            <div class="form-group">
                                <label for="sur-message">Komentari ili sugestije:</label>
                                <textarea class="form-control" id="sur-message"
                                          rows="4"><?= $entered_message ?></textarea>
                                <p class="text-danger" hidden="hidden"></p>
                            </div>
                            <div class="text-center">
                                <input type="hidden" id="sur-user-id" value="<?= $_SESSION['user']->user_id ?>">
                                <button type="button"
                                        id="<?= $survey_user == null ? 'btn-survey-send' : 'btn-survey-update' ?>"
                                        class="btn btn-lg-coral w-50 mt-3">
                                    <?= $survey_user == null ? 'Pošalji' : 'Izmeni' ?>
                                </button>
                            </div>
                        </form>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['user'])) : ?>
                        <div class="text-center">
                            <h1 class="text-center">Anketa o sajtu</h1>
                            <p class="text-center">Molimo Vas da se prijavite da bi ste popunili anketu.</p>
                            <a class="btn btn-lg-coral w-50" href="view/pages/sign-in.php">Prijavi se</a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg h-100" id="feedback-img">
                    <img src="assets/imgs/banner.jpg" alt="banner" class="h-100 w-100 object-fit-cover rounded ">
                </div>
            </div>
        </div>
    </main>

<?php
include "view/fixed/footer.php";
?>