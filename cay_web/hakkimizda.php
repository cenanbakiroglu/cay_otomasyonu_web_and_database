<?php
include("baglanti.php");
if(isset($_POST["guncelle"]))
{
    $sql="UPDATE icerik SET hakkimizda='$_POST[hakkimizda]',iletisim='$_POST[iletisim]' where id=1";
    $sorgu=mysqli_query($bagno,$sql);
}
$sql="SELECT * FROM icerik WHERE id=1";
$sorgu=mysqli_query($bagno,$sql);
$icerik=mysqli_fetch_array($sorgu);
$hakkimizda=$icerik[1];
$iletisim=$icerik[2];

if(empty($_SESSION["admin_id"]))
{
echo " <table>
<tr> <td>
<p style='white-space: pre-line;'> <h5>$hakkimizda </h5></p></td></tr>";

echo "<tr><td><p> <h4> Detaylı bilgi için $iletisim nolu telefonu arayınız</h4></p></td></tr></table>";
}
if(isset($_SESSION["admin_id"]))
{
?>
<div style="margin-top: 5%;">
<form method="post" action="">
<textarea name="hakkimizda" cols="170" rows="10" required><?php echo $hakkimizda; ?></textarea>
<input type="text" name="iletisim"  value="<?php echo $iletisim; ?>" required><br><br>
<input name="guncelle" type="submit" value="Güncelle">
</form>
</div>
<?php
}
?>