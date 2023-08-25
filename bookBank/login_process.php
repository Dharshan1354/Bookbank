<?php
session_start();

$username = "";
$password = "";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bookbank');
// REGISTER USER
if (isset($_POST['username'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($username)) { array_push($errors, "username is required"); }
  if (empty($password1)) { array_push($errors, "password is required"); }

  $user_check_query = "SELECT * FROM users WHERE username='$username' && password='$password' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: dashboard.php');
    }
    else
    {
        header('location: sign-in.php');
    }
  }
?>
