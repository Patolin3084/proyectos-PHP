<?php


session_start();

if(!isset($_SESSION["counter"]))
    $_SESSION["counter"] = 0;
else
    $_SESSION["counter"]++;


echo "CONTADOR GENERAL: " . $_SESSION["counter"];
echo("<br>");

?>