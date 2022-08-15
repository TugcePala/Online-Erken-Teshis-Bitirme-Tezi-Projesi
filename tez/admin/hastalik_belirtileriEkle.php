<?php

session_start();
if(!isset($_SESSION['admin_login'])) header("Location: giris.php");
  require_once '../baglanti.php';
$sorgu=$db->prepare("SELECT belirtiId,belirtiAdi FROM belirtiler");
  $sorgu->execute();
  $belirtiler=$sorgu->fetchAll(PDO::FETCH_OBJ);
$hastalik_id=$_GET['hastalik_id'];

$sorgu=$db->prepare("SELECT hastalikId, hastalikadi FROM hastaliklar");
  $sorgu->execute();
  $hastaliklar=$sorgu->fetchAll(PDO::FETCH_OBJ);

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
        <div class="container">
            <form action="hastalik_belirtileriCek.php" method="post">
                
                    <div class="formgroup">
                          <div class="mt-3">
                           <select name="hastalik" id="" data-placeholder="Hastalık Seçin"  required class="form-control select2">
                                <option value="">Hastalık Seçin</option>
                                <?php foreach($hastaliklar as $hastalik){ ?>
                                 <option <?php if($hastalik_id==$hastalik->hastalikId) echo "selected" ?> value="<?=$hastalik->hastalikId?>"><?=$hastalik->hastalikadi?></option>
                                <?php }?>
                                
                            </select>
                            
                              
                          </div>
                           
                           <div class="mt-3">
                            <select name="belirtiler[]" id="" multiple data-placeholder="Belirtileri Seçin"  required class="form-control select2">
                                <?php foreach($belirtiler as $belirti){ ?>
                                 <option  value="<?=$belirti->belirtiId?>"><?=$belirti->belirtiAdi?></option>
                                <?php }?>
                                
                            </select>
                           
                               
                           </div>
                            
                            
                    </div>
                            <input type="submit" name="insert" onclick="" value="Gönder">
     

            </form> 
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


