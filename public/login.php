<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location: admin');
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
  <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="text-center">

<form class="form-signin text-left" id="formLogin">

  <h1 class="h3 mb-3 font-weight-normal">Login</h1>

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
    <button class="btn btn-lg btn-primary btn-block" type="submit" id="login">Login</button>
  </div>

  <div class="alert alert-danger alert-dismissible small fade show text-center d-none" id="error" role="alert">
    <strong>Oops!</strong> Please check your credentials, try again!.
  </div>

</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('#formLogin').on('submit', function (e) {
      e.preventDefault();
      const email = $("#inputEmail").val();
      const password = $("#inputPassword").val();
      let login = $("#login");
      $.ajax({
        type: 'POST',
        url: '../includes/functions/authenticate.php',
        data: {
          email: email,
          password: password
        },
        beforeSend: () => {
          login.html("Please wait...")
          login.attr("disabled", true)
          $("#error").addClass('d-none')
        },
        success: data => {
          if (parseInt(data) === 1) {
            window.location.href = 'admin'
          } else {
            login.html("Login")
            login.attr("disabled", false)
            $("#error").removeClass('d-none')
          }
        },
        error: err => {
          console.error(err)
          login.html("Login")
          login.attr("disabled", false)
        }
      })
    });
  });
</script>
</body>
</html>
