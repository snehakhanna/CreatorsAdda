<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CreatorsAdda</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
<link href="css/3-col-portfolio.css" rel="stylesheet">
<!--
      <style>
          h5{
              margin-left: 100px;
          }
          #blog{
              font-family:sans-serif;
              border-collapse: collapse;
              width: 100%;
        }
          #blog td, #blog th{
             border: 1px solid #ddd;
              padding: 8px;
          }
          #blog tr:nth-child(even){
              background-color: #f2f2f2;
              
          }
          #blog tr:hover{
              background-color: #ddd;          
          }
          #blog th{
              background-color: #f05f40;
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: justify;
              color: white;
          }
</style>
-->
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">CreatorsAdda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
<!--
            <li class="nav-item">
              <a class="nav-link" href="#">BLOGS</a>
            </li>
-->
               <li class="nav-item">
              <a class="nav-link" href="signout.php">SIGN OUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <div>
          
          <form action="admin.php" method="POST">
              <br>
              <br>
              <legend>DELETE USER BLOGS</legend><br>
              <label for="name">Enter Entry ID</label><br><br>
         <input type="text" name="entry_id" id="entry_id">
              <br>
              <br>
             <input type="submit" class="btn btn-light" style="background-color:#f05f40;
            border: none;
            color: white;
            font-weight: bold;
            padding: 16px 50px;
            text-decoration: none;
            margin: 4px 40px;
        cursor: pointer;" name="submit" value="submit">
          </form>
      </div>

    <div id="site_content">
        <br>
        <br>
        <br>
		<h5 style="margin-left: 10px;">BLog Posts</h5>
<?php
	$con=mysqli_connect('localhost','root','','creatorsadda') or die(mysqli_error());  
//    mysqli_select_db('creatorsadda') or die("cannot select DB");  


    $query=mysqli_query($con, "SELECT entry_id, entry_date, entry_author, entry_title, entry_excerpt, entry_content FROM blogpost");
	    // $query=mysqli_query("Select * From Feedback ");  

		  
		  echo "
          <br>
        
		  <table border=2>
		  <tr>
		     <th>Entry ID</th>
			 <th>Entry Date</th>
             <th>Entry Author</th>
             <th>Entry Title</th>
             <th>Entry Excerpt</th>
             <th>Entry Content</th>
             
		  </tr>";
		  while ($row=mysqli_fetch_array($query))
		  {
			  
			  echo "<tr>
			  <td>".$row['entry_id']."</td>
              
			  <td>".$row['entry_date']."</td>
              
              <td>".$row['entry_author']."</td>
              
              <td>".$row['entry_title']."</td>
              
              <td>".$row['entry_excerpt']."</td>
              
              <td>".$row['entry_content']."</td>
              <td></td>
			  </tr>";
			 
		  }
		  echo "</table>"
		  ?>
		</div>

      <footer class="py-5 bg-light">
      <div class="container">
        <p class="m-0 text-center text-black">Copyright &copy; CreatorsAdda</p>
      </div>
      <!-- /.container -->
    </footer>
      
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>

<?php
    if(isset($_POST["submit"])){  
  
if(!empty($_POST['entry_id'])) {  
    $entry_id=$_POST['entry_id'];  

 
    
    $con=mysqli_connect('localhost','root','','creatorsadda') or die(mysqli_error());  
    
    $query2=mysqli_query($con, "Delete from blogpost WHERE entry_id='".$entry_id."'"); 
    

    header("location: admin.php");
}
    }
		  ?>