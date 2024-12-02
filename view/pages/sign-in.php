<?php
include '../../config/connection.php';
include '../../logic/functions.php';
include '../fixed/head.php';
include '../fixed/nav.php';

global $path;
?>


<div class="container my-5 py-5">
    <div class="row">
        <h1 class="text-center coral mb-5">Prijavi se</h1>
        <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card px-3 border-0 shadow-lg bg-transparent">
                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="mx-auto my-5 coral" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <div class="card-body">
                    <form action="">
                        <input type="text" placeholder="Korisničko ime" id="log-username" class="form-control mb-4 py-2" />
                        <p class="text-danger" hidden="hidden"></p>
                        <input type="password" placeholder="Lozinka" id="log-password" class="form-control my-4 py-2" />
                        <p class="text-danger" hidden="hidden"></p>
                        <div class="text-center my-3">
                            <button type="button" id="btn-sign-in" class="btn btn-lg-coral w-50 rounded p-3">Prijavi se</button>
                            <p class="text-danger" id="error-message" hidden="hidden"></p>
                        </div>
                        <p class="text-white text-center" style="font-size: 18px !important;">Nemaš nalog? <a href="sign-up.php" class="coral">Kreiraj nalog</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/25d233a38a.js" crossorigin="anonymous"></script>

<script src="<?= $path ?>assets/js/main.js"></script>