<?php
/* Smarty version 4.2.1, created on 2023-09-19 18:08:04
  from '/opt/lampp/htdocs/testesitemvc/view/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_650a0db4b672f7_44802508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae1673bc2d40c98401d65fa0139a9bf5ab18bc9a' => 
    array (
      0 => '/opt/lampp/htdocs/testesitemvc/view/header.tpl',
      1 => 1694194754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650a0db4b672f7_44802508 (Smarty_Internal_Template $_smarty_tpl) {
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
        
        <!-- Jquery-->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/js/jquery-3.7.1.min.js"><?php echo '</script'; ?>
>

        <!-- Font Awesome-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/fonts/fontawesome/css/all.css" rel="stylesheet">
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/fonts/fontawesome/js/all.js"><?php echo '</script'; ?>
>

        <!-- Style and Bootstrap-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/css/styles.css" rel="stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Easy Zoom -->
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
"> <i class="fa-solid fa-house"></i> Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['GET_PAGE_PRODUCTS']->value;?>
"> <i class="fa-solid fa-tags"></i> Products</a></li>
                        
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-solid fa-bars-staggered"></i> Categories</a>
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

                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['GET_PAGE_CART']->value;?>
"> <i class="fa-solid fa-cart-shopping"></i> Cart</a></li>

                <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_PAGE_ABOUT']->value;?>
"> <i class="fa-solid fa-circle-info"></i> About</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                    

                    
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-user-plus"></i> Sign Up</a></li>
                        
                        
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
</header><?php }
}
