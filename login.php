<?php

$dogruKullanici = "b@s";
$dogruSifre = "b";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // 2. Form verilerini al
    if (isset($_POST['username'])) 
    {
    $kullaniciAdi = $_POST['username'];
    } 
    else 
    {
    $kullaniciAdi = '';
    }

    if (isset($_POST['password'])) 
    {
    $sifre = $_POST['password'];
    } 
    else 
    {
    $sifre = '';
    }

    // 6. Kullanıcı adı ve şifreyi karşılaştır
    if ($kullaniciAdi === $dogruKullanici && $sifre === $dogruSifre) {
        // Başarılı giriş
        echo "Hoşgeldiniz " . htmlspecialchars($kullaniciAdi);
        echo " Şifreniz ".htmlspecialchars($sifre);
    } else {
        // Başarısızsa tekrar login sayfasına yönlendir
        header("Location: login.html");
        exit();
    }
}
?>