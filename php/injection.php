<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="../CSS/signUp.css">

  </head>
  <body>
    <form action="injection.php" method="POST">
      <input type="text" name="textbox" id="textbox" />
      <input type="submit" />
    </form>
<?php

use function PHPSTORM_META\type;

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
    //   $params = session_get_cookie_params();
    //   setcookie(session_name(), '', time() - 42000, $params["path"],
		// $params["domain"], $params["secure"], $params["httponly"]
	//);
   //echo  getenv("REMOTE_ADDR");
   //   $_SERVER['HTTP_USER_AGENT'];
  // echo '<br>';
  // echo $_SERVER['SERVER_PORT'];
  // echo '<br>';
  // echo getenv("REMOTE_ADDR");
 // $_SERVER ['PHP_SELF'] ="My_page";
 
//  $_SESSION['login']=0;//=1644392461;
//  $_SESSION['timeout']=0;//=50;
//   $x = (time() - $_SESSION['login'])/ 60; 
//   echo 'time since login '.$x. '  MyTimeOutTime'. $_SESSION['timeout'];
// 		$x =  $x-$_SESSION['timeout'];
//         //echo $_SESSION['timeout']/60/60/7/24;
//     echo '<div id="rest">' . (int) ($x*-1) . '</div>';
// $array=['Hi', 'how', 'are you?'];
// $a="ahmad zia";
// // while ($row=$array){
// //   echo $row;
// // }
// // echo sizeof($a);
// if(true){
//   if(true){
//     $str="zia";
//     $abc=$a['zia'];
//     $abc=["ahmad", "zia", "wasi"];
//   }
 
//}

// echo implode('', (array)$str);
// echo sizeof($abc);
// echo microtime(true)*10000;
// switch(isset($_GET['app'])){
//   case(false): {echo "its false"; break;}
//   case(true): {echo 'its ture';};

// }
// echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// if(empty($project[$projectID])) /// this code was added bcz: when you create a user story and add it in your favourte and then delete the user stories
// continue;

/// then your favourite user story part in Dashboard will display dummy data and there will be log issues
//$dataType=array();
// test([1]);
// function test($dataType){
//   $is_data_type=true;
//   if($is_data_type){
//   //Werte übersetzen zu t_data_type
//   $d1 = array();
//   for($i=0;$i<sizeof($dataType);$i++){
//     switch($dataType[$i]){
//       case(0): break;
//       case(1): $d1[] = 1;			break;
//       case(2): $d1[] = 2;			break;
//       case(3): $d1[] = 5;			break;
//       case(4): $d1[] = 6;			break;
//       case(5): $d1[] = 7;			break;
//       case(6): $d1[] = 8;			break;
//       case(7): $d1[] = 15;		break;
//       case(14): $d1[] = 12;		break;
//       case(55): $d1[] = 9;		break;
//       default: $d1[] = ($i+1);	break;
//     }
//   }
//   $dataType = $d1;
//   $sql_data_type_filter = 'data_type IN ('.implode(',',$dataType).')';
//   echo $sql_data_type_filter;
//   }
//}

// if(0){
//   echo 'I am one';
// }elseif(1){
//   echo 'I am zero';
// }
// $string='äbcd';

// if(str_contains($string, 'ä')){
//   $string=str_replace('ä','ae',$string);
//   echo $string;
// }


// $person_data=array('zia','über','uber','ober','öber','äbcd','Aebc','acdz', 'abcz', 'abcd', 'abcd', 'abefg', 'azzd', 'bcde', 'bäzee', 'bazee');
// //$person_data=array('äbcd','Aebc','acdz', 'abcz', 'abcd', 'abcd', 'abefg', 'azzd', 'bcde');
// //$person_data=array('a', 'B', 'c', 'A', 'b', 'C');
// //usort($person_data, function($a, $b){
// //    return strcasecmp($a, $b);
// // });
// //print_r($person_data);
// //echo '<br>';
// //usort($person_data, function($a, $b){return strcasecmp($a, $b);});
// // $ab=1;
// // function zia(){
// //   Global $person_data; 
// // usort($person_data, function($a, $b){
// //   if(str_contains(strtolower($a), "a")){
// //     echo $a;

// //   }
// //   // else if(str_contains($a, "a")){
// //   //   echo $a;
// //   // }
  
// //   });
// // }
// // zia();
// // //mb_internal_encoding('UTF-8');
// // echo mb_strtolower("ÖÄÜ");
// // echo strtolower("OAU");
// // // //zia();

// print_r($person_data);
// echo '<br>';
// usort($person_data, function($a, $b){
//  if(str_contains($a, 'ä')){
//     $a=str_replace('ä','a',$a );
//     return  strcasecmp($a, $b);
//   }
//   if(str_contains($b, 'ä')){
//     $b=str_replace('ä','a',$b );
//     return  strcasecmp($a, $b);
//   }
//   elseif(str_contains($a, 'ö')){
//     $a=str_replace('ö','o',$a );
//     return  strcasecmp($a, $b);
//   }
//   elseif(str_contains($b, 'ö')){
//     $b=str_replace('ö','o',$b );
//     return  strcasecmp($a, $b);
//   }
//   elseif(str_contains($a, 'ü')){
//     $a=str_replace('ü','u',$a );
//     return  strcasecmp($a, $b);
//   }
//   elseif(str_contains($b, 'ü')){
//     $b=str_replace('ü','u',$b );
//     return  strcasecmp($a, $b);
//   }
//   else{
//     return  strcasecmp($a, $b);
//   }
// });
// print_r("================<br>");
// print_r($person_data);
// $person_data=array('zia','über','uber','ober','öber','äbcd','Aebc','acdz', 'abcz', 'abcd', 'abcd', 'abefg', 'azzd', 'bcde', 'bäzee', 'bazee');
// //$person_data=array('äbcd','Aebc','acdz', 'abcz', 'abcd', 'abcd', 'abefg', 'azzd', 'bcde');
// //$person_data=array('a', 'B', 'c', 'A', 'b', 'C');
// //usort($person_data, function($a, $b){
// //    return strcasecmp($a, $b);
// // });
// //print_r($person_data);
// //echo '<br>';
// //usort($person_data, function($a, $b){return strcasecmp($a, $b);});
// // $ab=1;
// // function zia(){
// //   Global $person_data; 
// // usort($person_data, function($a, $b){
// //   if(str_contains(strtolower($a), "a")){
// //     echo $a;

// //   }
// //   // else if(str_contains($a, "a")){
// //   //   echo $a;
// //   // }
  
// //   });
// // }
// // zia();
// // //mb_internal_encoding('UTF-8');
// // echo mb_strtolower("ÖÄÜ");
// // echo strtolower("OAU");
// // // //zia();

// print_r($person_data);
// echo '<br>';
// usort($person_data, function($a, $b){
//  if(str_contains($a, 'ä')){
//     $a=str_replace('ä','a',$a );
//     return  strcasecmp($a, $b);
//   }
//   if(str_contains($b, 'ä')){
//     $b=str_replace('ä','a',$b );
//     return  strcasecmp($a, $b);
//   }
//   elseif(str_contains($a, 'ö')){
//     $a=str_replace('ö','o',$a );
//     return  strcasecmp($a, $b);
//   }
//   elseif(str_contains($b, 'ö')){
//     $b=str_replace('ö','o',$b );
//     return  strcasecmp($a, $b);
//   }
//   elseif(str_contains($a, 'ü')){
//     $a=str_replace('ü','u',$a );
//     return  strcasecmp($a, $b);
//   }
//   elseif(str_contains($b, 'ü')){
//     $b=str_replace('ü','u',$b );
//     return  strcasecmp($a, $b);
//   }
//   else{
//     return  strcasecmp($a, $b);
//   }
// });
// print_r("================<br>");
// print_r($person_data);


// $persons = array(
//   array('vorname' => 'Hannlore', 'nachname' => 'böhm'),
//   array('vorname' => 'Hannlore', 'nachname' => 'bitter'),
//   array('vorname' => 'Hannlore', 'nachname' => 'bye'),
//   array('vorname' => 'Hannlore', 'nachname' => 'bruckert')
// );

// $collator = new Collator('de_DE');

// usort($persons, function (array $a, array $b) use ($collator) {
//   $result = $collator->compare($a['nachname'], $b['nachname']);
//   if ($result === 0) {
//       $result = $collator->compare($a['vorname'], $b['vorname']);
//   }
//   return $result;
// });

// print_r($persons); 
?>
<body>
<script>
// var sandBox1=document.getElementsByTagName('body');
// var messageBox=document.createElement('div');
// sandBox1.appendChild(messageBox)

// var mesg=document.createAttribute('p');
// mesg.innerHTML="Bitte Warten";
// var btn=document.createAttribute('button');
// messageBox.appendChild(mesg);
// messageBox.appendChild(btn);
document.body.innerHTML = '<div id="alertMessage" style=" visibility: hidden; z-index: 10000; width: 99%; height: 99%; color: rgb(0, 0, 0); background-color: rgba(79, 76, 76, 0.41);position:absolute;width:100%;height:100%;opacity:0.3;z-index:100;"><article id="MessageArticle" style="position: absolute; background: white; top: 40%; width: 200px;  right: 50%; padding: 10px; border-radius: 5px;"><p>Bitte Warten</p><hr style="width:95%; height:0.1px;text-align:left;margin-left:0"><input onclick="CloseDiv()" type="button" value="OK" id="alertButton" name="alertButton" style="width:50px; background:blue"></article></div>';
MessageDiv=document.getElementById("alertMessage");
function CloseDiv(){
  MessageDiv.style.visibility="hidden";
}
//MessageDiv.style.visibility="visible";
//var sortlist=['ABC', 'Abc', 'aBC', 'abc'];

const sortlist = ["Banana", "Orange", "Mango", "Apple"];

var SortOrder1=['1', '2', '3','a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n','o','p','q','r','s','t','u','v','w','x','y','z'];
var SortOrder2=['1', '2', '3','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
//var SortOrder=['a', 'A', 'b', 'B', 'c', 'C', 'd', 'D', 'e', 'E', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'I', 'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'o', 'O', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z' ];

var evaluatedArray=[]; 

sortlist.forEach(Element=>{
  evaluateEachString=0;
  for(i=0; i<Element.length; i++){
    if(SortOrder1.indexOf(`${Element[i]}`)){
      evaluateEachString+=(SortOrder1.indexOf(`${Element[i]}`)/100);
    }else if(SortOrder2.indexOf(`${Element[i]}`)){
      evaluateEachString+=(SortOrder2.indexOf(`${Element[i]}`)/100);
    }
  }
  if(evaluatedArray[evaluateEachString]){
    evaluateEachString+=0.1
    while(evaluatedArray[evaluateEachString]){
      evaluateEachString+=0.1
    }
    //console.log("index"+evaluateEachString+" element "+Element)
  }
  evaluatedArray[evaluateEachString]=Element;
});
console.log(evaluatedArray);
//console.log(SortOrder.indexOf('a'));
</script>
