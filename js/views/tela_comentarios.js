$(document).ready(function(){
	
	 $('#cadastro').validate({
         rules:{
        	txt_comentario:{
                 required: true
            }
         },
         messages:{
        	 txt_comentario:{
                 required: "O campo Comentário é obrigatorio."
             }
         }

     });
	 
	 	//Validação do formulário
		this.validaForm = function(){
			
			if(confirm("Confirma o preencimento dos dados?")){
				return true;
			}
			
			return false;
		}
          
})