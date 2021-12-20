<?php
include_once('inc/header.php');
if($_SESSION['user_email']==""){
	header('location:index.php');

}
include_once('inc/header.php');
 ?>
 <div class="row">
 	<div class="col-md-12">
 		<h2>Welcome Dear,<?php echo $_SESSION['user_email']; ?></h2>
		<a> Find all questions Below
		</a>
 		<li> CSE</li>
 		<li> MBA</li>
		<li> BBA</li>
		<li> EET</li>
		<li> EEE</li>
		<p><a href="logout.php">Logout</a></p>

 	</div>
 </div>
 