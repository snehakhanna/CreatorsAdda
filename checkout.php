<?php
session_start(); 
$con= mysqli_connect('localhost','root','','creatorsadda');
        if (!$con) {
            
            die("Connection Failed:". mysqli_error);
        }
mysqli_select_db($con, 'creatorsadda') or die(mysqli_error());

if(isset($_POST["submit"]))
{
    $flname = $_POST['fname'];
    $ema = $_POST['email'];
    $adr = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cname = $_POST['cardname'];
    $ccnum = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    
$sql = "insert into checkout(name, email, address, city, state, zip, card_name, card_number, exp_mon, exp_year, cvv) values ('".$flname."','".$ema."','".$adr."','".$city."','".$state."','".$zip."','".$cname."','".$ccnum."','".$expmonth."','".$expyear."','".$cvv."')";
//    print_r($sql);die;
$query= mysqli_query($con, $sql);
//  echo("Error description: " . mysqli_error($con));die;
}

?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet"> 
    <script type="text/javascript">
//    function openWin(){
//      
//    }
        function validation(){
        var fn= document.getElementById('fname').value;
        var em= document.getElementById('email').value;
        var ad= document.getElementById('adr').value;
        var st= document.getElementById('state').value;
        var ct= document.getElementById('city').value;
        var zi= document.getElementById('zip').value;
        var cn= document.getElementById('cname').value;
        var cno= document.getElementById('ccnum').value;
        var exm= document.getElementById('expmonth').value;
        var exy= document.getElementById('expyear').value;
        var cv= document.getElementById('cvv').value;
        
        if(fn == "")
                {
                    document.getElementById('fid').innerHTML="Please fill your Full Name";
                    return false;
                }
        if(em == "")
                {
                    document.getElementById('eid').innerHTML="Please fill EmailID";
                    return false;
                }
        if(ad == "")
                {
                    document.getElementById('aid').innerHTML="Please fill Address";
                    return false;
                }
        if(st == "")
                {
                    document.getElementById('sid').innerHTML="Please fill State";
                    return false;
                }
        if(ct == "")
                {
                    document.getElementById('cid').innerHTML="Please fill City";
                    return false;
                }
        if(zi == "")
                {
                    document.getElementById('zid').innerHTML="Please fill Zip Code";
                    return false;
                }
        if(cn == "")
                {
                    document.getElementById('cnid').innerHTML="Please fill Card Name";
                    return false;
                }
        if(cno == "")
                {
                    document.getElementById('cnoid').innerHTML="Please fill Card Number";
                    return false;
                }
        if(exm == "")
                {
                    document.getElementById('exid').innerHTML="Please fill Expiry Month";
                    return false;
                }
        if(exy == "")
                {
                    document.getElementById('eyid').innerHTML="Please fill Expiry year in 4 digits";
                    return false;
                }
        if(cv == "")
                {
                    document.getElementById('cvvid').innerHTML="Please fill your CVV";
                    return false;
                }
            window.open("thanks.html");
        }
        
  </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/3-col-portfolio.css" rel="stylesheet">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;

}

input[type=text] {
  width: 70%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 500px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 10px;
  }
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">CreatorsAdda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index2.php">HOME
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index1.php">BLOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="video1.php">TUTORIALS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop1.php">PRODUCTS</a>
            </li>
<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><?php
                  echo $_SESSION['sess_user'];
                  ?></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="signout.php">SIGN OUT</a>
            </li>
          </ul>
        </div>
      </div>
</nav>
    <br>
    <br>
    <br>
    <div class="container">
<h1 class="my-4">CHECKOUT</h1>
    <br>
    <br>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="checkout.php" method="POST" onsubmit="return validation()">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="Full Name">
              <span id="fid" class="text-danger font-weight-bold"></span>
              
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Email">
              <span id="eid" class="text-danger font-weight-bold"></span>
              
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Address">
              <span id="aid" class="text-danger font-weight-bold"></span>
              
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="City">
              <span id="cid" class="text-danger font-weight-bold"></span>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State">
                  <span id="sid" class="text-danger font-weight-bold"></span>
              </div>
              <div class="col-50">
                <label for="zip">Zip Code</label>
                <input type="text" id="zip" name="zip" placeholder="Zip code">
                  <span id="zid" class="text-danger font-weight-bold"></span>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name on Card">
              <span id="cnid" class="text-danger font-weight-bold"></span>
              
            <label for="ccnum">Card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Card Number">
              <span id="cnoid" class="text-danger font-weight-bold"></span>
              
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Expiry Month">
              <span id="exid" class="text-danger font-weight-bold"></span>
              
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Expiry Year">
                  <span id="eyid" class="text-danger font-weight-bold"></span>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" placeholder="CVV">
                  <span id="cvvid" class="text-danger font-weight-bold"></span>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <br>
        <br>
        <p align="center">
         <!-- <a href="thanks.html"><button>Continue to checkout</button></a>-->
    <input type="submit" name="submit" value="Proceed to checkout" class="btn" onclick="return validation()">
<!--        <input type="submit" value="Continue to checkout" class="btn" onclick="openWin()">-->
      </p>
      </form>
    </div>
  </div>
  <!--<div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>-->
</div>
    </div>
    <footer class="py-5 bg-light">
      <div class="container">
        <p class="m-0 text-center text-black">Copyright &copy; CreatorsAdda</p>
      </div>
      <!-- /.container -->
    </footer>
</body>
</html>
