<?php
include("baglanti.php");
$sql="SELECT urunler.ad,urunler.marka,urunler.fiyat,sepet.adet,sepet.id FROM urunler,sepet WHERE sepet.urun_id=urunler.id AND sepet.musteri_id=$_SESSION[id]";
$sorgu=mysqli_query($bagno,$sql);
?>
<table class="icerikorta" cellpadding="10" >
    <tr>
        <th>Ürün Adı</th><th>Marka</th><th>Adet</th><th>Birim Fiyat</th><th>&nbsp;</th>
    </tr>
    <?php
    $toplam=0;
    while($sepet=mysqli_fetch_array($sorgu))
    {
        echo "
        <tr style=\"text-align:center;\">
        <td>$sepet[0]</td><td>$sepet[1]</td><td>$sepet[3]</td><td>$sepet[2]</td><td><a href='index.php?cay=sil&id=$sepet[4]'><button style=\"background-color:#556B2F; color:#FFFACD;\">Sepetten Çıkar</button></a></td>
        </tr>
        ";
        $toplam+=($sepet[3]*$sepet[2]);
    }
    ?>
    <tr>
        <th colspan="3" style="text-align:center;">Toplam</th><th colspan="2"><?php echo $toplam ;?></th>
    </tr>
    <tr style="text-align:center;"><th colspan="5"><a href="index.php?cay=onay&id=<?php echo $_SESSION["id"];?>">Sepeti Onayla</a></th></tr>
</table>