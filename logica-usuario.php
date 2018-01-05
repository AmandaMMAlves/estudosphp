<?php
function verificaUsuario()
    {
        if(!usuarioEstaLogado())
        {
            header("Location: index.php?falha_seguranca=true");
            die();
        }
    }

 function usuarioEstaLogado()
 {
 	return isset($_COOKIE["usuario_logado"]);
 }

 function usuarioLogado()
 {
 	return $_COOKIE["usuario_logado"];
 }

 function logaUsuario($email)
 {
 	setcookie("usuario_logado", $email);
 }