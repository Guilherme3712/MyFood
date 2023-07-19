<?php
        $usuario = trim($_POST["usuario"]); //get exibe a senha, post não.
        $senha = trim($_POST["senha"]);

        
        if(!empty($usuario) && !empty($senha)) //"if" abaixo do usuario/senha
        {                                     //isset bloqueia o acesso direto a pagina, empty não.
            if ($usuario == "Gui" && $senha == 123)
            {
                header("location: myfood");
            }
            else 
            {
                header("location: login");
            }
        }    
        else
        {
            header ("location:login");
        }    
        
?>