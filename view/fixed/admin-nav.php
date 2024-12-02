<nav class="navbar navbar-expand-xl navbar-dark shadow-lg px-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="../../index.php">
            <img src="../../assets/imgs/hamburger32x32.png" alt="logo" width="32px"> Burgir <span
                class="coral">Has</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar"
                aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
             aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title coral" id="offcanvasDarkNavbarLabel">Admin Panel</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a href="admin-foods.php" class="nav-link">Proizvodi</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-create-food.php" class="nav-link">Dodaj Proizvod</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-categories.php" class="nav-link">Kategorije</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-create-category.php" class="nav-link">Dodaj Kategoriju</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin-surveys.php" class="nav-link">Anketa</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>