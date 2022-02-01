<?php
class Dbconnection{
   private $servername='localhost';
   private $username='root';
   private $password='';
   private $dbname='rabattdb';
   private $conn='';
   public function connect(){
        return $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
    }
}

// $connect=dbconnection::connect();
// $id=10005;
// $name="ZARA Fashion co";
// $tel="+41789666232";
// $email="zara@gmail.com";
// $address="Zug Zentrum";
// $stmt=$connect->prepare("Insert into firm(f_id, f_name, f_contact, f_address, f_email) VALUES(?, ?, ?, ?, ?)");
// $stmt->bind_param('issss', $id, $name, $tel, $address, $email);

// if(!($stmt->execute())){
//     echo "Error: ". mysqli_error($connect);
// }else{
//     echo "it worked";
// }

// if ($connect->connect_error){
//     die("DB Connection Failed". $conn->connect_error);
//    }
// else{
//      print 'connection successful';
//     }
// $testInsert="Insert into firm(f_id, f_name, f_contact, f_address, f_email) VALUES(?, ?, ?, ?, )";
// $testInsert->bindpar
//      10003, 'NEW YORKERS', '+93782059001', 'Zug Zentrum 6300', '12,12,2020', 'newyorker@fashion.com
// if($connect->query($testInsert)===true){
//     echo "its successful";
// }
// else {
//     echo $testInsert.$connect->error;
// }
// ?>