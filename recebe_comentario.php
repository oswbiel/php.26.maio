<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
# recebe_comentario.php
$nome = $_POST['nome'];
$comentario = $_POST['comentario'];

date_default_timezone_set('America/Sao_Paulo');

#criar uma variavel com todo o texto 
$msg = '<div class="comentario">' ;
$msg .= "<small>$nome - ".date('d,m,Y h>i'). '</small>';
$msg .= "<p>$comentario</p>";
$msg .= '</div>';
$msg .= "\n\n";

#salvar no arquivo texto
file_put_contents( 'comentarios.txt', $msg, FILE_APPEND);

#REDIRECIONA...
header ('Location:comentarios.php');
