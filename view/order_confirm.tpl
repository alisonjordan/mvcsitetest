<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card shopping-cart" style="border-radius: 15px;">
          <div class="card-body text-black">

            <div class="row">
              <div class="col-lg-6 px-5 py-4">

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>


                {foreach from=$PRO item=P}

                <div class="d-flex align-items-center mb-5">
                  <div class="flex-shrink-0">
                    <img src="{$P.pro_image}"
                      class="img-fluid" alt="{$P.pro_name}">
                  </div>
                  <div class="flex-grow-1 ms-3">

                    <div class="float-end">
                      <form name="cart_del" method="post" action="{$PAGE_CART_UPDATE}">
                  
                      <input type="hidden" name="pro_id" value="{$P.pro_id}">    
                      <input type="hidden" name="action" value="del">    
                    
                      <button class="btn btn-danger btn-sm"> <i class="fa-solid fa-delete-left"></i> </button>
                      </form>
                    </div>
            
                    <h5 class="text-primary">{$P.pro_name}</h5>
                    <h6 style="color: #000000;">QTT: {$P.pro_qtt} X ${$P.pro_price_us} </h6>
                    <div class="d-flex align-items-center">
                      <p class="fw-bold mb-0 me-5 pe-3">Subtotal: ${$P.pro_subTotal_us}</p>
                    </div>
               
                  </div>
                </div>

              {/foreach}


                

              

              

              </div>



              

                  <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #98d6f3;">
                    <h5 class="fw-bold mb-0">Total:</h5>
                    <h5 class="fw-bold mb-0">${$TOTAL}</h5>
                    <h5 class="fw-bold mb-0">Freight:</h5>
                    <h5 class="fw-bold mb-0">${$FREIGHT}</h5>
                    <h5 class="fw-bold mb-0">Total with Freight:</h5>
                    <h5 class="fw-bold mb-0">${$TOTAL_FREIGHT}</h5>
                  </div>

                  <form name="order_finish" id="order_finish" method="post" action="{$PAGE_FINISH}">

                        
                        <div class="container-sm">
                        <div class="row">
                        <button class="btn btn-success btn-block" type="submit">  <i class="fa-solid fa-circle-check"></i> Finish Order </button>
                        </div>
                        </div>
                        </form>

                        <br>
                        <div class="container-sm">
                        <div class="row">
                        <h5 class="fw-bold mb-5">
                                  <a href="{$GET_PAGE_CART}"><i class="fas fa-angle-left me-2"></i>Back to cart</a>
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
</section>