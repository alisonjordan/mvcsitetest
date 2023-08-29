<!-- Page Content-->
<section class="pt-4">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">CPF</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$CLI item=C}
    
  
    <tr>
      <td>{$C.cli_name}</td>
      <td>{$C.cli_cpf}</td>
      <td>{$C.cli_address}</td>
    </tr>
  {/foreach}
  </tbody>
</table>
</section>