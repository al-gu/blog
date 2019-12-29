<?php
require_once 'config/connexion.conf.php';

$resultat = false;
$articles = $bdd->query('SELECT titre FROM article ORDER BY id DESC');
//création des variables pour la barre de recherche
if (isset($_GET['q']) AND ! empty($_GET['q'])) {
    $q = htmlspecialchars($_GET['q']);
    $articles = $bdd->query('SELECT titre FROM article WHERE titre LIKE "%' . $q . '%" ORDER BY id DESC');
    if ($articles->rowCount() == 0) {
        $articles = $bdd->query('SELECT titre FROM article WHERE CONCAT(titre, texte) LIKE "%' . $q . '%" ORDER BY id DESC');
        $resultat = true;
    }
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Mon blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <?php if ($connecte == TRUE) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="article.php">article</a>
                    </li>
                <?php } ?>

                <?php if ($connecte == FALSE) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">inscription</a>
                    </li>
                <?php } ?>

                <?php if ($connecte == FALSE) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php">connexion</a>
                    <?php } ?>

                    <?php if ($connecte == TRUE) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="deconnexion.php">déconnexion</a>
                    <?php } ?>
                </li>
                <form method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
               <?php
                //insertion de la barre de recherche dans le menu 
                ?>
                <?php if ($articles->rowCount() > 0) { ?>
                    <ul>
                        <?php while ($a = $articles->fetch()) { ?>
                            <li><?= $a['titre'] ?></li>
                        <?php } ?>
                    </ul>
                <?php } else { ?>
                    Aucun résultat pour: <?= $q ?>...
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>


