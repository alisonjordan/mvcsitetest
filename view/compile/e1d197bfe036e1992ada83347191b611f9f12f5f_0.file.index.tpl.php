<?php
/* Smarty version 4.2.1, created on 2023-08-25 22:39:58
  from 'C:\xampp\htdocs\testesitemvc\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64e9119e9e5f34_42855574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d197bfe036e1992ada83347191b611f9f12f5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\index.tpl',
      1 => 1692995954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64e9119e9e5f34_42855574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Header-->
<header class="py-5">
<div class="container px-lg-5">
    <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
        <div class="m-4 m-lg-5">
            <h1 class="display-5 fw-bold">A warm welcome!</h1>
            <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p>
            <a class="btn btn-primary btn-lg" href="#!">Call to action</a>
        </div>
    </div>
</div>
</header>

<?php echo Route::get_Page();?>
              
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
