<?php
/* Smarty version 4.2.1, created on 2023-09-07 21:12:49
  from 'C:\xampp\htdocs\testesitemvc\view\products_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64fa20b1341048_91404496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f5790e0ab1e9eb2496669334df578500a2a5d38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\products_info.tpl',
      1 => 1694113963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fa20b1341048_91404496 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Product section-->
<section class="py-5">


<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">

    <!-- Carousel start -->
        <div class="col-md-6">
        <div id="demo" class="carousel slide">
        <div class="carousel-inner">

        
        <div class="carousel-item active">
        
        <div class="xzoom-container"> <img class="xzoom card-img-top mb-5 mb-md-0 rounded" id="xzoom-default" src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_image_l'];?>
" xoriginal="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_image_l'];?>
" /> </div>
        
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
        <div class="carousel-item">
        <img class="card-img-top mb-5 mb-md-0 rounded" src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_name_l'];?>
" alt="..." />
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </div>
<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
<span class="carousel-control-prev-icon rounded-circle bg-dark"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
<span class="carousel-control-next-icon rounded-circle bg-dark"></span>
</button>

        </div>
        </div>

<!-- Carousel end -->


        <div class="col-md-6">
            <div class="small mb-1">SKU: <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_reference'];?>
</div>
            <h1 class="display-5 fw-bolder"><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_name'];?>
</h1>
            <div class="fs-5 mb-5">
                
                <span>$<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_price'];?>
</span>
            </div>
            <p class="lead"><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_description'];?>
</p>
            <div class="d-grid gap-2 col-6 mx-auto">
            
           <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem"/>
                
                <button class="btn btn-outline-dark flex-shrink-0" type="button">
                    <i class="bi-cart-fill me-1"></i>
                    Add to cart
                </button>
                
                <button class="btn btn-outline-dark flex-shrink-0" type="button">
                
               Buy now
            </button>
            </div>
            
        </div>
    </div>
</div>


<div class="container px-4 px-lg-5 mt-5">
         
    
    <div class="col mb-5">
    
    <div class="text-center">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
                <!-- Product image-->
                <img class="img-thumbnail rounded" src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_name'];?>
" alt="..." />

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            
            </div>
        </div>
        
   
        
    </div>
</div>

</section>


                
       <?php }
}
