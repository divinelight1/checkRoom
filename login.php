<?php 
//connect to database
include('./includes/connection.php');

//check if session is set
if (isset($_POST['username'])) {
	session_start();
	header('location: index.php');
}

//submit data
if (isset($_POST['login'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		echo '<script>alert("you must fill both fields to login")</script>';
	}else{
	  $username = mysqli_real_escape_string($connect, $_POST["username"]);
      $password = mysqli_real_escape_string($connect, $_POST["password"]);
      $password = sha1($password);
      $query = "SELECT * from admin WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($connect, $query);
      if (mysqli_num_rows($result) > 0 ) {
        $_SESSION['username'] = $username;
        $_SESSION['username'];
        header("location:dashboard.php");
      }else{
        echo '<script>alert("please register first")</script>';
      }
	}
}
?>

<?php include('./includes/header.php'); ?>

<div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin: 0 auto;     margin-top: 100px;">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Welcome to CheckRoom</h2>
  </div>
  <div class="mdl-card__supporting-text">
   <form action="post">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="sample1" name="username">
    <label class="mdl-textfield__label" for="sample1">username</label>
  </div>
    <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="sample1" name="password">
    <label class="mdl-textfield__label" for="sample1" >password</label>
  </div>

  </div>
  <div class="mdl-card__actions mdl-card--border">
    <!-- Accent-colored raised button with ripple -->
<button name="login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  login
</button>
  </div>
  </form>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>

<?php include('./includes/footer.php'); ?>