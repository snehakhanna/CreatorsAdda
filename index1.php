<?php
require_once 'header.php'; 
?>
<a href="create.php" style="color:#f05f40">Create your Blog here!!</a>
    <br>
    <br>
    <br>
<?php


require_once 'classes/entry.php';

?>
<!-- Main -->
<div id="main">
<?php 

$query = 'SELECT * FROM blogpost ORDER BY entry_id DESC LIMIT 7;';

require_once('classes/dbh.php');

$dbh = new Dbh();

$rows = $dbh->executeSelect($query);

//print_r($rows);

    
foreach ($rows as $row) {
	$entry = new Entry();

	$entry->setByRow($row);

?>
        
    
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="single.php?entry_id=<?php echo $entry->getId(); ?>" style="color:black"><?php echo $entry->getTitle(); ?></a></h2>
									</div>
									<div class="meta">
										<time class="published"><?php echo $entry->getDate(); ?></time>
										<a href="#" class="author" style="color:black"><span class="name">><?php echo $entry->getAuthor(); ?></span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<div class="excerpt">
								<?php echo $entry->getExcerpt(); ?>
								</div>
								<footer>
									<ul class="actions">
                                        <br>
<!--										<li><a href="#" class="button big">Continue Reading</a></li>-->
									</ul>
<!--
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
-->
								</footer>
							</article>
<?php } ?>
				
						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>

					</div>

    <footer class="py-5 bg-light">
      <div class="container">
        <p class="m-0 text-center text-black">Copyright &copy; CreatorsAdda</p>
      </div>
      <!-- /.container -->
    </footer>
	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>