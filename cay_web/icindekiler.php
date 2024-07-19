<?php
@$cay=$_GET["cay"];

switch($cay)
{
    case "anasayfa": include("anasayfa.php"); break;
    case "uyelik" : include("uyelik.php"); break;
    case "uye_giris": include("uyegirisi.php"); break;
    case "admin_giris": include("admingirisi.php"); break;
    case "hakkimizda": include ("hakkimizda.php"); break;
    case "caylar": include ("urunler.php"); break;
    case "siparisler": include("siparisler.php"); break;
    case "sepet": include("sepet.php"); break;
    case "cikis": include("cikis.php"); break;
    case "onay": include("onay.php"); break;
    case "sil": include("sil.php"); break;
    case "profil": include("profil.php"); break;
    case "ekle": include("urunekle.php"); break;
    case "teslim": include("teslim.php"); break;
    case "iptal": include("iptal.php"); break;
    default: include("anasayfa.php"); break;
}
?>