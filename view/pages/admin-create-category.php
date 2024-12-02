<?php
include '../../config/connection.php';
include '../../logic/functions.php';

include '../fixed/head.php';
include '../fixed/admin-nav.php';

$categories = get_categories();
?>

<main>
    <div style="height: 20px"></div>
    <div class="container mt-5 text-white">
        <div class="row text-white d-flex justify-content-center align-items-center">
            <div class="col-sm-6 col-md-6 col-lg-5 shadow-lg p-3">
                <h1 class="text-center coral">
                    Dodaj novu kategoriju
                </h1>
                <form>
                    <div class="form-group my-3">
                        <label for="foodName">Naizv Kategorije</label>
                        <input type="text" class="form-control" id="foodName" placeholder="Unesite naziv kategorije">
                    </div>
                    <div class="text-center my-3">
                        <a type="button" class="btn btn-coral w-75">Dodaj Kategoriu</a>
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