<?php
//        $conn=  mysqliii_connect("localhost","root","","creatorsadda");
//        if ($conn-> connect_error) {
//            
//            die("Connection Failed:". $conn-> connect_error);
//        }

if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'creatorsadda') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM admin WHERE adminname='".$user."' AND adminpass='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['adminname'];  
    $dbpassword=$row['adminpass'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    { 
    echo "Invalid username or password!"; 
    session_start();  
    $_SESSION['user']=$user;  
    // echo "<script>alert('Welcome $dbusername');</script>";
    /* Redirect browser */  
    header("Location: admin.php");  
    }  
    } 
    else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="/Creatorsadda/css/login.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type="text/javascript" src="/CreatorsAdda/js/login.js"></script>
    <script>
//        function confirm()
//        {
//            var a= document.getElementById('regpass').value;
//            var b= document.getElementById('reregpass').value;
////         var un= document.getElementById('username').value;
////          var pass= document.getElementById('pass').value;
////           var rname= document.getElementById('regname').value;
////           var rpass= document.getElementById('regpass').value; 
////         var repass= document.getElementById('reregpass').value;
//            
//            if(a!=b){
//                alert("Passwords don't match!");
//                }
//            
//            if (un == ""){
//               alert("Username cannot be blank");
//               }
//            
//            if (pass == ""){
//                alert("Password cannot be blank");
//                }
//            
//            if (rname == ""){
//                alert("Username cannot be blank");
//                }
//            
//            if (rpass == ""){
//                alert("Password cannot be blank");
//                }
//            
//            if (repass == ""){
//               alert("Password cannot be blank");
//                }
//        }
        </script>
</head>
<div class="materialContainer">


   <div class="box">
       <form action="" method="POST">
      <div class="title">ADMIN LOGIN</div>

      <div class="input">
         <label for="name">Username</label>
         <input type="text" name="user" id="name">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">Password</label>
         <input type="password" name="pass" id="pass">
         <span class="spin"></span>
      </div>

<div class="button login">
         <!-- <div class="col-md-8">
             <div id="buttonsss">
              <input type="submit" class="btn btn-default" style="color:#f05f40" name="submit" value="GO">
             </div>
            </div>-->
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
             <input type="submit" class="btn btn-light" style="background-color:#f05f40;
    border: none;
    color: white;
    font-weight: bold;
    padding: 16px 50px;
    text-decoration: none;
    margin: 4px 40px;
    cursor: pointer;" name="submit" value="GO">
                 </div>
          </div>
<!--
        <input type=submit name="submit" value="GO">
         <span>GO</span>-->
          <i class="fa fa-check"></i>
      </div>
       </form>