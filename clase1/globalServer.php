<?php

include_once("contador.php");
require_once("menu.php");


echo "GLOVAL SERVER" . "<br>";

echo 'HTTP_USER_AGENT';
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['GATEWAY_INTERFACE'] . "<br>";
echo $_SERVER['SERVER_ADDR'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo $_SERVER['REQUEST_METHOD'] . "<br>";
echo $_SERVER['REQUEST_TIME'] . "<br>";
echo $_SERVER['REQUEST_TIME_FLOAT'] . "<br>";
echo $_SERVER['QUERY_STRING'] . "<br>";
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo $_SERVER['HTTPS'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>";
echo $_SERVER['REMOTE_PORT'] . "<br>";
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo $_SERVER['SERVER_ADMIN'] . "<br>";
<h3></h3>
?>