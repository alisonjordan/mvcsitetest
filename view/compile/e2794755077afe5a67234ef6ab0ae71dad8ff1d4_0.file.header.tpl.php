<?php
/* Smarty version 4.2.1, created on 2023-08-29 19:56:10
  from 'C:\xampp\htdocs\testesitemvc\view\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64ee313aa49b95_24548228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2794755077afe5a67234ef6ab0ae71dad8ff1d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\header.tpl',
      1 => 1693331745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ee313aa49b95_24548228 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_THEME']->value;?>
/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" target="_blank" href="https://getbootstrap.com/">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['GET_PAGE_CLIENTS']->value;?>
">Clients</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_PAGE_ABOUT']->value;?>
">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <p><?php }
}
