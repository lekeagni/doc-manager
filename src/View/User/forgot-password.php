<?php

require_once("../../../database/DBConnection.php");
  

if(isset($_POST["ressetpwd"])) {

    $email=$_POST['email'];
    header('student.php');
}
// session_start();

// error_reporting(0);

// if (isset($_SESSION["user_id"])) {
//   header("Location: welcome.php");
// }

// if (isset($_POST["resetPassword"])) {
//   $email = mysqli_real_escape_string($conn, $_POST["email"]);

//   $check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

//   if (mysqli_num_rows($check_email) > 0) {
//     $data = mysqli_fetch_assoc($check_email);

//   }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../../../assets/css/style1.css">
  <title>Sign in & Sign up Form - Pure Coding</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Reset Password</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Addresse Email" name="email" value="" required />
          </div>
          <input type="submit" value="Envoyer " name="resetpwd" class="btn solid" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Forgot Password ?</h3>
        </div>
        <img src="../../../assets/img/log.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="../../../assets/js/app.js"></script>
</body>

</html>