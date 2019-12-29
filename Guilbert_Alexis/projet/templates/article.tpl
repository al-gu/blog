<html>


<!-- Page Content -->
  <div class="col-6">
    <div class="row">
      <div class="card" style="weight: 100%;">
        <h1 class="mt-5"></h1>
        
         <h1 class="col-lg-12">Blog</h1>
        <!--Si un get est joint à l'url, on affiche en titre : Modifier l'article, sinon : Ajouter un article-->
         <?php if (!empty($_GET['id'])){ ?>
        <h2 class="col-lg-12">Modifier l'article</h2>
         <?php } else{ ?>
        <h2 class="col-lg-12">Ajouter un article</h2>
        <!--
         <?php } 
        /*On récupère les données de l'article*/
         if (!empty($_GET['id'])){
        $id= $_GET['id'];
        $_SESSION['id'] = $id;
        
        $sth= $bdd->prepare("SELECT id, titre, texte, DATE_FORMAT(date, '%d/%m/%Y') AS date_fr, publie "
        . "FROM article WHERE id = :id");
        $sth -> bindValue(':id', $id, PDO::PARAM_INT);
        $sth -> execute();
        $tab_article = $sth->fetch(PDO::FETCH_ASSOC);
         }
        ?>
        -->
       
      </div>
    </div>
  </div>
  <form method="post" enctype='multipart/form-data' action='article.php'>
 <form>
    <div class="form-group">
    <label for="formGroupExampleInput">titre</label>
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
      
  </html>