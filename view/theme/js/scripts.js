/*!
* Start Bootstrap - Heroic Features v5.0.6 (https://startbootstrap.com/template/heroic-features)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-heroic-features/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
$(document).ready(function() {
    var $easyzoom = $('.easyzoom').easyZoom();
});



$(document).ready(function(){    

   // validar frete
     $('#search_freight').click(function(){  
        
      var CEP_CLIENT = $('#cep_freight').val();
      var WEIGHT_FREIGHT = $('#weight_freight').val();
       
        if (CEP_CLIENT.length !== 8 ) {
        alert('Enter your CEP code correctly, 8 digits and no dashes or periods.');  
         $('#freight').addClass(' text-center text-danger');
         $('#freight').html('<b>Enter your CEP code correctly, 8 digits and no dashes or periods.</b>');
        $('#cep_freight').focus();
        } else {
     
       
        $('#freight').html('<i class="fa-solid fa-rotate fa-spin fa-lg"></i>');
        $('#freight').addClass(' text-center text-danger');
      
        
       
        $('#freight').load('controller/freight.php?cepclient='+CEP_CLIENT+'&weightfreight='+WEIGHT_FREIGHT);
 
 } 
      
 
    });
    
   
} );