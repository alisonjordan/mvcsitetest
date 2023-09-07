<?php
/* Smarty version 4.2.1, created on 2023-09-07 20:42:56
  from 'C:\xampp\htdocs\testesitemvc\view\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64fa19b02f2e10_46206326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a2d6511a66fae99cd43ab122d310a6efb750de3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\footer.tpl',
      1 => 1694112172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fa19b02f2e10_46206326 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Footer-->
<footer class="py-5 bg-dark">
<div class="container"><p class="m-0 text-center text-white">Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['GET_SITE_NAME']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
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
