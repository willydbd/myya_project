<?php
$con = new PDO("mysql:host=localhost;dbname=myyagroup_com", "myyagroup_com", "7wSvjnTx");
// $con = new PDO("mysql:host=localhost;dbname=myya", "root", "root");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>