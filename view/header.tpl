<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{$GET_SITE_NAME}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{$GET_THEME}/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <script src="{$GET_THEME}/js/jquery-3.7.1.min.js"></script>
        
        <link href="{$GET_THEME}/css/styles.css" rel="stylesheet" />
        <script src="{$GET_THEME}/js/xzoom.min.js"></script>
        <link href="{$GET_THEME}/css/xzoom.css" rel="stylesheet" />
        
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" target="_blank" href="https://getbootstrap.com/">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{$GET_HOME}">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{$GET_PAGE_PRODUCTS}">Products</a></li>
                        
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    {foreach from=$CATEGORIES item=C}                         
                        <li><a class="dropdown-item" href="{$C.cat_link}">{$C.cat_name}</a></li>
                    {/foreach}
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{$GET_PAGE_ABOUT}">About</a></li>
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