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
    <title>Projets</title>
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
        Projets
        <img src="assets/images/logo-pf.png" height="150" width="150">
    </p>
    <div class="row arrondir bordure-grise p-3 bg-jaune text-black">
        <span class="fs-3">Première année de BTS SIO :</span>
        <ul>
            <ul><a href="https://dany70140.github.io/Bootstrap-TP1/" class="btn btn-outline-danger fs-6 mt-3" target="_blank">Bootstrap TP-1</a></ul>
            <ul><a href="#" class="btn btn-outline-success fs-6 mt-3">entreprise</a></ul>
            <ul><a href="#" class="btn btn-outline-warning fs-6 mt-3">cinéma</a></ul>
        </ul>
    </div>
</div>

</body>
</html>