<?php
/* Smarty version 3.1.33, created on 2019-11-19 16:57:25
  from 'D:\XAMP\htdocs\projet\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd410e5ca0053_46236573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae5a7c9467cbaf69aefae58f70ecef470f66646f' => 
    array (
      0 => 'D:\\XAMP\\htdocs\\projet\\templates\\connexion.tpl',
      1 => 1574179001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd410e5ca0053_46236573 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php echo '<?php ';?>include_once 'include/header.inc.php'; <?php echo '?>';?>

<body>

<!-- Navigation -->
<?php echo '<?php ';?>include_once 'include/menu.inc.php'; <?php echo '?>';?>

<!-- Page Content -->
  <div class="col-6">
    <div class="row">
      <div class="card" style="weight: 100%;">
        <h1 class="mt-5"></h1>
        
      </div>
    </div>
  </div>

<form method="post" enctype='multipart/form-data' action='connexion.php'>
 <form>
     <div class="form-group">
    <label for="formGroupExampleInput">émail</label>
    <input type="text" class="form-control" required id="email" name="email" placeholder="Example input">
  </div>
     <div class="form-group">
    <label for="formGroupExampleInput">mot de passe</label>
    <input type="password" class="form-control" required id="mdp" name="mdp" placeholder="Example input">
  </div>
        <button type="submit" class="btn btn-primary" name="button">connexion</button>
        
   </div>
 </form>
     
 </body>    
<?php }
}
