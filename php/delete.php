<?php
include_once ('./Database.php');
include_once ('./connection.php');
include_once ('./dateTime.php');
if(isset($_SESSION['email'])){
    $conn= new Dbconnection();
    $Remove= new Database($conn);
    $Remove->DeleteProduct(($_REQUEST['id']/5));// divid the ID by five to get the Database ID
    
}
else{
    echo "Invalid User Info, please log out and re login to delete the record";
}
?>