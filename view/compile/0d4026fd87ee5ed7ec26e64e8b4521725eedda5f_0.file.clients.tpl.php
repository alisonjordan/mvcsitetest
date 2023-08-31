<?php
/* Smarty version 4.2.1, created on 2023-08-31 23:33:11
  from 'C:\xampp\htdocs\testesitemvc\view\clients.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64f107173f3454_36139017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d4026fd87ee5ed7ec26e64e8b4521725eedda5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\clients.tpl',
      1 => 1693517586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f107173f3454_36139017 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content-->
<section class="pt-4">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_name'];?>
</h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_cpf'];?>
</h6>
    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_address'];?>
</p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['CLI_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_cpf'];?>
" class="card-link">More info</a>
   
  </div>
</div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</section><?php }
}
