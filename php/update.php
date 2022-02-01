<?php
include_once ('./php/connection.php');
include_once ('./php/Database.php');
$connect=new Dbconnection();
$display=new Database($connect);
echo $display->getProduct();
?>