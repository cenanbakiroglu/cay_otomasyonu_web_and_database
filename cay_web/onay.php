<?php
include("baglanti.php");
$sql="SELECT * FROM sepet WHERE musteri_id=$_SESSION[id]";
$sorgu=mysqli_query($bagno,$sql);
while($urunler=mysqli_fetch_array($sorgu))
{
    $guncelleme="UPDATE urunler SET stok=stok-$urunler[2] where id=$urunler[1]";
    $guncellemesorgu=mysqli_query($bagno,$guncelleme);
    $sipariskayit="INSERT INTO siparisler VALUES(null,$urunler[1],$urunler[2],$urunler[3],'aktif')";
    $siparissorgu=mysqli_query($bagno,$sipariskayit);
}

$sql="DELETE FROM sepet WHERE musteri_id=$_SESSION[id]";
$sorgu=mysqli_query($bagno,$sql);

header("Location:index.php?cay=profil");
?>