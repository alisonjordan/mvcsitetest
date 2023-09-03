<?php
/* Smarty version 4.2.1, created on 2023-09-03 01:35:08
  from 'C:\xampp\htdocs\testesitemvc\view\products_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64f3c6ac1ce967_86370728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f5790e0ab1e9eb2496669334df578500a2a5d38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\products_info.tpl',
      1 => 1693697684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f3c6ac1ce967_86370728 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Product section-->
<section class="py-5">


<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_image_l'];?>
" alt="..." /></div>
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
            <div class="d-flex">
                <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                <button class="btn btn-outline-dark flex-shrink-0" type="button">
                    <i class="bi-cart-fill me-1"></i>
                    Add to cart
                </button>
            </div>
        </div>
    </div>
</div>



</section>
<!-- Related items section-->
<section class="py-5 bg-light">


<div class="container px-4 px-lg-5 mt-5">
    <h2 class="fw-bolder mb-4">Related products</h2>
    
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    <div class="col mb-5">
            <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_image'];?>
" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_name'];?>
</h5>
                        <!-- Product price-->
                        $<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_price'];?>

                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                </div>
            </div>
        </div>
        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </div>
</div>

</section><?php }
}
