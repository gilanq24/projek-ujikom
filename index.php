<?php
session_start();
if (isset($_SESSION['userweb'])) {

  header("Location:dashboard/index.php");
}

require 'functions.php';

$error = false;

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $qry = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password = md5('$password')");
  $cek = mysqli_num_rows($qry);
  if ($cek == 1) {
    $_SESSION['userweb'] = $username;
    header("location:dashboard/index.php");
    exit;
  } else {
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Login TOSERBA</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
  <div class="login-box">

    <h1>Login</h1>
    <form action="" method="post">
      <p>Username : </p>
      <input type="text" name="username" class="txt">
      <p>Password : </p>
      <input type="password" name="password" class="txt">
      <input type="submit" value="Login" name="submit" class="submit">
      <?php if ($error) : ?>
        <?php echo '<p style="color: white;">Username Atau Password Salah!</p>' ?>
      <?php endif; ?>
      <p>&copy; 2023 - Project Ujikom</p>
    </form>

  </div>
</body>

</html>