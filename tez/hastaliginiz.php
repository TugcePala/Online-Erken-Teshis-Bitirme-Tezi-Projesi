<?php

  require_once 'baglanti.php';

$belirtiler=$_POST['belirtiler'];

$paremeter="";


foreach($belirtiler as $belirti){
    $parameter.=$belirti.",";
    
}

$parameter =substr($parameter, 0,-1); 

  $sorgu=$db->prepare("SELECT hastaliklar.hastalikadi,hastaliklar.hastaliktanim,poliklinik.poliklinikadi,COUNT(hastalik_belirtileri.id) AS 'count' FROM `hastaliklar` 
  JOIN hastalik_belirtileri ON hastalik_belirtileri.hastalikId=hastaliklar.hastalikId 
  JOIN belirtiler ON hastalik_belirtileri.belirtiId =belirtiler.belirtiİd
  LEFT JOIN poliklinik ON hastaliklar.poliklinik_id =poliklinik.poliklinikId
  where hastalik_belirtileri.belirtiId IN (".$parameter.") GROUP BY hastaliklar.hastalikId having COUNT(hastalik_belirtileri.id)>=1 order by count(hastalik_belirtileri.id) DESC");

  $sorgu->execute();

$hastaliklar = $sorgu->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hastaliğiniz</title>
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="sayfalar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        
             body {
            background-color: #506D8B;
           
        }

        
        .card{
            border-radius: 30px;
            border-top:6px solid #ea9826;
            width: 100%;
            display: inline-block;
        }
        div .baslik h5 {
            align-items: center;
            
        }
        div .btn{
           background-color: #ea9826;
            color: white;
        }
    </style>
</head>
<body>
<div><a style="float:right; color:white; margin:3px 36px;" href="index.php"><span class="material-symbols-outlined">
home
</span></a></div>

<div class="container">
<div style="color:white; margin-top:50px; margin-left:25px; "class=" baslik "><h6>Aşağıdakiler, belirttiğiniz belirtilere uyan hastalıkların listesidir. Hangi polikliniğe gitmeniz gerektiğini anlamanız için yardımcı olmak amacı ile listenemiştir. </h6></div>

<div class="row">
 <?php foreach($hastaliklar as $hastalik ){ ?>
 <div class="col-md-4 col-12 mb-2">
 <div class="card">
  <div class="card-header">
    <?=$hastalik['count']?> belirti eşleşti
  </div>
 
    <div class="card-body">
    <h5 class="card-title"><?=$hastalik['hastalikadi']?></h5>
    <p class="card-text"><?=$hastalik['hastaliktanim']?></p>
     <p class="card-text"><?=$hastalik['poliklinikadi']?> polikliniğine gidiniz</p>
    <a href="hastaliklar.php" class="btn ">Hastalık Detay</a>
  </div>
 
  </div>
</div>
   <?php } ?>
</div>
</div>
</body>
</html>