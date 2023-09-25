<?php
/* Smarty version 4.2.1, created on 2023-09-19 18:08:04
  from '/opt/lampp/htdocs/testesitemvc/view/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_650a0db4b6aa67_60456304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ba9b8cd085f204f9d4fcd3abee50ec207695588' => 
    array (
      0 => '/opt/lampp/htdocs/testesitemvc/view/footer.tpl',
      1 => 1694124799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650a0db4b6aa67_60456304 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Footer-->
<footer class="py-5 bg-dark">
<div class="container"><p class="m-0 text-center text-white">Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['GET_SITE_NAME']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
 </p></div>
</footer>
<!-- Bootstrap core JS-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<!-- Core theme JS-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/js/scripts.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
