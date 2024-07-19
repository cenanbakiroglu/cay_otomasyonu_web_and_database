
<div class="icerikorta"><h1>SİZİN İÇİN SEÇTİKLERİMİZ</h1></div>
<?php
include("baglanti.php");

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
$sql="SELECT count(id) FROM urunler where stok>0";
$sorgu=mysqli_query($bagno,$sql);
while($toplamurun=mysqli_fetch_array($sorgu))
{
    $adet=$toplamurun[0];
}

for($i=1;$i<=8;$i++)
{
    $id=rand(1,$adet);
    $sql="SELECT * FROM urunler WHERE id=$id";
    $sorgu=mysqli_query($bagno,$sql);
    while($urunler=mysqli_fetch_array($sorgu))
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
?>