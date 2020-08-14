<?php
require '../includes/db/init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $password_confirmation = isset($_POST['password_confirmation']) ? $_POST['password_confirmation'] : '';

  $name = clean($name);
  $email = clean($email);
  $password = clean($password);
  $password_confirmation = clean($password_confirmation);

  try {
    global $connect;
    $q = "INSERT INTO users(name, email, password, created_at) VALUES ('$name','$email','$password', now())";
    if ($connect->exec($q)) {
      echo "cool";
    } else {
      echo 'nah!';
    }
  } catch (Exception $e) {
    echo $q . '<br>' . $e->getMessage();
  }
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Infant Jesus School of Bukidnon Inc. | SignUp</title>

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="text-center">

<form class="form-signin text-left" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

  <h1 class="h3 mb-3 font-weight-normal">New Account</h1>

  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" id="inputName" value="John Paul L. Gabule" class="form-control" name="name"
           placeholder="Enter name" required autofocus>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input type="email" id="inputEmail" class="form-control" value="johnpaulgabule@gmail.com" name="email"
           placeholder="Enter email address" required>
  </div>

  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" id="inputPassword" class="form-control" name="password" value="password"
           placeholder="Enter Password" required>
  </div>

  <div class="form-group">
    <label for="inputPasswordConfirmed">Password</label>
    <input type="password" id="inputPasswordConfirmed" class="form-control" value="password"
           name="password_confirmation" placeholder="Confirm Password" required>
  </div>

  <div class="form-group">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
  </div>
</form>
</body>
</html>
