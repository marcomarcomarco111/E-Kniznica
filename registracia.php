<?php
require_once 'config.php';
require_once __DIR__ . '/parts/header.php';
require_once __DIR__ . '/parts/login.php';
?>
<!DOCTYPE html>
<html lang="sk">

<head><link rel="stylesheet" href="css/registracia.css"></head>
<body>

<div class="form-wrapper">
  <h2>Vytvoriť účet</h2>
  <form action="registracialogin/registracne_udaje.php" method="POST" class="register-form">

    <div class="form-group">
      <label for="fname" id="prihlasenie_text">Meno</label>
      <input type="text" id="fname" name="meno" class="form-input" required>
    </div>

    <div class="form-group">
      <label for="lname" id="prihlasenie_text">Priezvisko</label>
      <input type="text" id="lname" name="priezvisko" class="form-input" required>
    </div>

    <div class="form-group">
      <label for="email" id="prihlasenie_text">E-mail</label>
      <input type="email" id="email" name="email" class="form-input" required>
    </div>

    <div class="form-group">
      <label for="phone" id="prihlasenie_text">Mobil</label>
      <input type="tel" id="phone" name="mobil" class="form-input" required>
    </div>

    <div class="form-group">
      <label for="password" id="prihlasenie_text">Heslo</label>
      <input type="password" id="password" name="heslo" class="form-input" minlength="5" required>
    </div>

    <button type="submit" class="form-button">Registrovať sa</button>
  </form>
</div>
<script src="js/script.js"></script>
</body>
</html>
