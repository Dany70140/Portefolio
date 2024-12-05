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
        Compétence
        <img src="assets/images/logo-pf.png" height="150" width="150">
    </p>
    <div class="row arrondir bordure-grise p-3 bg-jaune text-black">
        <section>
            <h2>Compétences Techniques</h2>
            <ul>
                <li><strong>Développement Web :</strong> Maîtrise de HTML5, CSS3, et PHP 8 pour concevoir des sites web dynamiques et interactifs.<img src="assets/images/html.png" height="150" width="150"></li>
                <li><strong>Bases de Données :</strong> Connaissance approfondie de MySQL et SQLServer, avec une expertise en langages SQL.<img src="assets/images/sql.png" height="100" width="200"></li>
                <li><strong>Architecture Logicielle :</strong> Pratique du modèle MVC et développement orienté objet.<img src="assets/images/mvc.png" height="150" width="300"></li>
                <li><strong>Outils de Versionnement :</strong> Utilisation de GIT pour collaborer sur des projets et suivre les modifications de code.<img src="assets/images/git.png" height="150" width="150"></li>
                <li><strong>Environnements de Développement :</strong> Expérience avec PhpStorm pour des projets professionnels.<img src="assets/images/php.png" height="150" width="150"></li>
            </ul>

            <h2>Compétences Personnelles</h2>
            <ul>
                <li><strong>Organisation :</strong> Capacité à gérer plusieurs projets simultanément et à respecter les délais.</li>
                <li><strong>Esprit d'Équipe :</strong> Collaboration efficace avec des équipes multidisciplinaires, aussi bien dans un cadre académique que professionnel.</li>
                <li><strong>Adaptabilité :</strong> Rapidité d'apprentissage face aux nouveaux outils et technologies.</li>
                <li><strong>Communication :</strong> Bonne aptitude à expliquer des concepts techniques de manière claire et accessible.</li>
            </ul>

            <h2>Langues</h2>
            <ul>
                <li><strong>Anglais :</strong> Niveau courant (B1), capable de lire et écrire des documents techniques.<img src="assets/images/anglais.jpg" height="150" width="300" class="mb-5"></li>
                <li><strong>Espagnol :</strong> Niveau intermédiaire (A2), suffisant pour une communication de base.<img src="assets/images/espagne.jpg" height="150" width="300"></li>
            </ul>
        </section>
    </div>

</body>
</html>