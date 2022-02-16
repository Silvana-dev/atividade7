<?php
$mysqli = new mysqli('localhost', 'USUARIO_BD', 'SENHA_BD', 'NOME_BD');

if ($mysqli->connect_error) {
    die('Erro de conexão: (' . $mysqli->connect_error);
}

date_default_timezone_set('America/Maceio');
?>