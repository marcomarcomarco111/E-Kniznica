<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<div class="login-form-container">

  <div id="close-login-btn" class="fas fa-times"></div>

  <form action="registracialogin/prihlasenie.php" method="POST">
    <h3>Prihlásenie</h3>
    <span>Používateľský E-mail:</span>
    <input type="email" name="email" class="box" placeholder="zadajte e-mail" required>

    <span>Heslo</span>
    <input type="password" name="heslo" class="box" placeholder="zadajte heslo" required>
    <div class="checkbox">
      <input type="checkbox" name="" id="remember-me">
      <label for="remember-me"> Zapamätať si ma</label>
    </div>
    <input type="submit" value="Prihlásiť" class="btn">
    <p>Nemáte účet? <a href="registracia.php">Vytvorte si!</a></p>
  </form>

</div>
</body>
</html>