<?php

//credenciales de la base de datos
define('DB_USUARIO','root');
define('DB_PASSWORD','root');
define('DB_HOST','localhost');
define('DB_NOMBRE','agendaphp');

//mysqli toma 4 parametros
$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE, 3307 );

echo $conn->ping();

