<?php
include("baglanti.php");
if(isset($_POST["guncelle"]))
{
    $sql="UPDATE uyeler SET ad='$_POST[ad]',soyad='$_POST[soyad]',kullanici_adi='$_POST[kullanici_adi]',sifre='$_POST[sifre]',adres='$_POST[adres]',telefon='$_POST[tel]' where id=$_SESSION[id]";
    $sorgu=mysqli_query($bagno,$sql);
    
    
    $_SESSION["ad"]=$_POST["ad"];
    $_SESSION["soyad"]=$_POST["soyad"];
    $_SESSION["kullanici_adi"]=$_POST["kullanici_adi"];
    $_SESSION["sifre"]=$_POST["sifre"];
    $_SESSION["adres"]=$_POST["adres"];
}
?>
<div class="iceirkorta" >
    <form method="post" action="">
    <table cellpadding="10" style="margin: 0 auto;"> 
        <tr>
            <th>ADINIZ</th><th><input type="text" name="ad"  value="<?php  echo $_SESSION["ad"];?>"></th>
        </tr>
        <tr>
            <th>SOYADINIZ</th><th><input type="text" name="soyad" required value="<?php  echo $_SESSION["soyad"];?>"></th>
        </tr>
        <tr>
            <th>KULLANICI ADI</th><th><input type="text" name="kullanici_adi" required value="<?php  echo $_SESSION["kullanici_adi"];?>"> </th>
        </tr>
        <tr>
            <th>ŞİFRE</th><th><input type="password" name="sifre" required value="<?php  echo $_SESSION["sifre"];?>"></th>
        </tr>
        <tr>
            <th>ADRES</th><th><input type="text" name="adres" required value="<?php  echo $_SESSION["adres"];?>"></th>
        </tr>
        <tr>
            <th>ADRES</th><th><input type="text" name="tel" required value="<?php  echo $_SESSION["tel"];?>"></th>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" value="Güncelle" name="guncelle" style="display: block; margin: 0 auto; background-color:#FFFACD; color:#556B2F; border-radius: 5px;"></th>
        </tr>
    </table>
    </form>
</div>

<?php
$kontroll=0;
$sql="SELECT count(id) FROM siparisler WHERE durum='aktif'";
$sorgu=mysqli_query($bagno,$sql);
while($kontrol=mysqli_fetch_array($sorgu))
{
    $kontroll=$kontrol[0];
}
if($kontroll>0)
{
    $sql="SELECT urunler.marka,urunler.ad,siparisler.adet FROM urunler,siparisler WHERE urunler.id=siparisler.urun_id AND siparisler.musteri_id=$_SESSION[id] AND durum='aktif'";
    $sorgu=mysqli_query($bagno,$sql);
?>
<div   style="margin-top: 5%;">
    <table cellpadding="8" class="icerikorta">
        <tr><th colspan="2">HAZIRLANAN SİPARİŞLERİNİZ</th></tr>
        <tr class="icerikorta"><th>Ürün</th><th>Adet</th></tr>
        <?php
        while($urunler=mysqli_fetch_array($sorgu))
        {
            echo "
            <tr class=\"icerikorta\">

            <td>$urunler[0]/$urunler[1]</td><td>$urunler[2]</td>
            </tr>
            ";
        }
        ?>
    </table>
</div>
<?php
}   
?>