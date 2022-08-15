<?php
require_once '../baglanti.php';

if(isset($_POST['giris'])){
    $kul_adi=$_POST['usrnm'];
    $sifre=md5($_POST['psw']);
    
    $query=$db->prepare("Select * from admin where kullanici_adi=:kul_adi and sifre=:sifre");
    $admin=$query->execute(array("kul_adi"=>$kul_adi,"sifre"=>$sifre));
     if($query->fetch()){
         session_start();
          $_SESSION['admin_login']=1;
         header("Location: index.php");
         exit;
     }
    header("Location: giris.php?error=1");
         exit;
    

}

?>