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
</form>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      login
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>

<?php include('./includes/footer.php'); ?>