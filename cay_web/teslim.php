<?php
include("baglanti.php");
$sql="UPDATE siparisler SET durum='teslim' WHERE musteri_id=$_GET[id] AND durum='aktif'";
$sorgu=mysqli_query($bagno,$sql);
header("Location:index.php?cay=siparisler");
?>