
<form method="post" action="">
<div style="text-align: center; margin-bottom: 20px;"> <!-- Formun üstünde mesaj için -->
        <?php
        include("baglanti.php");
       if(isset($_POST["giris"]))
       {
           $sql="SELECT * FROM uyeler WHERE kullanici_adi='$_POST[kullanici_adi]'";
           $sorgu=mysqli_query($bagno,$sql);
           $kullanici=mysqli_fetch_array($sorgu);
       
           if(isset($kullanici))
           {
               if($kullanici[4]==$_POST["sifre"])
               {
                   $_SESSION["id"]=$kullanici[0];
                   $_SESSION["ad"]=$kullanici[1];
                   $_SESSION["soyad"]=$kullanici[2];
                   $_SESSION["kullanici_adi"]=$kullanici[3];
                   $_SESSION["sifre"]=$kullanici[4];
                   $_SESSION["adres"]=$kullanici[5];
                   $_SESSION["tel"]=$kullanici[6];
                   echo "Giriş başarılı";
                   header("refresh:2; url=index.php?cay=anasayfa");
               }
               else
               {
                   echo "<div style=\"text-align: center;\">Şifreniz hatalı</div>";
               }
           }
           else
           {
               echo "<div style=\"text-align: center; margin-bottom: 20px;\">Kullanıcı bulunamadı</div>";
           }
       
           
       }
    
        ?>
    </div>
    <div class="icerikorta">
    <table cellpadding="10">
        <tr>
            <th>Kullanıcı Adınız</th><td><input type="text" name="kullanici_adi" required></td>
        </tr>
        <tr>
            <th>Şifreniz</th><td><input type="password" name="sifre" required></td>
        </tr>
        <tr><th colspan="2"><input type="submit" name="giris" value="Giriş Yap" style=" display: block; margin: 0 auto; background-color:#FFFACD; color:#556B2F; border-radius: 5px;"></th></tr>
        <tr>
            <th colspan="2" style="text-align: center;"><a href="index.php?cay=admin_giris" >Admin Girişi İçin Tıklayınız</a></th>
        </tr>
    </table>
    </div>
</form> 