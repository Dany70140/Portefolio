<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
section {
    padding: 60px 0;
        }
    </style>
    <title>Accueil</title>
</head>
<body>
<header>
    <!--    Barre de navigation-->
    <?php
    require_once '_partials/nav.php'
    ?>
</header>
<div class="container">
    <p class="fs-1 text-center jaune mt-5 arrondir p-2 text-black">
        <img src="assets/images/logo-pf.png" height="150" width="150">
        Accueil
        <img src="assets/images/logo-pf.png" height="150" width="150">
    </p>
    <div class="row arrondir bordure-grise p-3 bg-jaune text-black">
        <p>
            <h1>Bonjour et bienvenue sur mon portefolio !</h1>
            <p class="ms-4">Je m'appelle <strong>Dany ILOAI</strong>, et je suis <strong>étudiant en SIO2 option SLAM</strong>.
                Mon parcours est guidé par une passion pour l' <strong>informatique</strong>.
                J’aime explorer et mettre à profit de nouvelles technologies et techniques pour créer des projets impactants et bien pensés.
                Avec un esprit orienté sur la qualité et le détail, j’accorde une grande importance à chaque étape, du concept initial à la livraison finale.
            </p>

            <h2>Ce que je propose :</h2>
            <ul class="ms-5">
                <li><strong>Compétences techniques</strong> : Maîtrise du <em>PHP, HTML, CSS, SQL...</em>, avec des projets réalisés pendant mon <em>parcours scolaire</em>.</li>
                <li><strong>Approche centrée sur l'utilisateur</strong> : Compréhension des besoins clients pour développer des solutions adaptées, dans un respect total des bonnes pratiques et des normes, y compris le RGPD.</li>
                <li><strong>Créativité et rigueur</strong> : Je m’engage à proposer des créations qui reflètent à la fois mon goût pour l'innovation et mon souci de précision.</li>
            </ul>

            <h2>Mes réalisations :</h2>
            <p class="ms-4">N’hésitez pas à explorer mes différents projets ! Vous y trouverez des exemples concrets de mon travail, illustrant mes compétences en
                <em>informatique</em>.
            </p>

            <h4 class="text-center mt-5"><strong>Merci de votre visite</strong> et bonne découverte !</h4>
    </div>
</div>

</body>
</html>