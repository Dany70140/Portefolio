<nav class="navbar navbar-expand-md jaune">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fs-6 text-black ms-2" href="accueil.php">
                        Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 text-black ms-2" href="projet.php">
                        Projets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 text-black ms-2" href="parcours-scolaire.php">
                        Parcours scolaire
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 text-black ms-2" href="experience-pro.php">
                        Expériences professionnelles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 text-black ms-2" href="competence.php">
                        Compétences
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 text-black ms-2" href="passions.php">
                        Passions
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    window.addEventListener("load", function() {
        const navItems = document.querySelectorAll(".navbar-nav .nav-item");
        navItems.forEach((item, index) => {
            setTimeout(() => {
                item.classList.add("animate");
            }, index * 100);
        });
    });
</script>
