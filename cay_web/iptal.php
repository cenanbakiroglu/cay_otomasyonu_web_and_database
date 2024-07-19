<?php
$sql="UPDATE siparisler SET durum='iptal' WHERE musteri_id=$_GET[id] AND durum='aktif'";
$sorgu=mysqli_query($bagno,$sql);
header("Location:index.php?cay=siparisler");
?>