<!DOCTYPE html>
<html lang="en">

<body>

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
      </body>

</html>