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
          <h3>Enter your Book details</h3>
        </div>
        <div class="card-body">
        <form method="post" action="donatedb.php">
            <div class="input-group form-group">
              <input type="text" name="bookname" class="form-control" placeholder="Book Name">
            </div>
            <div class="input-group form-group">
              <input type="text" name="authorname" class="form-control" placeholder="Author Name">
            </div>
            <div class="input-group form-group">
              <input type="text" name="publisher" class="form-control" placeholder="Publisher">
            </div>
            <div class="input-group form-group">
              <input type="text" name="booklanguage" class="form-control" placeholder="Book Language">
            </div>
            <div class="input-group form-group">
              <input type="text" name="bookedition" class="form-control" placeholder="Book Edition">
            </div>
            <div class="input-group form-group">
              <input type="text" name="numberofpages" class="form-control" placeholder="No. Of Pages">
            </div>
            <div class="input-group form-group">
              <input type="text" name="description" class="form-control" placeholder="Description">
            </div>
            <div class="input-group form-group">
              <input type="date" name="dob" class="form-control" placeholder="Bought On">
            </div>
            <div class="input-group form-group">
              <input type="text" name="bookcondition" class="form-control" placeholder="Book Condition">
            </div>
            <div class="input-group form-group">
              <input type="text" name="bookusedfor" class="form-control" placeholder="Book Used for">
            </div>
            <div class="input-group form-group">
              <input type="text" name="booksavailable" class="form-control" placeholder="No. of Books Available">
            </div>
            <div class="input-group form-group">
              <input type="file" class="form-control">
            </div>
            <div class="form-group">
              <a href="dashboard.php"><button class="form-btn">Donate</button></a>
            </div>
          </form>
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
