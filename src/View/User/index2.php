<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./../vendor/font/css/all.min.css">
  <link rel="stylesheet" href="../../../assets/css/style1.css" />
  <title>Connexion</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Réinitialisation</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Addresse Email" name="email" value="" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mot de passe" name="password" value="" required />
          </div>

          <button type="submit" name="signin" class="btn solid">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>