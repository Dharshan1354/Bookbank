<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Site Metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="Raviprasath, Dharshan Kumar">
  <link rel="shortcut icon" href="images/logo.png" type="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <title>bookBank - Donate or Get Used books for Free</title>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
         var check = function() {
  if (document.getElementById('password1').value ==
    document.getElementById('password2').value) {
    document.getElementById('message').style.color = 'White';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'White';
    document.getElementById('message').innerHTML = 'Not matching';
  }
  }
  </script>

</head>

<body>
  <div class="logo">
    <a href="index.php"><img width="200" src="images/logo.png" alt="#"></a>
  </div>
  <!-- Login section -->
  <div class="login-section">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Hey There! Register Here </h3>
        </div>
        <div class="card-body">
        <form method="post" action="sign-up.php">
  	    <?php include('errors.php'); ?>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
              </div>
              <input type="text" name="firstname" class="form-control" placeholder="firstname" required>
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
              </div>
              <input type="text" name="lastname" class="form-control" placeholder="lastname" required>
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
              </div>
              <input type="email" name="email" class="form-control" placeholder="email">
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-phone-fill"></i></span>
              </div>
              <input type="tel" name="mobilenumber" class="form-control" placeholder="mobilenumber">
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
              </div>
              <input type="text" name="aadharnumber" class="form-control" placeholder="aadharnumber">
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
              </div>
              <input type="text" name="address" class="form-control" placeholder="address">
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
              </div>
              <input type="text" name="role" class="form-control" placeholder="role">
            </div>

            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-at"></i></span>
              </div>
              <input type="text" name="username" class="form-control" placeholder="username">
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-key"></i></span>
              </div>
              <input type="password" name="password1" id="password1" class="form-control" placeholder="Enter password" onkeyup='check();'>
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-key"></i></span>
              </div>
              <input type="password" name="password2" id="password2"class="form-control" placeholder="Reenter password" onkeyup='check();'>
            </div>
            <label><span id='message'></span></label>
            <div class="form-group">
              <a href="dashboard.php"><button type="submit" class="form-btn"  name="register">Register</button></a>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="">
            Already have an account? <a href="sign-in.php"> Sign In</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- En of Login section -->

  


  <div class="copywrite">
    <p class="mx-auto">© 2022 bookBank | All Rights Reserved.
    </p>
  </div>


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>
