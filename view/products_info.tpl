<!-- Product section-->
<section class="py-5">


<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
   
    <!-- Carousel start -->
        <div class="col-md-6">
        <div id="demo" class="carousel slide">
        <div class="carousel-inner">


        <div class="carousel-item active">
        
        <div class="easyzoom easyzoom--overlay"> <a href="{$PRO[1].pro_image_l}"> <img class="card-img-top mb-5 mb-md-0 rounded" src="{$PRO[1].pro_image_l}"/> </a> </div>
        
        </div>

        {foreach from=$IMAGES item=I}
        <div class="carousel-item">
        <div class="easyzoom easyzoom--overlay"> <a href="{$I.img_name_l}"> <img class="card-img-top mb-5 mb-md-0 rounded" src="{$I.img_name_l}"/> </a> </div>
        </div>
      {/foreach}

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
        {foreach from=$IMAGES item=I}
                    <!-- Product image-->
                    <img class="img-thumbnail rounded" src="{$I.img_name}" alt="..." />
    
                {/foreach}
                  </div>
                
                </div>
            </div>


<!-- Thumbs end -->


        </div>

<!-- Carousel end -->


        <div class="col-md-6">
            <div class="small mb-1">SKU: {$PRO[1].pro_reference}</div>
            <h1 class="display-5 fw-bolder">{$PRO[1].pro_name}</h1>
            <div class="fs-5 mb-5">
                
                <span>${$PRO[1].pro_price}</span>
            </div>
            <p class="lead">{$PRO[1].pro_description}</p>
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
        
   
        
    </div>
</div>

</section>    


                
       