<!DOCTYPE html>
<html lang="en">

<!-- Header -->
{*<?php include_once 'include/header.inc.php'; ?>*}

<body>

<!-- Navigation -->
{*<?php include_once 'include/menu.inc.php'; ?>*}

<!-- Page Content -->
  <div class="col-6">
    <div class="row">
      <div class="card" style="weight: 100%;">
        <h1 class="mt-5"></h1>
        
      </div>
    </div>
  </div>

<form method="post" enctype='multipart/form-data' action='inscription.php'>
 <form>
    <div class="form-group">
    <label for="formGroupExampleInput">nom</label>
    <input type="text" class="form-control" required id="nom" name="nom" placeholder="Example input">
  </div>
     <div class="form-group">
    <label for="formGroupExampleInput">prénom</label>
    <input type="text" class="form-control" required id="prenom" name="prenom" placeholder="Example input">
  </div>
     <div class="form-group">
    <label for="formGroupExampleInput">émail</label>
    <input type="text" class="form-control" required id="email" name="email" placeholder="Example input">
  </div>
     <div class="form-group">
    <label for="formGroupExampleInput">mot de passe</label>
    <input type="password" class="form-control" required id="mdp" name="mdp" placeholder="Example input">
  </div>
        <button type="submit" class="btn btn-primary" name="button">envoyer</button>
        
   </div>
 </form>
     
 </body>     
 
   <!-- Bootstrap core JavaScript -->
{*<?php include_once 'include/footer.inc.php'; ?>*}

</html>