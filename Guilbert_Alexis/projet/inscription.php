<?php

//page test 
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
require_once 'vendor/smarty/Smarty.class.php';

print_r2($_POST);
/* print_r2($_FILES); */
print_r2($_SESSION);

if (isset($_POST['button'])) {

    /* création variavble */
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $sth = $bdd->prepare("INSERT INTO utilisateurs (nom , prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)");

    $sth->bindValue(':nom', $nom, PDO::PARAM_STR);
    $sth->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $sth->bindValue(':email', $email, PDO::PARAM_STR);
    $sth->bindValue(':mdp', $mdp, PDO::PARAM_STR);

    $result_insert_article = $sth->execute();

    $id_insert = $bdd->lastInsertId();
    /*     * *** Notification **** */
    if ($result_insert_article == TRUE) {
        $_SESSION ['notifications']['result'] = 'succes';
        $_SESSION ['notifications']['message'] = '<b>bravo</b> compte créer';
    } else {
        $_SESSION ['notifications']['result'] = 'fail';
        $_SESSION ['notifications']['message'] = '<b>nul</b> erreur';
    }
    /*     * *** Notification **** */
    /* redirection vers l'accueil */
    header("Location: index.php");
} else {
    
}
//lancement de smarty
$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');


//commande de debug 
//$smarty->debugging = true;
//ajout des pages d'affichage
include_once 'include/header.inc.php';
include_once 'include/menu.inc.php';
$smarty->display('inscription.tpl');
include_once 'include/footer.inc.php';

unset($_SESSION['var']);
?>