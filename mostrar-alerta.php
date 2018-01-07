<?php
//ESTÁ USANDO A SESSÃO CRIADA NO logica-usuario.php
session_start();
function mostrarAlerta($tipo)
{
	if(isset($_SESSION[$tipo])) { ?>
        <p class="alert-<?=$tipo?>"><?= $_SESSION[$tipo] ?></p> 
    <?php  unset($_SESSION[$tipo]); } 
} ?>