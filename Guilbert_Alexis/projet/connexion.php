<?php

require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';
require_once 'vendor/smarty/Smarty.class.php';

print_r2($_POST);
/* print_r2($_FILES); */
print_r2($_SESSION);

if (isset($_POST['button'])) {
    //valeur créer 
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    //base de données 
    $sth = $bdd->prepare("SELECT * FROM utilisateurs WHERE email = :email AND mdp = :mdp");

    $sth->bindValue(':email', $email, PDO::PARAM_STR);
    $sth->bindValue(':mdp', $mdp, PDO::PARAM_STR);

    $sth->execute();

    if ($sth->rowCount() > 0) {
        //connexion ok 
        $donnees = $sth->fetch(PDO::FETCH_ASSOC);
        //print_r2($donnees);
        $sid = $donnees['email'] . time();
        $sid_hache = md5($sid);
        //echo $sid; 
        setcookie('sid', $sid_hache, time() + 300);

        $sth_update = $bdd->prepare("UPDATE utilisateurs SET sid = :sid WHERE id = :id");

        $sth_update->bindValue(':sid', $sid_hache, PDO::PARAM_STR);
        $sth_update->bindValue(':id', $donnees['id'], PDO::PARAM_INT);

        $result_connexion = $sth_update->execute();
        var_dump($sth_update);


        /*         * *** Notification **** */
        if ($result_connexion == TRUE) {
            $_SESSION ['notifications']['result'] = 'succes';
            $_SESSION ['notifications']['message'] = '<b>bravo</b> vous êtes connecter';
        } else {
            $_SESSION ['notifications']['result'] = 'fail';
            $_SESSION ['notifications']['message'] = '<b>nul</b> erreur';
        }
        header("Location: index.php");

        exit();
        /*         * *** Notification **** */
    } else {
        //connexion refusé 
        /*         * *** Notification **** */

        $_SESSION ['notifications']['result'] = 'fail';
        $_SESSION ['notifications']['message'] = '<b>nul</b> veuillez vérifier vôtre mdp ou mail';

        /*         * *** Notification **** */
    }
}

//smarty
$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
//transmission des variables au template
//commande de debug 
//$smarty->debugging = true;

include_once 'include/header.inc.php';
include_once 'include/menu.inc.php';
$smarty->display('connexion.tpl');
include_once 'include/footer.inc.php';

unset($_SESSION['var']);
?>

