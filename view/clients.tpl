<!-- Page Content-->
<section class="pt-4">
{foreach from=$CLI item=C}
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{$C.cli_name}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{$C.cli_cpf}</h6>
    <p class="card-text">{$C.cli_address}</p>
    <a href="{$CLI_INFO}/{$C.cli_id}/{$C.cli_cpf}" class="card-link">More info</a>
   
  </div>
</div>

{/foreach} 
</section>