<?php
/* Smarty version 3.1.33, created on 2019-12-29 13:59:12
  from 'D:\XAMP\htdocs\projet\templates\article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e08a320bed5c3_62566648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cef51e1d6c017dd1fadbad0dcf246307a3354bf' => 
    array (
      0 => 'D:\\XAMP\\htdocs\\projet\\templates\\article.tpl',
      1 => 1577624345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e08a320bed5c3_62566648 (Smarty_Internal_Template $_smarty_tpl) {
?><html>


<!-- Page Content -->
  <div class="col-6">
    <div class="row">
      <div class="card" style="weight: 100%;">
        <h1 class="mt-5"></h1>
        
         <h1 class="col-lg-12">Blog</h1>
        <!--Si un get est joint à l'url, on affiche en titre : Modifier l'article, sinon : Ajouter un article-->
        
        <h2 class="col-lg-12">Modifier l'article</h2>
       
        <h2 class="col-lg-12">Ajouter un article</h2>
        
       
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
      
  </html><?php }
}
