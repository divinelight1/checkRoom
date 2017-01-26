<?php
session_start();

// check if not logedin redirect to login
if (!isset($_SESSION['username'])) {

	header('location: login.php');
}

 ?>



<?php include('./includes/header.php'); ?>
<h1>hello world</h1>
<a href="./logout.php">logout</a>
<?php include('./includes/footer.php'); ?>
