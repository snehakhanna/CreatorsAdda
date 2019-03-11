
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile Card</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/procard.css" rel="stylesheet">
      

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
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
              <a class="nav-link" href="index1.html">BLOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="video1.html">TUTORIALS</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="1shop1.html">BOOKS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop1.html">PRODUCTS</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="user.html">EDIT PROFILE</a>
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
      
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/avatar1.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
      
    <div class="flip-card-back">
      <h1>Details</h1> 
        <?php
        session_start();
        
       $con= mysqli_connect('localhost','root','','creatorsadda');
        if (!$con) {
            
            die("Connection Failed:". mysqli_error);
        } 
//        if($_SESSION['']) {
echo $_SESSION['sess_user'];
        echo '<p>' . $_SESSION['fname'] . " " .$_SESSION['lname']. '</p>';
//        echo '<p>' . $_SESSION['lname'] . '</p>';
        echo '<p>' . $_SESSION['qualif'] . '</p>'; 
        echo '<p>' . $_SESSION['ema'] . '</p>';
        echo '<p>' . $_SESSION['pho'] . '</p>';
        echo '<p>' . $_SESSION['abo'] . '</p>';
        ?>
    </div>
  </div>
</div>
      <br>
      <br>
      <br>
      <br>
      <footer class="py-5 bg-light">
      <div class="container">
        <p class="m-0 text-center text-black">Copyright &copy; CreatorsAdda</p>
      </div>
      <!-- /.container -->
    </footer>
    </body>
</html>