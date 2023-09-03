<!-- Product section-->
<section class="py-5">


<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{$PRO[1].pro_image_l}" alt="..." /></div>
        <div class="col-md-6">
            <div class="small mb-1">SKU: {$PRO[1].pro_reference}</div>
            <h1 class="display-5 fw-bolder">{$PRO[1].pro_name}</h1>
            <div class="fs-5 mb-5">
                
                <span>${$PRO[1].pro_price}</span>
            </div>
            <p class="lead">{$PRO[1].pro_description}</p>
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
        
    {foreach from=$PRO item=P}
    <div class="col mb-5">
            <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="{$P.pro_image}" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">{$P.pro_name}</h5>
                        <!-- Product price-->
                        ${$P.pro_price}
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                </div>
            </div>
        </div>
        
    {/foreach}
        
    </div>
</div>

</section>