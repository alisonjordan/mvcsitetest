<?php
/* Smarty version 4.2.1, created on 2023-09-08 00:20:18
  from 'C:\xampp\htdocs\testesitemvc\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64fa4ca2a059a5_77871672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d197bfe036e1992ada83347191b611f9f12f5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\index.tpl',
      1 => 1694124752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64fa4ca2a059a5_77871672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo Route::get_Page();?>
              
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
