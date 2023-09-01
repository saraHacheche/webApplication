<?php

$dbname = "system_installation";
$username = "root";
$password = "";
global $mysql ;
$mysql = new PDO('mysql:host=localhost;dbname='.$dbname, $username, $password);	
?>;