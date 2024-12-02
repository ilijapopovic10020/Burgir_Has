<?php
include '../../config/connection.php';
include '../../logic/functions.php';

include '../fixed/head.php';
include '../fixed/admin-nav.php';

$foods = get_food();
?>

<main>
    <div style="height: 50px"></div>
    <div class="container my-5 text-white d-flex justify-content-center align-items-center" id="display-field">
        <table class="table table-dark align-middle">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Naziv</th>
                <th scope="col">Kategorija</th>
                <th scope="col">Popularno</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                        <?php $sn = 1 ?>
                        <?php foreach ($foods as $food): ?>
                            <tr class="p-1">
                                <th><?= $sn ?></th>
                                <td><?= $food->food_name ?></td>
                                <td><?= $food->category_name ?></td>
                                <td><?= $food->food_popular ? 'Da' : 'Ne' ?></td>
                                <td class="text-center">
                                    <a href="admin-display-food.php?id=<?= $food->food_id ?>" class="btn btn-coral">Prikaži</a>
                                </td>
                            </tr>
                            <?php $sn++ ?>
                        <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="../../assets/js/main.js"></script>