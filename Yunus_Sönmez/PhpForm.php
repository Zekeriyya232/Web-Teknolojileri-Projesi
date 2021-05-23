<?php
session_start();
ob_start();
$isim=$_POST["isim"];
$soyisim=$_POST["soyisim"];
$email=$_POST["email"];
$tel=$_POST["telefon"];
$cinsiyet=$_POST["cinsiyet"];
$sehir=$_POST["iller"];
$ileti=$_POST["ileti"];

echo "<p align='center'><font color=black size='5pt'> Bilgileriniz alındı. </font></p><br>";
echo "<p align='center'><font color=black size='5pt'> $isim </font></p> ";
echo "<p align='center'><font color=black size='5pt'> $soyisim </font></p>";
echo "<p align='center'><font color=black size='5pt'> $email </font></p>";
echo "<p align='center'><font color=black size='5pt'> $tel </font></p>";
echo "<p align='center'><font color=black size='5pt'> $cinsiyet </font></p>";
echo "<p align='center'><font color=black size='5pt'> $sehir </font></p>";
echo "<p align='center'><font color=black size='5pt'> $ileti </font></p> <br>";
echo "<p align='center'><font color=black size='5pt'> Giriş sayfasına yönlendiriliyorsunuz. </font></p> <br>";
header("Refresh: 2; url=index.html");

ob_end_flush();

?>