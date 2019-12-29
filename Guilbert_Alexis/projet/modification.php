<?php 
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';


//récupération des valeurs des champs:

$titre = $_POST["titre"] ;

$texte = $_POST["texte"] ;

$date = $_POST["date"] ;

//Commentaires :
var_dump($_POST["titre"]) ;
var_dump($_POST["texte"]) ;
var_dump($_POST["date"]) ;

//récupération de l'identifiant de la personne:
$id = $_POST["id"] ;

//création de la requête SQL:
$sql = "UPDATE gbd_dat
                SET
                titre = '$titre',
                texte = '$texte',
                WHERE id = '$id' " ;
//exécution de la requête SQL:
$requete = $bdd->query($sql);

//affichage des résultats, pour savoir si la modification a marchée:
if($requete)
{
        echo("La modification à été correctement effectuée") ;
}
else
{
        echo("La modification à échouée") ;
}
$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
//transmission des variables au template
//$smarty->assign('tab_article',$tab_article);
//$smarty->assign('nb_total_pages',$nb_total_pages);

//commande de debug 
//$smarty->debugging = true;

include_once 'include/header.inc.php'; 
include_once 'include/menu.inc.php'; 
$smarty->display('modification.tpl');
include_once 'include/footer.inc.php'; 

unset($_SESSION['var']);
 
?>