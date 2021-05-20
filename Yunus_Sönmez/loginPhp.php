<?php
include("ayar.php");
session_start();
ob_start();
$name=$_POST["kullaniciAdi"];
if(($_POST["kullaniciAdi"]==$user) and ($_POST["kullaniciSifre"]==$pass)){
$_SESSION["loginPhp"] = "true";
$_SESSION["kullaniciAdi"] = $user;
$_SESSION["kullaniciSifre"] = $pass;
error_reporting(0);
include("ayar.php");
session_start();
ob_start();
if(!isset($_SESSION["loginPhp"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}
else{
echo "Hoş Geldiniz ". $name ."<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=index.html");
}
ob_end_flush();
}else{
echo "Kullancı Adı veya Şifre Yanlış.<br>";
echo "Login sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=login.html");
}
ob_end_flush();
?>