<!-- Page Content-->
<section class="pt-4">

<div class="container"><p class="m-0 text-center text-white">

{foreach from=$CLI item=C}
<div class="card" style="width: 18rem;">
<img class="card-img-top" src="{$GET_IMAGE}{$C.cli_picture}" width="200" height="200"  alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{$C.cli_name}</h5>
    <h6 class="card-title">CPF: {$C.cli_cpf}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Description</h6>
    <p class="card-text">{$C.cli_description}</p>
    <h6 class="card-subtitle mb-2 text-muted">Address</h6>
    <p class="card-text">{$C.cli_address}</p>
    
  </div>
</div>
{/foreach}

</p></div>

  
</section>