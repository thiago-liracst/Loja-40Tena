$(document).ready(function(){
	
	 $('#cadastro').validate({
         rules:{
        	txt_titulo:{
                 required: true
            },
        	txt_conteudo:{
                required: true
           }
         },
         messages:{
        	 txt_titulo:{
                 required: "O campo Título é obrigatorio."
             },
             txt_conteudo:{
            	 required: "O campo Conteúdo é obrigatorio."
             }
         }

     });
          
})