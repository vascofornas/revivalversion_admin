<?php
$host="localhost";
$user="revivcu6";
$pwd="bZsW4T^vbGj$";
$dbname="revivcu6_revival";

$link=mysqli_connect($host,$user,$pwd,$dbname);
$db = mysqli_select_db($link,$dbname);
mysqli_query($link,"SET NAMES 'utf8'");
if(!$db) die("failed to connect to database.......");

?>