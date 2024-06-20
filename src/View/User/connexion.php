<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./../vendor/font/css/all.min.css">
  <link rel="stylesheet" href="../../../assets/css/style1.css" />
  <link rel="stylesheet" href="../../../assets/js/app.js">
  
  <title>Connexion</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Connectez Vous!</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Addresse Email" name="email" value="" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mot de passe" name="password" value="" required />
          </div>
          <!-- <input /> -->
          <button type="submit" name="signin" class="btn solid"><a href="doc.php">Connexion</a></button>
          <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forgot-password.php" style="color: #4590ef;">Mot de passe oublié?</a></p>
        </form>
        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Inscriver Vous!</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nom" name="name" value="" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Addresse Email" name="email" value="" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mot de passe" name="password" value="" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirmation Mot de passe" name="cpassword" value="" required />
          </div>
          <button type="submit" class="btn btn-info" name="inscrire">Inscription</button>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Vous êtes nouveau?</h3>
          <p>
            Creer rapidement votre compte pour rejoindre la vision de l'informatique
            à l'IFPLI
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Inscription
          </button>
        </div>
        <img src="../../../assets/img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Avez-vous déjà un compte?</h3>
          <p>
            Connecter vous si vous avez deja un compte
          
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Connexion
          </button>
        </div>
        <img src="../../../assets/img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="../../../assets/js/app.js"></script>
</body>

</html>