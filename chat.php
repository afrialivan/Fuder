<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/chat.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/_variables.scss">
  <title>Fuder | Catering</title>
</head>

<body id="body-pd">
  <div class="l-navbar d-none d-xl-block">
    <nav class="nav">
      <div class="hover-foto">
        <div class="hov"></div>
        <div class="fotoProfil rounded-circle mt-5 mb-2">
          <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80" alt="" class="foto">
        </div>
      </div>
      <h2 class="nama text-light text-center fw-bold mb-4">Selamat siang, Afrial Ivan Pratama</h2>
      <ul class="navbar-nav">
        <img src="img/hover.png" alt="" class="hover" id="hov">
        <li class="nav-item" id="catering" onmouseover="hover1()" onmouseout="out()">
          <a href="catering.php" class="nav-link katering"><img src="img/catering.png" alt="" class="icon"> Catering</a>
        </li>
        <li class="nav-item" id="menu" onmouseover="hover2()" onmouseout="out()">
          <a href="menu.php" class="nav-link"><img src="img/menu.png" alt="" class="icon"> Menu</a>
        </li>
        <li class="nav-item" id="chat" onmouseover="hover3()" onmouseout="out()">
          <a href="chat.php" class="nav-link chat"><img src="img/chat.png" alt="" class="icon"> Chat</a>
        </li>
        <li class="nav-item" id="pesanan" onmouseover="hover6()" onmouseout="out()">
          <a href="" class="nav-link pesanan"><img src="img/pesanan.png" alt="" class="icon"> Pesanan</a>
        </li>
      </ul>

      <div class="copyright">
        <p class="text-center text-light fw-bold">Copyright</p>
        <p class="text-center text-light fw-bold">PT. Fuder Makanan Indonesia</p>
      </div>
    </nav>
  </div>

  <h1 id="jud" class="text-center d-none d-xl-block fw-bold judul">Pesan Pribadi</h1>
  <div id class="judull d-xl-none d-block text-center fw-bold">Pesan Pribadi</div>

  <div class="row">
    <div class="col-lg-2">
      <div class="chats bg-dark">oii</div>
    </div>
    <div class="col-lg-10">

    </div>
  </div>

  <div class="navigasi d-flex d-xl-none">
    <a href="catering.php" class="navi">
      <img src="img/catering.png" alt="" class="navigasii">
      Catering
    </a>
    <a href="menu.php" class="navi">
      <img src="img/menu.png" alt="" class="navigasii">
      Menu
    </a>
    <a href="chat.php" class="navi">
      <img src="img/chat.png" alt="" class="navigasii">
      Chat
    </a>
    <a href="" class="navi">
      <img src="img/profil.png" alt="" class="navigasii">
      Profil
    </a>
  </div>
  <!--===== MAIN JS =====-->
  <script src="js/catering.js"></script>
</body>

</html>