<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="style.css?v1.5"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Çayım</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg" style="background-color:#556B2F ;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link " aria-current="page" href="?cay=anasayfa" style="color:#FFFACD;">Anasayfa</a>     
        <a class="nav-link "  href="?cay=hakkimizda" style="color:#FFFACD;">Hakkımızda</a>     
        <a class="nav-link "  href="?cay=caylar" style="color:#FFFACD;">Ürünler</a> 
        <?php 
          session_start();
          if(isset($_SESSION["id"]))
          {
            ?>
            <a class="nav-link"  href="?cay=sepet" style="color:#FFFACD;">Sepet</a>
            <?php
          }
          if(isset($_SESSION["admin_id"]))
          {
            ?>
            <a class="nav-link"  href="?cay=siparisler" style="color:#FFFACD;">Siparişler</a>
            <a class="nav-link"  href="?cay=ekle" style="color:#FFFACD;">Ürün Ekle</a>
            <?php
          }
          ?>
        <div class="sag"> 
          <?php 
          if(isset($_SESSION["id"]))
          {
            ?>
            <a class="nav-link"  href="?cay=profil" style="color:#FFFACD;">Profil</a>
            <?php
          }
          
          if(isset($_SESSION["id"]) || isset($_SESSION["admin_id"]))
          {
            ?>

            
              <a class="nav-link"  href="?cay=cikis" style="color:#FFFACD;">Çıkış</a>
            <?php
          }
          else
          {
            ?>
            <a class="nav-link"  href="?cay=uyelik" style="color:#FFFACD;">Üyelik Oluştur</a>     
            <a class="nav-link"  href="?cay=uye_giris" style="color:#FFFACD;">Üye Girişi</a>

            <?php
          }
        ?>
        </div>
       
      </div>
    </div>
  </div>
</nav>
</div>
    
</header>
<div class="container">
		<div class="row">
     <?php 
     
     include("icindekiler.php");
     ?>
</div>
</div>

    </body>
</html>