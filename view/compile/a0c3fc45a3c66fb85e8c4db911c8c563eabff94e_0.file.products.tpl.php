<?php
/* Smarty version 4.2.1, created on 2023-09-05 22:31:48
  from 'C:\xampp\htdocs\testesitemvc\view\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64f7903423d8d5_43471612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0c3fc45a3c66fb85e8c4db911c8c563eabff94e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testesitemvc\\view\\products.tpl',
      1 => 1693945905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f7903423d8d5_43471612 (Smarty_Internal_Template $_smarty_tpl) {
?>   <!-- Section-->
   <section class="py-5">

   <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
    <h4 class="alert alert-danger">No product found!!</h4>
    <meta http-equiv="refresh" content=5;url="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS']->value;?>
">
    
    <?php }?>


   <div class="container px-4 px-lg-5 mt-5">
       <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
           
       
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        
           <div class="col mb-5">
               <div class="card h-100">
                   <!-- Sale badge-->
                   <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                   <!-- Product image-->
                   <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_image'];?>
" alt="..." />
                   <!-- Product details-->
                   <div class="card-body p-4">
                       <div class="text-center">
                           <!-- Product name-->
                           <h5 class="fw-bolder"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_name'];?>
</h5>
                           <!-- Product reviews-->
                           <div class="d-flex justify-content-center small text-warning mb-2">
                               <div class="bi-star-fill"></div>
                               <div class="bi-star-fill"></div>
                               <div class="bi-star-fill"></div>
                               <div class="bi-star-fill"></div>
                               <div class="bi-star-fill"></div>
                           </div>
                           <!-- Product price-->
                           
                         $<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_price'];?>

                       </div>
                   </div>
                   <!-- Product actions-->
                   <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                       <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                       <p>
                       <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">More info</a></div>
                   </div>
               </div>
           </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       </div>
   </div>

   <nav aria-label="Page navigation example">
   <?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>

 </nav>
 
   </section>
<?php }
}
