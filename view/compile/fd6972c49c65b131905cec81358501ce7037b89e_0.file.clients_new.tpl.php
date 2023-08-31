<?php
/* Smarty version 4.2.1, created on 2023-08-31 22:46:30
  from 'C:\xampp\htdocs\testesitemvc\view\clients_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64f0fc26d647d9_52410806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd6972c49c65b131905cec81358501ce7037b89e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\clients_new.tpl',
      1 => 1693514731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f0fc26d647d9_52410806 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="row g-3" method="post" action="">

<div class="col-12">
    <label for="inputAddress" class="form-label">Name</label>
    <input type="text" class="form-control" name="cli_name" id="cli_name">
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">CPF</label>
    <input type="text" class="form-control" name="cli_cpf" id="cli_cpf">
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" name="cli_address" id="cli_address">
  </div>


  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="cli_email" id="cli_email" required>
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Image</label>
    <input type="file" name="cli_picture" class="form-control " id="cli_picture" required>
  </div>
  
  
  

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Slug</label>
    <input type="text" readonly name="cli_slug" id="cli_slug"   class="form-control">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Description</label>
    <textarea name="cli_description" id="cli_description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


  
  <div class="col-12">
    <button type="submit" class="btn btn-success btn-block btn-lg">Sign in</button>
  </div>
</form><?php }
}
