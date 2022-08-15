<?php
require_once '../baglanti.php';

if(isset($_POST['insert'])){
    
 
$belirtiEkle= $db->prepare("INSERT into belirtiler(
        belirtiAdi) VALUES(?)");
    
    
$insert = $belirtiEkle->execute(array(
        $_POST['belirtiAdi']));

    


        
        }