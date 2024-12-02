<?php
$path = calculate_relative_path();
?>
<footer id="footer" class="text-center text-lg-start text-muted">
    <div class="d-flex justify-content-center justify-content-lg-between p-4">
        <div class="me-5 d-none d-lg-block">
            <span class="text-white">Prijavite se na naš newsletter i ostanite u toku sa akcijama</span>
        </div>
        <div>
            <form action="">
                <div class="input-group">
                    <input type="hidden" id="path" value="<?= $path ?>">
                    <input class="form-control" placeholder="Email" type="text" id="nl-email">
                    <input class="btn btn-lg-coral" id="btn-newsletter" type="button" value="Pošalji">
                </div>
            </form>
        </div>
    </div>
    <hr class="text-white w-75 mx-auto">
    <div class="d-flex justify-content-center justify-content-lg-between p-4">
        <div class="me-5 d-none d-lg-block">
            <span class="text-white">Posteti te nas na društvenim mrežama:</span>
        </div>
        <div>
            <a href="http://www.facebook.com/" target="_blank" class="me-4 text-reset">
                <i class="fab fa-facebook-f text-white"></i>
            </a>
            <a href="http://www.tiktok.com/" target="_blank" class="me-4 text-reset">
                <i class="fa-brands fa-tiktok text-white"></i>
            </a>
            <a href="http://www.instagram.com/" target="_blank" class="me-4 text-reset">
                <i class="fa-brands fa-instagram text-white"></i>
            </a>
        </div>
    </div>
    <hr class="text-white w-75 mx-auto">
    <div>
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 lg-coral">
                        <i class="fa-solid fa-burger"></i> Burgir Has
                    </h6>
                    <p class="text-white">
                        "Osvježite svoj dan uz naše ukusne kreacije i doživite pravu eksploziju ukusa u svakom
                        zalogaju."
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 lg-coral">
                        Korisni linkovi
                    </h6>
                    <p>
                        <a href="<?= $path ?>index.php" class="text-white">Početna</a>
                    </p>
                    <p>
                        <a href="<?= $path ?>views/pages/meni.php" class="text-white">Meni</a>
                    </p>
                    <p>
                        <a href="<?= $path ?>views/pages/contact.php" class="text-white">Kontakt</a>
                    </p>
                    <p>
                        <a href="<?= $path ?>views/pages/contact.php" class="text-white">Proflina</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 lg-coral">Kontakt</h6>
                    <p class="text-white"><i class="fas fa-home me-3 text-white"></i>Bulevar Kralja Alkesandra 11</p>
                    <p class="text-white"><i class="fas fa-envelope me-3 text-white"></i>burgirhas@gmail.com</p>
                    <p class="text-white"><i class="fas fa-phone me-3 text-white"></i> +381 011 100 200</p>
                    <p class="text-white"><i class="fas fa-phone me-3 text-white"></i> +381 011 100 300</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="<?= $path ?>index.php">Burgir Has</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/25d233a38a.js" crossorigin="anonymous"></script>

<script src="<?= $path ?>assets/js/main.js"></script>
</body>

</html>