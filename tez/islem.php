<?php
require_once 'baglanti.php';
session_save_path($_SERVER['HOME'].'/cgi-bin/tmp');

session_start();
if(isset($_POST['insert'])){
$kaydet = $db->prepare("INSERT into iletisim SET
        adsoyad=:adsoyad,
        telefon=:telefon,
        email=:email,
        konu=:konu,
        mesaj=:mesaj");

$insert = $kaydet->execute(array(
        'adsoyad' => $_POST['adsoyad'], 
        'telefon' => $_POST['telefon'],
        'email' => $_POST['email'],
        'konu' => $_POST['konu'],
        'mesaj' => $_POST['mesaj'],));

    $referer = $_SERVER['HTTP_REFERER'];
    
    $index = strpos($referer,"?");
        
    if($index>0){
        
     $referer =substr($referer,0,$index);
        
    }
    

if($insert){
        header("Location: ".$referer."?result=1");

}else{
        header("Location: ".$referer."?result=0");
}
    exit();
}


header("Location: index.php");
exit();



/*
if(isset($_POST["isim"],$_POST["tel"],$_POST["mail"],$_POST["konu"],$_POST["mesaj"]){
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    
    $ekle="INSERT INTO iletisim(adsoyad,telefon,email,konu,mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
    if($db->query($ekle===TRUE)){
        echo "<script>alert("Mesajınız gönderildi")</script>";
    }
}
   */
?>