<?php
namespace Src\View\User;

require_once dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Controller\AuthController;
use Core\FlashMessages\Flash;

(new AuthController())->signup();

require_once dirname(__DIR__) . DS . 'Elements' . DS . 'auth-header.php';

/**
 * @var string $var
 */
?>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="" method="POST" class="sign-in-form">
               
                <h2 class="title">Connectez Vous!</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder=" Email" name="email1" value="" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mot de passe" name="pwd1" value="" required />
                </div>
                
                 <button type="submit" name="signin" class="btn solid"><a href="">Connexion</a></button>
                <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forgot-password.php" style="color: #4590ef;">Mot de passe oublié?</a></p>
            </form>  
            <form action="" class="sign-up-form" method="POST">
                <h2 class="title">Inscriver Vous!</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nom" name="name" value="" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder=" Email" name="email" value="" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mot de passe" name="pwd" value="" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirmation Mot de passe" name="cpwd" value="" required />
                </div>
                <button type="submit" class="btn btn-info" name="signup">S'inscrire</button>
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

<?php require_once dirname(__DIR__) . DS . 'Elements' . DS . 'auth-footer.php'; ?>