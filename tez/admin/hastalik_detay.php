<?php

session_start();
if(!isset($_SESSION['admin_login'])) header("Location: giris.php");
  require_once '../baglanti.php';

$hastalik_id=$_GET['hastalik_id'];
if(!$hastalik_id){
    header("Location: index.php");
}
$sorgu=$db->prepare("SELECT hastalikadi,hastaliktanim, poliklinik.poliklinikadi FROM `hastaliklar`
JOIN poliklinik on poliklinik.poliklinikId = hastaliklar.poliklinik_id
WHERE hastalikId=?");
  $sorgu->execute(array($hastalik_id));
  $hastalik=$sorgu->fetch(PDO::FETCH_OBJ);



$sorgu=$db->prepare("SELECT belirtiAdi FROM `hastalik_belirtileri`
JOIN belirtiler on belirtiler.belirtiId = hastalik_belirtileri.belirtiId
WHERE hastalikId=?");
  $sorgu->execute(array($hastalik_id));
  $hastalikBelirtileri=$sorgu->fetchAll(PDO::FETCH_OBJ);

if(!$hastalik){
     header("Location: index.php");
}


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    body{
        background-color:#1111;
    }
    #formgroup{
    width: 600px;
    float: left;
    height: 500px;
    text-align: left;
}
.form-control{
    width: 100%;
    padding: 10px;
    font-size: 15px;
    line-height: 1.5;
    color: #495057;
    background-color: white;
    margin: 10px;
    border-radius: 5px;
    border: 1px solid #ced4da;
}
textarea{
    font-family: Arial;
}
input[type="submit"]{
    cursor: pointer;
    background-color: #445c6e;
    font-size: 18px;
    letter-spacing: 1px;
    padding: 10px 30px;
    color: white;
    border: 1px solid white;
    border-radius: 5px;
    margin-left: 10px;
    margin-top: 10px;
    
}
}
</style>
</head>
<body>

<section id="hastalik_belirtileriEkle">
        <div class="container mt-5">
           
                    <div class="mb-3">
                        <p class="mb-1"><b>Hastalık Adı:</b></p>
                        <p><?= $hastalik->hastalikadi ?></p>
                    </div>
                    
                    
                    <div class="mb-3">
                        <p class="mb-1"><b>Hastalık Tanım:</b></p>
                        <p><?=$hastalik->hastaliktanim?></p>
                    </div>
                    
                       <div class="mb-3">
                        <p class="mb-1"><b>Poliklinik:</b></p>
                        <p><?=$hastalik->poliklinikadi?></p>
                    </div>
                    
                      <hr>
                       <div class="mb-3">
                        <p class="mb-1"><b>Hastalık Belirtileri:</b></p>
                        <?php if($hastalikBelirtileri){ ?>
                        <ul>
                        <?php foreach($hastalikBelirtileri as $belirti){ ?> 
                            <li><?=$belirti->belirtiAdi?></li>
                        <?php }?>
                        </ul>
                        <?php }else{
                        ?>
                        <p class="text-danger">Belirti eklenmemiş <a href="hastalik_belirtileriEkle.php?hastalik_id=<?=$hastalik_id?>" class="btn btn-success">Belirti Ekle</a></p>
                        <?php } ?>
                    </div>
     

         
    </div>
</section> 
                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    $('.select2').select2({
        
    });
});
    </script>
                 
</body>
</html>


