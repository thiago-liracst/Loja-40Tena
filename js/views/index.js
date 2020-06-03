$(document).ready(function(){
	
	 $('#form-login').validate({
         rules:{
        	txt_login:{
                 required: true
            },
        	txt_senha:{
                required: true
           }
         },
         messages:{
        	 txt_login:{
                 required: "O campo Login é obrigatorio."
             },
             txt_senha:{
            	 required: "O campo Senha é obrigatorio."
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