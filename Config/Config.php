<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
/*$encrypted = $_SESSION["ceadmin"];

$sql = "SELECT * FROM adminuser WHERE PASSWORD='$encrypted'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
   header("Location:index.php");
   exit;
}*/
date_default_timezone_set('Etc/GMT-1');
const BASE_URL = 'https://micromercio.com/';
const CHARSET = 'charset=utf8';
const DB_HOST = "localhost";
const DB_USER = "micromdb";
const DB_PASSWORD = "Ld1x4z!9";
const DB_DB = "microdb";
const SPD = ",";
const SPM = ".";
const SMONEY = "€";