<?php
include("baglanti.php");
if(isset($_POST["guncelle"]))
{
    $sql = "UPDATE urunler SET ad='" . $_POST['ad'] . "', stok=stok+" . $_POST['adet'] . ", marka='" . $_POST['marka'] . "', fiyat=" . $_POST['fiyat'] . " WHERE id=" . $_POST['id'];
$sorgu = mysqli_query($bagno, $sql);

}
if(isset($_POST["ekle"]))
{
	if(!isset($_SESSION["id"]))
	{
		echo "<h1 style=\"text-align:center;\"><b>LÜTFEN GİRİŞ YAPINIZ</b></h1>";
		header("refresh:3; url=index.php?cay=uye_giris");
	}
	else
	{
		$sql="INSERT INTO sepet VALUES(null,$_POST[id],$_POST[adet],$_SESSION[id])";
		$sorgu=mysqli_query($bagno,$sql);
	}
}
$bul="";
if(isset($_POST["dogus"]))
{
	$bul="WHERE marka=\"DOĞUŞ ÇAY\"";
}
else if(isset($_POST["lipton"]))
{
	$bul="WHERE marka=\"LİPTON\"";
}
else if(isset($_POST["caykur"]))
{
	$bul="WHERE marka=\"ÇAYKUR\"";
}
else 
{
	$bul="";
}
$sql="SELECT * FROM urunler $bul";
$sorgu=mysqli_query($bagno,$sql);
?>
<div class="icerikorta" style="margin-top:20px;">
<table cellpadding="10">
	<form method="post" action="">
	<tr>
	<td><input type="submit" name="dogus" style="background-color:#556B2F; color:#FFFACD; border-radius:10px; width:100px; height:50px;" value="DOĞUŞ ÇAY"></td>
	<td><input type="submit" name="lipton" style="background-color:#556B2F; color:#FFFACD; border-radius:10px; width:100px; height:50px;" value="LİPTON"></td>
	<td><input type="submit" name="caykur" style="background-color:#556B2F; color:#FFFACD; border-radius:10px; width:100px; height:50px;" value="ÇAYKUR"></td>
</tr>
</table>
</div>
<?php

if(empty($_SESSION["admin_id"]))
{
while($urunler=mysqli_fetch_array($sorgu))
{
    if($urunler[2]>0)
    {
    echo "<div class=\"col-3 mt-3\">
    <div class=\"card\" style=\"width: 18rem; color:#FFFACD;\">
        <div class=\"card-body icerikorta\" style=\"background-color:#556B2F; color:#FFFACD;\">
            <table cellpadding=\"3\">
                <tr>
                    <td colspan='2'><h4 class=\"card-title\" style=\"text-align:center;\">$urunler[3]</h4></td>
                </tr>
				<tr>
                    <td colspan='2'><p class=\"card-text\" style=\"text-align:center;\"><b>$urunler[1]</b></p></td>
                </tr>
                <tr>
                    <td colspan='2'><p class=\"card-text\" style=\"text-align:center;\">$urunler[4] ₺</p></td>
                </tr>
                <form action=\"\" method=\"post\">
                    <tr>
                        <td style=\"text-align:center;\">Adet</td><td><input type=\"number\" name=\"adet\" value=\"1\" min=\"1\" max=\"$urunler[2]\" style=\"width: 50px;\"></td>
                    </tr>
					<tr>
                        <td style=\"text-align:center;\">Stok Adeti :</td><td style=\"text-align:center;\">$urunler[2]</td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type=\"hidden\" name=\"id\" value=\"$urunler[0]\"></td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type=\"submit\" name=\"ekle\" value=\"Sepete ekle\" style=\"display: block; margin: 0 auto; background-color:transparent; color:#FFFACD; border-radius: 5px;\"></td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
</div>";
    }
}
}


if (isset($_SESSION["admin_id"])) {
    while ($urunler = mysqli_fetch_array($sorgu)) {
        echo "<div class=\"col-3 mt-3\">
        <div class=\"card\" style=\"width: 18rem; color:#FFFACD;\">
            <div class=\"card-body icerikorta\" style=\"background-color:#556B2F; color:#FFFACD;\">
                <table cellpadding=\"3\">
                <form action=\"\" method=\"post\">  
                    <tr>
                        <td style=\"text-align:center;\">
                            MARKA </td><td style=\"text-align:center;\">  <select name=\"marka\" size=\"\" >
                                <option value=\"DOĞUŞ ÇAY\"" . ($urunler[3] == "DOĞUŞ ÇAY" ? " selected" : "") . ">DOĞUŞ ÇAY</option>
                                <option value=\"LİPTON\"" . ($urunler[3] == "LİPTON" ? " selected" : "") . ">LİPTON</option>
                                <option value=\"ÇAYKUR\"" . ($urunler[3] == "ÇAYKUR" ? " selected" : "") . ">ÇAYKUR</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style=\"text-align:center;\">ADI </td><td style=\"text-align:center;\"><input type='text' name='ad' value='$urunler[1]'> </td>
                    </tr>
                    <tr>
                        <td style=\"text-align:center;\"> FİYAT</td><td style=\"text-align:center;\"> <input type='text' name='fiyat' value='$urunler[4]' style='width:50px;'></td>
                    </tr>
                    
                    <tr>
                        <td style=\"text-align:center;\">Eklenecek Adet</td><td style=\"text-align:center;\"><input type=\"number\" name=\"adet\" min='0' value='0' style=\"width: 50px;\"></td>
                    </tr>
                    <tr>
                        <td style=\"text-align:center;\">Stok Adeti :</td><td style=\"text-align:center;\">$urunler[2]</td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type=\"hidden\" name=\"id\" value=\"$urunler[0]\"></td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type=\"submit\" name=\"guncelle\" value=\"Güncelle\" style=\"display: block; margin: 0 auto; background-color:transparent; color:#FFFACD; border-radius: 5px;\"></td>
                    </tr>
                </form>
                </table>
            </div>
        </div>
        </div>";
    }
}

?>
