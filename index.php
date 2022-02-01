<?php
// include_once ('./connection.php');
include_once ('./php/connection.php');
include_once ('./php/dateTime.php');
include_once ('./php/Database.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Discount for Everyone</title>
    <link rel="stylesheet" href="./CSS/main.css" />
    <link rel="stylesheet" href="./CSS/loginpopup.css" />
    <link rel="stylesheet" href="./CSS/signUp.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </head>

  <body>
    <header>
      <h1 id="PlateformName">Discount for everyone</h1>
      <div id="HeaderSearchDiv">
        <input type="text" name="searchInput" id="searchInput" onkeyup="Search()"/>
        <a href="#"> <img src="./images/search.png" id="searchButton" /></a>
      </div>
      <a href="#" class="Login" id="LoginSale" onclick="HideandShow()">Sale</a>
      <a href="#" class="Login" id="Login" onclick="hideAndShow('login_popup')">Login</a>
      <a href="#" name="logout" class="LogOut" id=LogOut onclick="logout()">Logout</a>
      <a href="#" class="SignUp" id="SignUp" onclick="hideAndShow('signUp_popup')">Sign Up</a>
      
    </header>
    <main>
      <div id="ProDetails" style="display: none;">
      
        <span id="product_Image">
          <img id="ProDetailImage" src="./images/search.png">
      </span>
        
      <span id="product_Detail">
        
        <h2></h2>
        
          <p class="pDescription"></p>
          <p class="fName">asasdf</p>
          <p class="fContact"></p>
          <p class="fAddress"></p>
      </span>
          <span id="product_Buying">
          
          <h3></h3>
          <p class="pDiscount"></p>
            <p>FREE delivery Friday, Or fastest delivery Thursday. Order within 22 hrs 55 mins</p>
            <p>Delivery worldwide</p>
            <button>Buy Now</button>
            <p>For further information, company details, terms and conditions, and cancellation rights, please click on the seller's name.</p>

          </span>
          <span id="close">
          <input type="button" id="closeBtn" value="X" onclick="disp()"/>
        </span>
      </div>
      <?php

$output = `pwd`;
if(function_exists('shell_exec')) {
  echo '<script>console.log("'.strlen($output).'")</script>';
}

      
      $ses=array();
      $con=new Dbconnection;
      $con=$con->connect();
       if(isset($_REQUEST['log'])){
        //session_destroy();
        //echo "it works";
        //($_REQUEST['log']==='out')? session_destroy(): 0;
        if($_REQUEST['log']==='out'){
          session_destroy();
          session_name('_ss');
          session_start();
          
          echo '<script>console.log("destroying")</script>';
        }
       
        
      }
      if(isset($_SESSION['email'])){
        //array_push($ses, $_SESSION['email']);
        //print_r ($ses); 
        // echo '<script>console.log("'.$_SESSION["_s"].'")</script>';
        // unset($_SESSION['id']);
        $showProduct=new Database($con);
        $showProduct=$showProduct->getProduct(true); // true is for user// user logged in
       //echo "<script>console.log("."'".$showProduct."'".")</script>"; /// its working now
       echo '<script>console.log("log in")</script>';
        echo $showProduct;
       
        //echo '<marquee></marquee>';
      }else{
        $showProduct=new Database($con);
        $showProduct=$showProduct->getProduct(false); // false is for user not logged in to it means Display all the records.
        echo '<script>console.log("logOut")</script>'; /// its working now
        echo $showProduct;
      }
      ?>
      <div class="contents">
        <img src="./images/images/laptop.jpg">
        <h2 class="Product">New Laptop Core I9</h2>
        <p>This is New laptop core i9 for sale, can not be reserved please contact ASAP</p>
        <h3>Price: 350.00 CHF</h3>
      </div>
      <div class="contents">
        <img src="./images/images/laptop1.jpg">
        <h2 class="Product">New Laptop Core i7</h2>
        <p>This is New laptop core i7 for sale, can not be reserved please contact ASAP</p>
        <h3>Price: 380.00 CHF</h3>
      </div>
      <div class="contents">
        <img src="./images/images/laptop1.jpg">
        <h2 class="Product">New Laptop Core i7</h2>
        <p>This is New laptop core i7 for sale, can not be reserved please contact ASAP</p>
        <h3>Price: 380.00 CHF</h3>
      </div>
      <div class="contents">
        <img src="./images/images/laptop2.jpg">
        <h2 class="Product">New Laptop Core i7</h2>
        <p>This is New laptop core i7 for sale, can not be reserved please contact ASAP</p>
        <h3>Price: 380.00 CHF</h3>
      </div>
      <div class="contents">
        <img src="./images/images/samsung.jpg">
        <h2 class="Product">New Samsung Mobile</h2>
        <p>This is New Mobile with 8GB Ram for sale, can not be reserved please contact ASAP</p>
        <h3>Price: 300.00 CHF</h3>
      </div>
      <div class="contents">
        <img src="./images/images/samsung1.jpg">
        <h2 class="Product">Last Stock Samsung</h2>
        <p>RAM 16GB with 128 Storage for sale, can not be reserved please contact ASAP</p>
        <h3>Price: 430.00 CHF</h3>
      </div>
    </main>
    <form  id="RegPro">
      <div id="Product_container">
      <img src="#" id="image"  download="./php/1.jpg">
      
     <div class="inputDiv"><label for="Pname" id="PNlabel">Product Title</label><input type="text" name="Pname" id="Pname" required/></div>
     <div class="inputDiv"><label for="PDescrip" id="PNlabel">Product Info</label><input type="text" name="PDescrip" id="PDescrip" required/></div>
     <div class="inputDiv"><label for="PDiscount" id="PDlabel">Product Discount</label><input type="text" name="PDiscount" id="PDiscount" /></div>
     <div class="inputDiv"><label for="PPrice" id="PPlabel">Product Price</label><input type="text" name="PPrice" id="PPrice" required/></div>
     <div class="inputDiv"><label for="P_listed_Date" id="PPlabel">Produt listed On</label><input type="date" name="P_listed_Date" id="P_listed_Date" /></div>
     <div class="inputDiv"><label for="EntryUser" id="PPlabel">Produt listed by</label><input type="text" name="EntryUser" id="EntryUser" disabled/></div>
      <div class="inputDiv"><label for="PUpload">Product Image</label><input type="file" name="PUpload" id="PUpload" accept="image/*" onchange="loadFile(event)" ></div>
      <div class="buttons"><input type="button" id="savebtn" value="Save product" onclick="SaveProduct()" > <input type="button" id="close" value="Close" onclick="HideandShow()" ><input type="button" id="reset" value="Reset" onclick="resetForm()" ></div>
      </div>
    </form>
  
    
    <div id="login_popup">
      <div id="loginBox">
        <button id="closePopupLogin" onclick="hideAndShow('login_popup')">X</button>
        <form >
          <input
            type="text"
            name="UserName"
            id="UserName"
            placeholder="Enter your Email"
            required
          />
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Enter your password"
            required
          />
          <input
            type="button"
            name="loginButton"
            id="LoginButton"
            value="Log In"
            onclick="login()";
          />
          
        </form>

        <a href="#" id="forgottenPassword"><p>Password forgotten</p></a>
        <a href="#" onclick="hideAndShow('signUp_popup')" id="createNewLink">Create New Account</a>
      </div>
      <div id="signUp_popup">
        <div id="SignUpbox">
          <button id="closePopupLogup" onclick="hideAndShow('signUp_popup')">X</button>
          <article id="textAfter">
            <h1>Congrats.</h1>
            <p>Your Account has been created.</p>
            <p>Please log into your account using your credentials.</p>
          </article>
          
          <form action="index.php"  method="post" id="SignUpForm">
            <label id="Remark"></label>
            <input
              type="text"
              name="compName"
              id="compName"class="formSignUp"
              placeholder="New Passion Style LLC (Required)"
              required
            />
            
            <input
              type="email"
              name="email"
              id="email" class="formSignUp"
              placeholder="Enter Email ID (Required)" onchange="checkDuplicate(this.value)"
              required
            />
            <input
              type="password"
              name="passwordsignUp"
              id="passwordsignUp" class="formSignUp"
              placeholder="Enter your password (Required)"
              required
              
            />
            <input
              type="tel"
              name="Telephone"
              id="Telephone" class="formSignUp"
              placeholder="Enter your Tel/Mobile"
              onkeypress="CheckFields();"
            />
            <input
              type="text"
              name="address"
              id="address" class="formSignUp"
              placeholder="Enter the Address"
              onkeypress="CheckFields();"
            />
            <p>
            <input
              type="checkbox"
              name="checkbox"
              id="checkboxTerms"
              required onchange="CheckFields()"
            />
            <label for="checkboxTerms" id="LabelTerms">I Accept Terms and Conditions</label></p>
            <input
              type="submit"
              name="loginButton"
              id="createNewLink"
              value="Create Account"
              onclick="CheckFields('val')"
            />
          </form>
        </div>
    </div>
    <?php
    
   
    

    $firmName = '';
    $emailID='';
    $password='';
    $tell='';
    $address='';
    
   
    class hashing{
      public $password;
      public $hashingType='PASSWORD_BCRYPT';
      public $cost=8;
      function __construct($getPassword)
      {
        $this->password=password_hash($getPassword, PASSWORD_BCRYPT, ['cost'=> $this->cost]);
      }
    }
    
    if(isset($_POST['email'])){
     
      $firmName =filter_var($_POST['compName'], FILTER_SANITIZE_STRING);
      $emailID=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) ;
      $password=filter_var($_POST['passwordsignUp'], FILTER_SANITIZE_STRING); // make sure you sanitize the password before matching.
      $password=new hashing($password);
      $password=$password->password;
      $tell=filter_var($_POST['Telephone'], FILTER_SANITIZE_NUMBER_INT) ;
      $address=filter_var($_POST['address'], FILTER_SANITIZE_STRING);
      //==============above password is hashed =====================
         mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
         $con=new Dbconnection();
         $con=$con->connect();
         $createAccount=new Database($con);
        // $CreateAccount->$mysqli->begin_transaction();
        // Database::$mysqli->begin_transaction();
        try{
          $createAccount->insertIntoFirm($firmName, $emailID, $tell, $address);
          $createAccount->insertIntoUser("Normal Web Entry", $password);
         
          if(!($createAccount->mysqli->commit())){
             print 'Error'. mysqli_error($createAccount->mysqli);
          }  else{
          echo "<style>
          
           #SignUpbox #textAfter {
            display: flex;
           } 
           #SignUpForm{
             display: none;
           }
           #signUp_popup {
              visibility: visible;}
          </style>";
        }
        }catch (Exception  $exception){
          $createAccount->mysqli->rollback();
          echo 'Error:'. $exception->getMessage();
        }
        
      
    }
    // $conn= new Dbconnection();
    // $conn=$conn->connect();
    // $DiplayProducts=new Database($conn);
    // $DiplayProducts=$DiplayProducts->getProduct();
    // echo "new linke";
    ?>    
    <!-- <script type="text/javascript">console.log("hi how are you doing");</script> -->
    <script src="./JavaScript/login.js"></script>
    <script src="./JavaScript/signUp.js"></script>
    
    
  </body>
</html>
