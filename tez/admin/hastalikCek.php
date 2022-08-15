<?php
require_once '../baglanti.php';

if(isset($_POST['insert'])){
    
 
$hastalikEkle = $db->prepare("INSERT into hastaliklar(
        hastalikadi,
        hastaliktanim,
        poliklinik_id) VALUES(?,?,?)");
    
$insert = $hastalikEkle->execute(array(
        $_POST['hastalikadi'], 
         $_POST['hastaliktanim'],
         $_POST['poliklinik']));

    

 header("Location: hastaliklarListele.php");

    exit();
        
        }
