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
      <h1 class="my-4">PRODUCTS
      </h1>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/art1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Painting Kit</a>
              </h4>
                <h6>Rs 450.00</h6>
              <p class="text-justify">Set of 4 oil paints, palette, brushes and crayons. They contain the maximum pigment content, microscopically ground and combined with non-yellowing oils and a unique plasticizer to give a smooth, non-cracking film with brush or palette on canvas.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/paint2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Acrylic Paints</a>
              </h4>
                <h6>Rs 550.00</h6>
              <p class="text-justify">Set of 6. Easy to apply on natural or artificial nails. Clean the surface of your nails, brush the base polish, and place it onto nails. Seal with a clear topcoat. You can also use them to decorate your home, cell phone's case, glasses, made card, body art, etc.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/paint1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Sketch Books</a>
              </h4>
                <h6>Rs 300.00</h6>
              <p class="text-justify">The exquisite mirror chrome nail polish formula guarantees one stroke, high-pigment, reflective perfection. Smooth and gorgeous coverage in a single coat and a stunning, plumping effect in a double coat. It is bound to win every fashionista's heart with its rich pigments and long-lasting color.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/pencil1.gif" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Pencils</a>
              </h4>
                <h6>Rs 80.00</h6>
              <p class="text-justify">Set of 10. Brighter colours made from high quality colour core bonded and embedded in superior wood which is easy to sharpen. Bright and easy transfer makes the art come alive. Different techniques of colour pencil usage mentioned on the pack.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/pens1.jpeg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Colored Pens</a>
              </h4>
                <h6>Rs 900.00</h6>
              <p class="text-justify">Set of 10. These are perfect for writing, drawing, sketching and even everyday doodling! Bright, vibrant colors leap off the page from the 0.4 mm nib-protected fine tip and will not bleed through most types of standard paper.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/pens3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="checkout.php" style="color:#f05f40">Colored Pens</a>
              </h4>
                <h6>Rs 600.00</h6>
              <p class="text-justify">Colored Gel Pens: 100 Unique Colors Ink Pens in a Variety of Styles including Red, Blue, Yellow, Orange, Green, Purple, White, Black, Gold, Silver, Chrome, and many more! The pack include 28 Glitter,17 Metallic,16 Fluorescence,15 Pastel,14 Neon,6 Symhony and 4 Normal. So many colors, this set gives a wide variety and good selection of several hues and shades of the many colors of the spectrum.</p>
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
