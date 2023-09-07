<?php
/* Smarty version 4.2.1, created on 2023-09-08 00:20:18
  from 'C:\xampp\htdocs\testesitemvc\view\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64fa4ca2a2b9b9_87000935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2794755077afe5a67234ef6ab0ae71dad8ff1d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\header.tpl',
      1 => 1694125091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fa4ca2a2b9b9_87000935 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $_smarty_tpl->tpl_vars['GET_SITE_NAME']->value;?>
</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/js/jquery-3.7.1.min.js"><?php echo '</script'; ?>
>

        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/css/styles.css" rel="stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/css/bootstrap.min.css" rel="stylesheet" />
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/js/easyzoom.js"><?php echo '</script'; ?>
>
        <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/css/easyzoom.css" media="all" rel="stylesheet" />
        
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" target="_blank" href="https://getbootstrap.com/">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['GET_PAGE_PRODUCTS']->value;?>
">Products</a></li>
                        
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>                         
                        <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cat_name'];?>
</a></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_PAGE_ABOUT']->value;?>
">About</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                    

                    
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Login</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Sign Up</a></li>
                        
                        
                        </ul>
                </div>
            </div>
        </nav>
        <p>

        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop homepage template</p>
                    <p class="lead fw-normal text-white-50 mb-0">Looking for something special?</p>
                    <p>
 
                    

<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
    <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
  </form>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
                    
                    
                </div>
            </div>
</header>
<?php }
}
