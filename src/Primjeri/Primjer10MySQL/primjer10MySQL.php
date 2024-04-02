<?php

/* $mysqli = new mysqli("localhost", "user", "password", "database");

echo $mysqli->host_info . "\n"; */

$mysqli = new mysqli("127.0.0.1", "root", "", "classicmodels", 3306);

echo $mysqli->host_info . "\n";
printf("Server version %s\n",$mysqli->server_info);

$sql="SELECT * FROM customers";
$result = $mysqli->query($sql);

//print_r($row);
$row=$result->fetch_array(MYSQLI_NUM);
printf("%s (%s)\n",$row[0], $row[1]);
$row=$result->fetch_array(MYSQLI_NUM);
printf("%s (%s)\n",$row[0], $row[1]);

