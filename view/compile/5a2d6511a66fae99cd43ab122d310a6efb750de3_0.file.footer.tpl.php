<?php
/* Smarty version 4.2.1, created on 2023-08-25 22:04:07
  from 'C:\xampp\htdocs\testesitemvc\view\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64e909372d5745_51791051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a2d6511a66fae99cd43ab122d310a6efb750de3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\footer.tpl',
      1 => 1692993714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e909372d5745_51791051 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Footer-->
<footer class="py-5 bg-dark">
<div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
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
