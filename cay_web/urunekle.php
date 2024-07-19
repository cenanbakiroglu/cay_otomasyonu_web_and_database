<?php
include("baglanti.php");
if(isset($_POST["ekle"]))
{
$sql="INSERT INTO urunler VALUES(null,'$_POST[ad]',$_POST[stok],'$_POST[marka]',$_POST[fiyat])";
$sorgu=mysqli_query($bagno,$sql);
if($sorgu)
{
echo "<div class=\"icerikorta\"><h4>ÜRÜN KAYDI BAŞARILI</h4></div>";
}
}
?>

<table class="icerikorta" cellpadding="15" style="margin-top: 4%;">
<tr><th colspan="2" style="text-align: center;">ÜRÜN KAYIT FORMU</th></tr>
<form method="post" action="">
<tr><th>MARKA</th>
<td><select name="marka" size="" >
<option value="DOĞUŞ ÇAY">DOĞUŞ ÇAY</option>
<option value="LİPTON">LİPTON</option>
<option value="ÇAYKUR">ÇAYKUR</option>
</select></td></tr>
<tr>
<th>ADI</th><td><input type="text" name="ad" required></td>
</tr>
<tr>
<th>STOK</th><td><input type="text" name="stok" required></td>
</tr>
<tr>
<th>FİYAT</th><td><input type="text" name="fiyat" required></td>
</tr>
<tr>
    <th colspan="2"><input type="submit" name="ekle" value="EKLE" style="display: block; margin: 0 auto; background-color:#556B2F; color:#FFFACD; border-radius: 5px;"></th>
</tr>
</form>
</table>