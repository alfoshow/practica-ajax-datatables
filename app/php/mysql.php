<?php
header('content-type: application/json; charset=utf-8');
//en caso de json en vez de jsonp habría que habilitar CORS:
header("access-control-allow-origin: *");

$gaSql['user'] = "root";
$gaSql['password'] = "";
$gaSql['db'] = "carman";
$gaSql['server'] = "localhost";
?>
