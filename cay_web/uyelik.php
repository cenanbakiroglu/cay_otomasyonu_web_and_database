<?php
include("baglanti.php");
if(isset($_POST["kayit"]))
{
    $sql="INSERT INTO uyeler VALUES(null,'$_POST[ad]','$_POST[soyad]','$_POST[kullanici_adi]','$_POST[sifre]','$_POST[adres]','$_POST[tel]')";
    $sorgu=mysqli_query($bagno,$sql);
    
}
?>
<br>
<form action="" method="post">
    <div style="text-align: center; margin-bottom: 20px;"> 
        <?php
        if(isset($_POST["kayit"]))
        {
        if($sorgu)
        {
            echo "<div style=\"text-align: center;\">Kayıt başarılı</div>";
            header("refresh:2; url=index.php?cay=uye_giris");
        }
        else
        {
            echo "Bir hata oluştu tekrar deneyiniz";
        }
    }
        ?>
    </div>
    <table cellpadding="10" style="margin: 0 auto;"> 
        <tr>
            <td>ADINIZ</td><td><input type="text" name="ad" required></td>
        </tr>
        <tr>
            <td>SOYADINIZ</td><td><input type="text" name="soyad" required></td>
        </tr>
        <tr>
            <td>KULLANICI ADI</td><td><input type="text" name="kullanici_adi" required></td>
        </tr>
        <tr>
            <td>ŞİFRE</td><td><input type="password" name="sifre" required></td>
        </tr>
        <tr>
            <td>ADRES</td><td><input type="text" name="adres" required></td>
        </tr>
        <tr>
            <td>Telefon</td><td><input type="text" name="tel" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="KAYIT OL" name="kayit" style="display: block; margin: 0 auto; background-color:#FFFACD; color:#556B2F; border-radius: 5px;"></td>
        </tr>
    </table>
</form>
