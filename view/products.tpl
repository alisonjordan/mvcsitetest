{if $PRO_TOTAL < 1}
    <p><div class="container"> <h4 class="alert alert-danger">No product found!!</h4> </div>
    <meta http-equiv="refresh" content=5;url="{$PRODUCTS}">
    
    {/if}

<!-- Section-->
   <section class="py-5">

   


   <div class="container px-4 px-lg-5 mt-5">
       <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
           
       
       {foreach from=$PRO item=P}
        
           <div class="col mb-5">
               <div class="card h-100">
                   <!-- Sale badge-->
                   <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                   <!-- Product image-->
                   <img class="card-img-top" src="{$P.pro_image}" alt="..." />
                   <!-- Product details-->
                   <div class="card-body p-4">
                       <div class="text-center">
                           <!-- Product name-->
                           <h5 class="fw-bolder">{$P.pro_name}</h5>
                           <!-- Product reviews-->
                           <div class="d-flex justify-content-center small text-warning mb-2">
                               <div class="bi-star-fill"></div>
                               <div class="bi-star-fill"></div>
                               <div class="bi-star-fill"></div>
                               <div class="bi-star-fill"></div>
                               <div class="bi-star-fill"></div>
                           </div>
                           <!-- Product price-->
                           
                         ${$P.pro_price}
                       </div>
                   </div>
                   <!-- Product actions-->
                   <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                       <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                       <p>
                       <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">More info</a></div>
                   </div>
               </div>
           </div>
        {/foreach}
       </div>
   </div>

   <nav aria-label="Page navigation example">
   {$PAGES}
 </nav>
 
   </section>
