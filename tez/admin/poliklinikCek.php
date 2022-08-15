<?php
require_once '../baglanti.php';

if(isset($_POST['insert'])){
    $fileName =$_FILES['poliklinikresim']['name'];
    $file_tmp =$_FILES['poliklinikresim']['tmp_name'];
    $uploadFile = "C:/AppServ/www/tez/uploads/".$fileName;


    if(!file_exists("C:/AppServ/www/tez/uploads/")){

        mkdir("C:/AppServ/www/tez/uploads/",0777);
    }

    move_uploaded_file($file_tmp, $uploadFile);


    
 
$poliklinikEkle = $db->prepare("INSERT into poliklinik(
        poliklinikadi,
        poliklinikaciklama,
        poliklinikresim) VALUES(?,?,?)");
    
$insert = $poliklinikEkle->execute(array(
        $_POST['poliklinikadi'], 
         $_POST['poliklinikaciklama'],
        $fileName));

    
header("Location: poliklinikListele.php");

    exit();

        }
