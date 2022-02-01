<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/platform/php/connection.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/platform/php/Database.php";
// include_once "./php/connection.php";
// include_once "./php/Database.php";
//  if(isset($_REQUEST)){
//     $image=base64_encode(file_get_contents());
//     echo "it works";
//  }/
//url = `Pname=${Pname}&PDescrip=${Pdesc}&PDiscount=${PPrice}&PPrice=${P_listed_Date}&P_listed_Date=${P_listed_Date}&PUpload=${base64}`;
if(isset($_REQUEST) &&  $_REQUEST['Pname']!=""){
   $Pname=filter_var($_REQUEST['Pname'], FILTER_SANITIZE_STRING);
   $PDescrip=filter_var($_REQUEST['PDescrip'], FILTER_SANITIZE_STRING);
   $PDiscount=filter_var($_REQUEST['PDiscount'], FILTER_SANITIZE_NUMBER_FLOAT);
   $PPrice=filter_var($_REQUEST['PPrice'], FILTER_SANITIZE_NUMBER_FLOAT);
   $P_listed_Date=$_REQUEST['P_listed_Date'];
   $EntryUser=filter_var($_REQUEST['EntryUser'], FILTER_SANITIZE_EMAIL) ;
   //$PUpload = $_REQUEST['PUpload'];

   $name = $_FILES["userfile"]['tmp_name'];
   $image=base64_encode(file_get_contents($name));
   $PStatus=1;
   //echo $Pname. $PDescrip. $PDiscount. $PPrice. $P_listed_Date. $image.$EntryUser;
   $connect=new Dbconnection();
   $connect->connect();
   $insert=new Database($connect);
   $insert->insertIntoProduct($Pname, $PDescrip, $PDiscount, $PPrice, $image, $PStatus, $P_listed_Date, $EntryUser);
   
}else{
   echo "wrong product";
}
?>