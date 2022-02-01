<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="injection.php" method="POST">
      <input type="text" name="textbox" id="textbox" />
      <input type="submit" />
    </form>
    <?php
     include_once $_SERVER['DOCUMENT_ROOT'] . "/platform/php/connection.php";
     include_once $_SERVER['DOCUMENT_ROOT'] . "/platform/php/Database.php";
//     include_once "./php/connection.php";
// include_once "./php/Database.php";
//       if(isset($_REQUEST['textbox'])){
//         $table=$_REQUEST['textbox'];
//         $mysqli=new Database();
//         $mysqli=$mysqli->connect();
//         $row=33001;

//         $stmt=$mysqli->query('select user_passkey from user where user_id="' .addslashes($table).'"');
//         $stmt=$stmt->fetch_object()->user_passkey;
//         if (isset($stmt)){
//           echo $stmt;
//         }else{
//           echo  gettype(addslashes($table)). gettype($table);
//         }
//       }
//         $string="(my password; NULL select * from table)";
//         $a=fn()=> 'zia is "" coding';
        
       
      //   $stmt=$mysqli->prepare("select user_passkey from user where user_id=?");
      //   $stmt->bind_param('s', $table);
      //   $stmt->execute();
      //   $stmt->store_result();
      //   $stmt->bind_result($result);
      
      //  while ($stmt->fetch()){
      //   echo $result;
      //  }}
      //echo microtime(true)*10000;
      //print_r(hash_algos());
      // session_start();   
      // session_name("ZiaSession");
      //    $id = session_id();
      //    //print("Session Id: ".$id);
      //    $_SESSION=[];
         
      //    print(strlen(session_id()));
      //    session_destroy();
      // $online_acc = [];
      // $conn=new Dbconnection();
      // $sqlquery=$conn->connect();
      // $res=$sqlquery->query('SELECT * FROM firm');
     
    
      // //$res = query($sql);
      // if($res->num_rows > 0) {
      //   while($row = $res->fetch_object()) {
      //     $online_acc[] = $row->f_id;
      //     echo '<script> console.log("'.count($online_acc).'"); </script>';
      //   }
      // }
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000, $params["path"],
		$params["domain"], $params["secure"], $params["httponly"]
	);
      
    ?>
  </body>
</html>