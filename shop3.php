<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
              <a class="nav-link" href="index1.php">BLOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="video1.php">TUTORIALS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="1shop1.php">BOOKS</a>
            </li>
<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><?php
            session_start();
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

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">PRODUCTS</h1>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/brush1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Brushes</a>
              </h4>
                <h6>Rs 500.00</h6>
              <p class="text-justify">Set of 6. Paint brushes with best quality hair, anti-rusting ferrules and wooden handle. Pony hair paint brush-for water colors. Synthetic hair paint brush-tempera, poster, water color and acrylic colors.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/micron1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Micron Pens</a>
              </h4>
                <h6>Rs 780.00</h6>
              <p class="text-justify">Set of 8. Chemically stable, waterproof, and fade resistant. No smears /feathers, or bleed-through on most papers Ideal for use in acid-free environments. Multi-purpose pen with the unique, long lasting archival Pigma ink. Used and recommended by anthropologists, architects, professional diamond cutters, cartoonists and Anime artists and decorative fabric artists.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/canvas1.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Canvas Board</a>
              </h4>
                <h6>Rs 899.00</h6>
              <p class="text-justify">Acid Free Canvas Cloth Machine Coated with triple layer of acrylic primer. Camel canvas board is made up of Good Quality light weighted non bending board. Ideal for all techniques, including heavier application of colour. Suitable to use with camel oil, Camel acrylic and Camel fabric colours.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/color2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Rangoli Colors</a>
              </h4>
                <h6>Rs 100.00</h6>
              <p class="text-justify">Set of 7. These colors spread positive vibrations within the environment and make to lively and entertaining. Free 2 Pouches of Glitter (Golden and Silver) Colour. Used as a decoration or adornment for your entryway, doors or temples. Also, said to be an auspicious way of welcoming Hindu deities. Available in Multiple colors. Sent randomly as per availability.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/art2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Quilling Kit</a>
              </h4>
                <h6>Rs 350.00</h6>
              <p class="text-justify">Beginner quilling kit including strips, scissors, quilling tool and glue. The most common and easiest tool to learn with is the slotted quilling tool. By placing a quilling strip into the slot, you can easily and quickly roll the tool and create a coil to be shaped without the strip moving around much. Create your most beautiful and amazing designs with basic tools.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/art3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Art and Craft Kit</a>
              </h4>
                <h6>Rs 2000.00</h6>
              <p class="text-justify">Amazing art and craft kit including crayons, pencils, paints, sketchpens, colored papers, brushes and scissors. Everything you need, for creating best of your art. </p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="shop1.php">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="shop2.php">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="shop3.php">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-light">
      <div class="container">
        <p class="m-0 text-center text-black">Copyright &copy; CreatorsAdda</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
