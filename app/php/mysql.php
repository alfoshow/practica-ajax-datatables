<?php
header('content-type: application/json; charset=utf-8');
//en caso de json en vez de jsonp habría que habilitar CORS:
header("access-control-allow-origin: *");

$gaSql['user'] = "alopez_root";
$gaSql['password'] = "123456";
$gaSql['db'] = "alopez_datatables";
$gaSql['server'] = "localhost";
?>
