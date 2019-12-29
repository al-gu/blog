<?php
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
require_once 'include/function.inc.php';
//variable qui permet de cacher les resultats de la bdd
$resultat = false;

// la page est un test de la barre de recherche
$articles = $bdd->query('SELECT titre FROM article ORDER BY id DESC');
if (isset($_GET['q']) AND ! empty($_GET['q'])) {
    $q = htmlspecialchars($_GET['q']);
    $articles = $bdd->query('SELECT titre FROM article WHERE titre LIKE "%' . $q . '%" ORDER BY id DESC');
    if ($articles->rowCount() == 0) {
        $articles = $bdd->query('SELECT titre FROM article WHERE CONCAT(titre, texte) LIKE "%' . $q . '%" ORDER BY id DESC');
        $resultat = true;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

    <!-- Header -->
    <?php include_once 'include/header.inc.php'; ?>

    <body>

        <!-- Navigation -->
        <?php include_once 'include/menu.inc.php'; ?>


        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="mt-5"> Barre de recherche </h1>
                </div>
            </div>

            <!-- Page Content -->
            <div class="col-3">
                <div class="row">
                    <div class="card" style="weight: 100%;">
                        <h1 class="mt-5"></h1>


                    </div>
                </div>
            </div>
            <form method="GET">
                <input type="search" class="form-control" name="q" placeholder="Recherche..." />
                <input type="submit" class="btn btn-primary" value="Valider" />
            </form>
            <?php if ($articles->rowCount() > 0) { ?>
                <ul>
                    <?php while ($a = $articles->fetch()) { ?>
                        <li><?= $a['titre'] ?></li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                Aucun résultat pour: <?= $q ?>...
            <?php } ?>
        </form>