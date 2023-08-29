<?php
/* Smarty version 4.2.1, created on 2023-08-30 00:38:01
  from 'C:\xampp\htdocs\testesitemvc\view\clients.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64ee73499c51e4_01929601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d4026fd87ee5ed7ec26e64e8b4521725eedda5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\clients.tpl',
      1 => 1693348677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ee73499c51e4_01929601 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content-->
<section class="pt-4">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">CPF</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
    
  
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_cpf'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_address'];?>
</td>
    </tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
</section><?php }
}
