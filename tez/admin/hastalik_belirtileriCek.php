<?php
require_once '../baglanti.php';

if(isset($_POST['insert'])){
    
    $hastalik = $_POST['hastalik'];
    $belirtiler = $_POST['belirtiler'];
    
    if($hastalik and $belirtiler){
        
        foreach($belirtiler as $belirti){
            
             $hastalik_belirtileriEkle = $db->prepare("INSERT into hastalik_belirtileri(
        hastalikId,belirtiId) VALUES(?,?)");

$insert = $hastalik_belirtileriEkle->execute(array(
        $hastalik, 
        $belirti));
          
        }
        
         header("Location: index.php");
        exit;
       

    
    }
   
    
 header("Location: hastalik_belirtileriEkle.php");
        exit;
    
    

}