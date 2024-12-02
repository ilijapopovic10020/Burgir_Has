<?php
include '../../config/connection.php';
include '../../logic/functions.php';
include '../fixed/head.php';
include '../fixed/admin-nav.php';

$surveys = get_survey();
$ratings = get_ratings();
?>

<main>
    <div class="container my-5 text-white d-flex justify-content-center align-items-center">
        <table class="table table-dark align-middle w-75">
            <thead>
            <tr>
                <th scope="col" class="p-2">#</th>
                <th scope="col" class="p-2">Ime Prezime</th>
                <th scope="col" class="p-2">Ocena</th>
                <th scope="col" class="p-2">Poruka</th>
            </tr>
            </thead>
            <tbody>
            <?php $sn = 1 ?>
            <?php foreach ($surveys as $survey): ?>
                <tr class="p-1">
                    <th class="p-2"><?= $sn ?></th>
                    <td class="p-2"><?= $survey->fullname ?></td>
                    <td class="p-2"><?= $survey->rating_name ?></td>
                    <td class="p-2"><?= $survey->message ?></td>
                </tr>
                <?php $sn++ ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container my-5 text-white d-flex justify-content-center align-items-center">
        <table class="table table-dark align-middle w-75">
            <thead>
            <tr>
                <th scope="col" class="p-3">Ocena</th>
                <th scope="col" class="p-3">Statistika</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ratings as $rating): ?>
                <?php
                $rating_count = get_rating_count($rating->rating_id);
                $rating_total = get_all_ratings_count();
                $rating_percentage = floor(($rating_count->rating_count / $rating_total->rating_total) * 100);
                ?>
                <tr>
                    <td class="p-3"><?= $rating->rating_name ?></td>
                    <td class="p-3"><?= $rating_percentage ?> %</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="../../assets/js/main.js"></script>