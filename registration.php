<?php 
include('./includes/connection.php');
session_start();

  // submit data
  if (isset($_POST["register"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
          echo '<script>alert("you must fill both fields")</script>';
    }else{
      $username = mysqli_real_escape_string($connect, $_POST["username"]);
       $password = mysqli_real_escape_string($connect, $_POST["password"]);
       $password = sha1($password);
       $query = "INSERT INTO admin (username, password) VALUES('$username', '$password')";
       if (mysqli_query($connect, $query)) {
         echo '<script>alert("registration done");</script>';
       };
    };
  };

?>

<?php include('./includes/header.php'); ?>

<div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin: 0 auto;     margin-top: 100px;">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Welcome to CheckRoom</h2>
  </div>
  <div class="mdl-card__supporting-text">
   <form method="post">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="sample1" name="username">
    <label class="mdl-textfield__label" for="sample1">username</label>
  </div>
    <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="password" id="sample1" name="password">
    <label class="mdl-textfield__label" for="sample1" >password</label>
  </div>

  </div>
  <div class="mdl-card__actions mdl-card--border">
    <!-- Accent-colored raised button with ripple -->
<button type="submit" name="register" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >
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