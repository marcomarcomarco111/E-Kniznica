
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookly.sk</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

<header class="header">
  <div class="header-1">

    <a href="index.php" class="logo"> <i class="fas fa-book"></i> Bookly.sk </a>

    <form action="" class="search-form">
      <input type="search" name="" placeholder="vyhľadajte..." id="search-box">
      <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
      <div id="search-btn" class="fas fa-search"></div>

        <a href="oblubene/oblubene.php" class="fas fa-heart" title="Obľúbené knihy"></a>
      <a href="#" class="fas fa-shopping-cart"></a>
        <div id="login-btn" class="fas fa-user"></div>

        <?php if (isset($_SESSION['meno'])): ?>
            <span style="font-size: 2em; font-weight: bold;">
      Vitaj,  <?= htmlspecialchars($_SESSION['meno']) ?>!
    </span>
            <a href="registracialogin/logout.php" style="font-size: 0.9em; margin-left: 10px;">
                <i class="fas fa-sign-out-alt"></i> Odhlásiť sa
            </a>

        <?php endif; ?>

    </div>

  </div>

  <div class="header-2">
    <nav class="navbar">
      <a href="#home">Domov</a>
      <a href="#featured">Vystavené</a>
      <a href="#arrivals">Nové</a>
      <a href="#reviews">Recenzie</a>
      <a href="#blogs">Blogy</a>
    </nav>
  </div>

</header>
</body>
</html>