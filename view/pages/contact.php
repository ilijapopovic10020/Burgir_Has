<?php
include '../../logic/functions.php';
include "../fixed/head.php";

?>
<header>
    <?php
    include "../fixed/nav.php"
    ?>


    <div class="container mt-5 p-3 shadow-lg">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 text-white d-flex justify-content-center align-items-center">
                <div class="container text-center">
                    <div class="my-5 text-center text-white">
                        <h3 class="text-uppercase fw-bold mb-4">Kontakt</h3>
                        <p><i class="fas fa-home me-3"></i>Bulevar Kralja Alkesandra 11</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            burgirhas@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +381 011 100 200</p>
                        <p><i class="fas fa-phone me-3"></i> +381 011 100 300</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
                <div class="my-5 text-center text-white">
                    <h3 class="text-uppercase fw-bold mb-4">Radno vreme</h3>
                    <p>Ponedeljak-Petak: 10 - 23h</p>
                    <p>
                        Subota: 13 - 23h
                    </p>
                    <p>Nedelja: Ne radimo</p>
                    <h5 class="lg-coral mb-4">Besplatna dostava za račun vrednosti 1500 dinara ili više</h5>
                </div>

            </div>
        </div>
    </div>
</header>

<main>
    <div class="container my-5 p-3 rounded shadow-lg ">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 my-3 text-white d-flex justify-content-center align-items-center">
                <div class="container text-center rounded message p-4">
                    <form>
                        <h4 class="text-center my-3">Pošaljite nam poruku</h4>
                        <div class="row">
                            <div class="mb-3 col-sm-12 col-md-12 col-lg-6">
                                <input type="text" class="form-control" id="message-full-name" placeholder="Ime i Prezime">
                                <p class="text-danger" hidden="hidden"></p>
                            </div>
                            <div class="mb-3 col-sm-12 col-md-12 col-lg-6">
                                <input type="email" class="form-control" id="message-email" placeholder="Email">
                                <p class="text-danger" hidden="hidden"></p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="message" rows="3"></textarea>
                            <p class="text-danger" hidden="hidden"></p>
                        </div>
                        <input type="button" value="Pošalji" id="btn-message" class="btn btn-lg-coral w-50">
                    </form>
                </div>
            </div>
            <div id="map" class="col-sm-12 col-md-12 col-lg-6 my-3 d-flex justify-content-center align-items-center">
                <!-- <iframe class="rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d897.4520691965703!2d20.492492594992527!3d44.79783444553182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a707f5a8694f5%3A0xdd55cb919e20077b!2z0JHRg9C70LXQstCw0YAg0LrRgNCw0ZnQsCDQkNC70LXQutGB0LDQvdC00YDQsCAyNTYsINCR0LXQvtCz0YDQsNC0!5e0!3m2!1ssr!2srs!4v1707736266805!5m2!1ssr!2srs"
                        width="600" height="450" style="border:0;"></iframe> -->

                <iframe class="rounded-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5661.651768525067!2d20.477217494198275!3d44.80473694654749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7a9c1c331b93%3A0xae3d7dbdc836bf39!2z0JLRg9C60L7QsiDRgdC_0L7QvNC10L3QuNC6LCDQkdC10L7Qs9GA0LDQtA!5e0!3m2!1ssr!2srs!4v1712689287612!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </script>
            </div>
        </div>
    </div>
</main>

<?php
include "../fixed/footer.php";
?>