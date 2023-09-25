<?php
/* Smarty version 4.2.1, created on 2023-09-19 18:08:04
  from '/opt/lampp/htdocs/testesitemvc/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_650a0db4b5d316_88265029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df202ed21f5bbbabc3dbaddd9076e282db48473a' => 
    array (
      0 => '/opt/lampp/htdocs/testesitemvc/view/index.tpl',
      1 => 1694284954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_650a0db4b5d316_88265029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo Route::get_Page();?>
              
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
