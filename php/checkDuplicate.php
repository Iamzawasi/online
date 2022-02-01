<?php
include_once ('./connection.php');
include_once ('./dateTime.php');
class CheckingEmail{
    public static $mysqli;
    public static function checkDuplicate($email){
        self::$mysqli=new Dbconnection();
        self::$mysqli=self::$mysqli->connect();
        $stmt=self::$mysqli->prepare('select f_email from firm where f_email=?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $email=$stmt->get_result();
        $email=$email->fetch_assoc();
        if(isset($email['f_email'])){
            $email=$email['f_email'];
            echo $email. ' already exist';
        }
    }
}
//checkingEmail::checkDuplicate('zia.ah2015@gmail.com')
$q = $_REQUEST["q"];

if ($q !== ""){
    checkingEmail::checkDuplicate($q);
}

?>