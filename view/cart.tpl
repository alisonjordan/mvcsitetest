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


                

                      
              <form name="clean" method="post" action="{$PAGE_CART_UPDATE}">
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

                

                <input type="hidden" name="weight_freight" id="weight_freight" value="{$WEIGHT}" class="form-control " readonly>
                   
                
               
                
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
                    <h5 class="fw-bold mb-0">${$TOTAL}</h5>
                  </div>

                        <form name="order_confirm" id="order_confirm" method="post" action="{$PAGE_CONFIRM}">

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
                                  <a href="{$PAGE_PRODUCTS}"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
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