<?php
/* Smarty version 3.1.33, created on 2019-11-20 10:31:44
  from 'D:\XAMP\htdocs\projet\templates\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd5080055c504_22386016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f319c2f56d85af4f365260e692929548634a7638' => 
    array (
      0 => 'D:\\XAMP\\htdocs\\projet\\templates\\inscription.tpl',
      1 => 1574242299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd5080055c504_22386016 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<!-- Header -->

<body>

<!-- Navigation -->

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

</html><?php }
}
