<?php
/* Smarty version 4.2.1, created on 2023-10-04 20:55:12
  from '/opt/lampp/htdocs/testesitemvc/view/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_651dfb606f37a9_49680324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fce97eef58e53f054778e0f3adf806d282e74aef' => 
    array (
      0 => '/opt/lampp/htdocs/testesitemvc/view/cart.tpl',
      1 => 1696463543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651dfb606f37a9_49680324 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card shopping-cart" style="border-radius: 15px;">
          <div class="card-body text-black">

            <div class="row">
              <div class="col-lg-6 px-5 py-4">

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

                <div class="d-flex align-items-center mb-5">
                  <div class="flex-shrink-0">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_image'];?>
"
                      class="img-fluid" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_name'];?>
">
                  </div>
                  <div class="flex-grow-1 ms-3">

                    <div class="float-end">
                      <form name="cart_del" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAGE_CART_UPDATE']->value;?>
">
                  
                      <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                      <input type="hidden" name="action" value="del">    
                    
                      <button class="btn btn-danger btn-sm"> <i class="fa-solid fa-delete-left"></i> </button>
                      </form>
                    </div>
            
                    <h5 class="text-primary"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_name'];?>
</h5>
                    <h6 style="color: #000000;">QTT: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtt'];?>
 X $<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_price_us'];?>
 </h6>
                    <div class="d-flex align-items-center">
                      <p class="fw-bold mb-0 me-5 pe-3">Subtotal: $<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal_us'];?>
</p>
                    </div>
               
                  </div>
                </div>

              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                

                      
              <form name="clean" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAGE_CART_UPDATE']->value;?>
">
              <input type="hidden" name="action" value="clean">
              <input type="hidden" name="pro_id" value="1">
              
              <div class="container-sm">
              <div class="row">
              <button class="btn btn-danger btn-block"> <i class="fa-solid fa-trash-can"></i> Clean cart</button>
              </div>
              </div>
              
            

              </form>

              

              

              </div>



              <div class="col-lg-6 px-5 py-4">


              <section class="row" id="data_freight">
                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Freight</h3>

                

                <input type="hidden" name="weight_freight" id="weight_freight" value="<?php echo $_smarty_tpl->tpl_vars['WEIGHT']->value;?>
" class="form-control " readonly>
                   
                
               
                
                <input type="hidden" name="freight_price" id="freight_price" value="0">

                  <div class="row">
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="text"  class="form-control form-control-lg"
                            name="cep_freight" id="cep_freight" placeholder="Type your cep"/>
                        <label class="form-label" for="typeExp">CEP</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                      <button type="button" class="btn btn-secondary btn-lg" id="search_freight"> <i class="fa-solid fa-magnifying-glass"></i> Verify</button>
                      </div>
                    </div>
                  </div>
                  </section>

                  <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">

                  <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #98d6f3;">
                    <h5 class="fw-bold mb-0">Total:</h5>
                    <h5 class="fw-bold mb-0">$<?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h5>
                  </div>

                        <form name="order_confirm" id="order_confirm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAGE_CONFIRM']->value;?>
">

                        <span id="freight"></span>
                        <div class="container-sm">
                        <div class="row">
                        <button class="btn btn-success btn-block" type="submit">  <i class="fa-solid fa-circle-check"></i> Confirm Order </button>
                        </div>
                        </div>
                        </form>

                        <br>
                        <div class="container-sm">
                        <div class="row">
                        <h5 class="fw-bold mb-5">
                                  <a href="<?php echo $_smarty_tpl->tpl_vars['PAGE_PRODUCTS']->value;?>
"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                                </h5>
                        </div>
                        </div>
                      
                                        
                        
                 </div>

                
                  

                

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php }
}
