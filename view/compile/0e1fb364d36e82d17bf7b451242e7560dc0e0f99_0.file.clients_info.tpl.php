<?php
/* Smarty version 4.2.1, created on 2023-08-31 23:39:31
  from 'C:\xampp\htdocs\testesitemvc\view\clients_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64f10893a718c9_24869714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e1fb364d36e82d17bf7b451242e7560dc0e0f99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\clients_info.tpl',
      1 => 1693517967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f10893a718c9_24869714 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content-->
<section class="pt-4">

<div class="container"><p class="m-0 text-center text-white">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
<div class="card" style="width: 18rem;">
<img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['GET_IMAGE']->value;
echo $_smarty_tpl->tpl_vars['C']->value['cli_picture'];?>
" width="200" height="200"  alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_name'];?>
</h5>
    <h6 class="card-title">CPF: <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_cpf'];?>
</h6>
    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_description'];?>
</p>
    <h6 class="card-subtitle mb-2 text-muted">Address</h6>
    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_address'];?>
</p>
    
  </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</p></div>

  
</section><?php }
}
