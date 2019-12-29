<?php 
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'config/connexion.conf.php';



/*print_r2($_POST);*/
/*print_r2($_FILES);*/
/*print_r2($_SESSION);*/

/*$_SESSION['result'] = ok;*/

if(isset($_POST['button'])){
       
        /* création variavble */
        $titre = $_POST['titre'];
        $texte = $_POST['texte'];
        /* la fonction veut dire si alors mais en plus rapide*/
        $publie = isset($_POST['publie']) ? 1 : 0;
        /* date en rapport avec mysql*/
        $date = date('Y-m-D');
        
        $sth = $bdd->prepare("INSERT INTO article (titre , texte, publie, date) VALUES (:titre, :texte, :publie, :date)");
        
        $sth->bindValue(':titre', $titre, PDO::PARAM_STR);
        $sth->bindValue(':texte', $texte, PDO::PARAM_STR);
        $sth->bindValue(':publie', $publie, PDO::PARAM_STR);
        $sth->bindValue(':date', $date, PDO::PARAM_STR);
        
        $result_insert_article = $sth->execute();
        
        $id_insert = $bdd->lastInsertId();
        
        /* traitement de l'image */
        if($_FILES['img']['error'] == 0){
            $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
            echo "voici l'extension de fichier : " . $ext;
            move_uploaded_file($_FILES['img']['tmp_name'], 'img/' .$id_insert . '.jpg');
        }
        
        /***** Notification *****/
        if ($result_insert_article == TRUE ){
            $_SESSION ['notifications']['result'] = 'succes';
            $_SESSION ['notifications']['message'] = '<b>bravo</b> votre article est publié';
        }else {
            $_SESSION ['notifications']['result'] = 'fail';
            $_SESSION ['notifications']['message'] = '<b>nul</b> pas publié';
        }
        /***** Notification *****/
        /*redirection vers l'accueil*/
        header("Location: index.php"); 
        
} else {
    

?>

<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php include_once 'include/header.inc.php'; ?>

<body>

<!-- Navigation -->
<?php include_once 'include/menu.inc.php'; ?>

  <!-- Page Content -->
  <div class="col-6">
    <div class="row">
      <div class="card" style="weight: 100%;">
        <h1 class="mt-5"></h1>
        
       
      </div>
    </div>
  </div>
  <form method="post" enctype='multipart/form-data' action='article.php'>
 <form>
    <div class="form-group">
    <label for="formGroupExampleInput">mon titre</label>
    <input type="text" class="form-control" required id="titre" name="titre" placeholder="Example input">
  </div>
   <label for="exampleFormControlTextarea1">texte</label>
   <textarea class="form-control" id="texte" name="texte" rows="3"></textarea>
   <div class="form-group">
    <label for="exampleFormControlFile1">image</label>
    <input type="file" class="form-control-file" id="img" name="img">
    <button type="submit" class="btn btn-primary" name="button">envoyer</button>
  </div>
   <div class="form-check">
        <input class="form-check-input" type="checkbox" id="publie" name="publie">
        <label class="form-check-label" for="gridCheck1">
          publie

 </label>
   </div>
</form>

  <!-- Bootstrap core JavaScript -->
<?php include_once 'include/footer.inc.php'; ?>

</body>

</html>
<?php
}
?>