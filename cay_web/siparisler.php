<?php
include("baglanti.php");
$sql="SELECT uyeler.ad, uyeler.soyad, uyeler.adres,uyeler.telefon, GROUP_CONCAT(CONCAT(urunler.marka, ' ', urunler.ad, '(', siparisler.adet, ' adet)') SEPARATOR ',\n ') AS siparisler,uyeler.id
FROM uyeler
JOIN siparisler ON uyeler.id = siparisler.musteri_id
JOIN urunler ON urunler.id = siparisler.urun_id
WHERE siparisler.durum = 'aktif'
GROUP BY uyeler.ad, uyeler.soyad, uyeler.adres";
$sorgu=mysqli_query($bagno,$sql);
?>
<table cellpadding="10" style="border-collapse: collapse; border: 1px solid black; margin-top:5%;">
    <tr>
        <th style="border: 1px solid black; text-align: center;">Müşteri Adı</th>
        <th style="border: 1px solid black; text-align: center;">Müşteri Soyadı</th>
        <th style="border: 1px solid black; text-align: center;">Adres</th>
        <th style="border: 1px solid black; text-align: center;">Telefon</th>
        <th style="border: 1px solid black; text-align: center;">Ürünler</th>
        <th colspan="2" style="border: 1px solid black; text-align: center;">İŞLEM</th>
    </tr>
    <?php
    while($siparisler=mysqli_fetch_array($sorgu))
    {
        echo "
        <tr>
        <td style=\"border: 1px solid black; text-align: center;\">$siparisler[0]</td>
        <td style=\"border: 1px solid black; text-align: center;\">$siparisler[1]</td>
        <td style=\"border: 1px solid black; text-align: center;\">$siparisler[2]</td>
        <td style=\"border: 1px solid black; text-align: center;\">$siparisler[3]</td>
        <td style=\"border: 1px solid black; text-align: center;\">".nl2br($siparisler[4])."</td>
        <td style=\"border: 1px solid black; text-align: center;\"><a href=\"index.php?cay=teslim&id=$siparisler[5]\"><button style=\"background-color:#556B2F; color:#FFFACD;\">Teslim Et</button></a></td>
        <td style=\"border: 1px solid black; text-align: center;\"><a href=\"index.php?cay=iptal&id=$siparisler[5]\"><button style=\"background-color:#556B2F; color:#FFFACD;\">İptal Et</button></a></td>
        </tr>
        ";
    }
    ?>
</table>
