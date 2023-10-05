<?php
/* Smarty version 4.2.1, created on 2023-09-27 19:31:31
  from '/opt/lampp/htdocs/testesitemvc/view/products_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6514ad43678623_88688252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1acdd86471b42ee1fdd207f8f429de5392f872c' => 
    array (
      0 => '/opt/lampp/htdocs/testesitemvc/view/products_info.tpl',
      1 => 1694234486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6514ad43678623_88688252 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Product section-->
<section class="py-5">


<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
   
    <!-- Carousel start -->
        <div class="col-md-6">
        <div id="demo" class="carousel slide">
        <div class="carousel-inner">


        <div class="carousel-item active">
        
        <div class="easyzoom easyzoom--overlay"> <a href="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_image_l'];?>
"> <img class="card-img-top mb-5 mb-md-0 rounded" src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_image_l'];?>
"/> </a> </div>
        
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
        <div class="carousel-item">
        <div class="easyzoom easyzoom--overlay"> <a href="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_name_l'];?>
"> <img class="card-img-top mb-5 mb-md-0 rounded" src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_name_l'];?>
"/> </a> </div>
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

<!-- Thumbs start -->

        <div class="container">
         
    
        <div class="col-sm">
        
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


<!-- Thumbs end -->


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
            
           
                

                <form name="cart" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAGE_BUY']->value;?>
">
                <input name="pro_qtt" class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem"/>
                <p>        
                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
                        <input type="hidden" name="action" value="add">

       
        
                        <div class="container-sm">
                        <div class="row">
                        <button class="btn btn-outline-dark flex-shrink-0">
                        <i class="fa-solid fa-cart-plus fa-beat"></i>
                            Add to cart
                        </button>
                        </div>
                        </div>
                </form> 

                <form name="cart" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAGE_BUY']->value;?>
">
                        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
                        <input type="hidden" name="action" value="add">
                        <div class="container-sm">
                        <div class="row">
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="fa-solid fa-money-bill"></i> Buy now
                        </button>
                        </div>
                        </div>
                </form> 
            </div>
            
        </div>
    </div>
</div>
        
   
        
    </div>
</div>

</section>    


                
       <?php }
}
