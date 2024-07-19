
<form method="post" action="">
<div style="text-align: center; margin-bottom: 20px;"> <!-- Formun üstünde mesaj için -->
<h1>Admin Girişi</h1><br>
        <?php
        include("baglanti.php");
       if(isset($_POST["giris"]))
       {
           $sql="SELECT * FROM adminler WHERE kullanici_adi='$_POST[kullanici_adi]'";
           $sorgu=mysqli_query($bagno,$sql);
           $kullanici=mysqli_fetch_array($sorgu);
       
           if(isset($kullanici))
           {
               if($kullanici[4]==$_POST["sifre"])
               {
                   $_SESSION["admin_id"]=$kullanici[0];
                   $_SESSION["admin_ad"]=$kullanici[1];
                   $_SESSION["admin_soyad"]=$kullanici[2];
                   $_SESSION["admin_kullanici_adi"]=$kullanici[3];
                   $_SESSION["admin_sifre"]=$kullanici[4];
                   echo "Giriş başarılı";
                   header("refresh:2; url=index.php?cay=siparisler");
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
            <td>Kullanıcı Adınız</td><td><input type="text" name="kullanici_adi" required></td>
        </tr>
        <tr>
            <td>Şifreniz</td><td><input type="password" name="sifre" required></td>
        </tr>
        <tr><td colspan="2"><input type="submit" name="giris" value="Giriş Yap" style=" display: block; margin: 0 auto; background-color:#FFFACD; color:#556B2F; border-radius: 5px;"></td></tr>
    </table>
    </div>
</form> 