<?php

    session_name('_s');
    session_start();
    
  
    include_once $_SERVER['DOCUMENT_ROOT'] . "/platform/php/dateTime.php";
     include_once $_SERVER['DOCUMENT_ROOT'] . "/platform/php/connection.php";
    // include_once ('./php/connection.php');
    // include_once ('./php/dateTime.php');
class Database{
    private $f_id;
    public $mysqli;
    private $stmt;
    private $p_id;
    function __construct($connection)
    {
        $this->mysqli=$connection;
        // this is a comment
    }
    public function insertIntoFirm($f_name, $f_email, $f_contact, $f_address){
        $getTimeDate=new Date_Time();
        $getTimeDate=$getTimeDate->getDateTime();
        
        $this->mysqli->autocommit(false);
        $this->f_id= $this->mysqli->query('select max(f_id)+1 as f_id from firm');//->fetch_object()->f_id;
        $this->f_id= $this->f_id->fetch_object()->f_id;
        $this->f_id===NULL? $this->f_id=10001: $this->f_id= $this->f_id; 
        $this->stmt= $this->mysqli->prepare('Insert into firm(f_id, f_name, f_contact, f_address, f_email, reg_date) VALUES(?, ?, ?, ?, ?, ?)');
        $this->stmt->bind_param('isssss', $this->f_id, $f_name, $f_contact, $f_address, $f_email, $getTimeDate);
        $this->stmt->execute();
        //echo $getTimeDate;
     }
    public function insertIntoUser($user_description, $user_passkey){
        $this->mysqli->autocommit(false); //this line of code ruined my 18 hours and gave me a headache 
        $user_id= $this->mysqli->query('select max(user_id)+1 as user_id from user');
        $user_id=$user_id->fetch_object()->user_id;
        $user_id===NULL?$user_id=33001:$user_id=$user_id; // if the table is empty it will provide the 33001 as user_id for the first time only
        $this->stmt= $this->mysqli->prepare('insert into user(user_id, user_description, user_passkey, f_id) VALUES(?, ?, ?, ?)');
        $this->stmt->bind_param('issi', $user_id, $user_description, $user_passkey, $this->f_id);
        $this->stmt->execute();
       //(!(self::$stmt->execute()))? print "Error". mysqli_error(self::$mysqli) : print "Succeed";
    }
    public static function getUserID($email, $password){
        $mysqli=new Dbconnection();
        $mysqli=$mysqli->connect();
        $stmt=$mysqli->prepare("select MAX(user_id) as user_id from firm, user where firm.f_id=user.f_id and f_email=?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $userID=$stmt->get_result();
        $userID=$userID->fetch_assoc();
        $userID=$userID['user_id'];
        if($userID){
            return self::verifyPass($userID, $password);
        }else{
            return false;
        }
    }
    public static function verifyPass($userid, $password){
        $mysqli=new Dbconnection();
        $mysqli=$mysqli->connect();
        $stmt=$mysqli->prepare("select user_passkey from user where user_id=?");
        $stmt->bind_param('i', $userid);
        $stmt->execute();
        $hashedkey=$stmt->get_result();
        $hashedkey=$hashedkey->fetch_assoc();
        $hashedkey=$hashedkey['user_passkey'];
        //print $hashedkey;
        if(password_verify($password, $hashedkey)){
            //echo "\n you did it";

            return true;

            
        }else{
            //echo "\n sorry try again";
            return false;
            
        }
    }
    public function insertIntoProduct($PName, $PDescrip, $PDiscount, $PPrice, $Pphoto, $PStatus, $pListed, $pUser){
        
        $this->mysqli=new Dbconnection();
        $this->mysqli=$this->mysqli->connect();
        
        $this->p_id=$this->mysqli->query('Select max(p_id)+1 as p_id from product')->fetch_object()->p_id;
        //$p_id= $this->p_id->fetch_object()->p_id;
        $this->p_id!=false? $this->p_id=$this->p_id: $p_id=991;

        $user=$this->mysqli->query("Select max(user_id) as user_id from user, firm where user.f_id=firm.f_id and firm.f_email='$pUser'")->fetch_object()->user_id;
        //$user= $this->mysqli->query('select max(user_id)+1 as user_id from user');
        //$user=$user->fetch_object()->user_id;
        $user!=false? $user=$user: $user=661;
        //echo $p_id;
        // $p=997;
        // $u=33001;
        //$pName='Briefcase'; 
        //$info='New Stylish';
        //$PDiscount=0; 
        //$pprice=50;
        //echo $Pphoto;    
        //$this->stmt=$this->mysqli->prepare('Insert into product(p_id, p_Name, p_description, p_discount, p_price, p_photo) VALUES(?, ?, ?, ?, ?, ?))');
        $this->stmt=$this->mysqli->prepare("Insert into product(p_id, p_Name, p_description, p_discount, p_price, p_status_id, user_id, p_listed, p_photo) VALUES(?,?,?,?,?,?,?,?,?)");
        //$this->stmt->bind_param('issiib', $p, $PName, $PDescrip, $PDiscount, $PPrice, $Pphoto);
        $this->stmt->bind_param('issiiiiss', $this->p_id, $PName, $PDescrip, $PDiscount, $PPrice, $PStatus, $user, $pListed, $Pphoto);
        (!($this->stmt->execute()))? print "Error". mysqli_error($this->mysqli) : print "Succeed";
        
    }
    
    public function getProduct($getData){
        $printData="";
        if($getData){
            /// include this part if the user is logged in.
            $partialQuery=$partialQuery='select p_id, p_name, p_description, p_discount, p_status_id, p_listed, f_name, f_email, f_contact,	f_address,  p_price, p_photo from product, firm, user where product.user_id=user.user_id and user.f_id=firm.f_id and f_email="'.$_SESSION['email'].'"';
        }else{
            // if the user is not logged in than dispaly all products.
            $partialQuery=$partialQuery='select p_id, p_name, p_description, p_discount, p_status_id, p_listed, 
            f_name, f_email, f_contact,	f_address,  p_price, p_photo from product, firm, user where product.user_id=user.user_id and user.f_id=firm.f_id';
        }
        
        $this->stmt=("$partialQuery");
        $result=$this->mysqli->query($this->stmt);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
               $printData=$printData.'<div class="contents"'. 'id="'.($row["p_id"]*5).'" onclick="disp('."'".($row["p_id"]*5)."'".')">';
                //echo '<div class="contents">';
                //header("Content-type: image/gif");
                //$data=$row["p_photo"];
                //echo base64_decode($data);
                //$printData=$printData.'<img src="data:image/gif;base64,' . base64_decode($data) . '">';
                
               // header("Content-type: image/gif");
                //$data=$row["p_photo"];
                //echo base64_decode($data);
                ///                                     Here I am multiplying the ID by five in order to hide the orignal ID saved in
                ($getData) ? $printData=$printData.'<button onclick="deleting('."'".($row["p_id"]*5)."')".'">X</button>':0;
                $printData=$printData. '<img class="image" src="data:image/jpeg;base64,'.$row["p_photo"].'" />';
                
                $printData=$printData.'<h2 class="Product">'.$row["p_name"].'</h2>';
                $printData=$printData.'<p class="pDescription">'.$row["p_description"].'</p>';
                $printData=$printData.'<h3>Price: '.$row["p_price"].' CHF</h3>';
                $printData=$printData.'<p class="hide fName">Seller: '.$row["f_name"].'</p>';
                $printData=$printData.'<p class="hide fContact">'.$row["f_contact"].'</p>';
                $printData=$printData.'<p class="hide pDiscount">Discount '.$row["p_discount"].'% </p>';
                $printData=$printData.'<p class="hide fAddress">'.$row["f_address"].'</p>';
                $printData=$printData.'</div> <br>';
            }
           return $printData;
        }else{
            return "Oops no product for sale!";
        }
            
    }
    public function DeleteProduct($id){
        $this->mysqli=new Dbconnection();
        $this->mysqli=$this->mysqli->connect();
        $this->stmt=("Delete from product where p_id='".$id."'");
        if($result=$this->mysqli->query($this->stmt)){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
}
$pass='';
$email='';

if(count($_REQUEST) >0 && isset($_REQUEST['pass']) ){
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
    $con=new Dbconnection();
    $con=$con->connect();
    $validate= new Database($con);
    $validate=$validate->getUserID($email, $pass);
    if($validate){
        $_SESSION['email']=$email;
        //echo '<script>console.log("'.$_SESSION['email'].'")</script>';
        echo $email;
        
    }else{
        $getPro=new Database($con);
        return $getPro->getProduct(false);
    }
    
}


//echo "Hi Zia";
//$testing=inserting::checkDuplicate('zia.ah2015@gmail.com');

?>