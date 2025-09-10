<?php

session_start();
include_once("settings.php");

$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);