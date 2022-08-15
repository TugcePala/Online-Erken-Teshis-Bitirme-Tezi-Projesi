<?php

session_start();
if(!isset($_SESSION['admin_login'])) header("Location: giris.php");
  require_once '../baglanti.php';
$sorgu=$db->prepare("SELECT poliklinikId,poliklinikAdi FROM poliklinik");
  $sorgu->execute();

  $poliklinikler=$sorgu->fetchAll(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html>
<head>
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  
</head>
<body>

<section id="hastalikEkle">
        <div class="container">
            <form action="hastalikCek.php" method="post">
                
                    <div class="formgroup">
                            
                            <input type="text" name="hastalikadi" placeholder="Hastalik Adi" required class="form-control">
                        
                            <textarea name="hastaliktanim" id="" cols="30" placeholder="Hastalığı Tanımlayın" rows="10" class="form-control"></textarea>
                            
                            <select name="poliklinik" id="" data-placeholder="Poliklinik Seçin"  required class="form-control select2">
                                <option value="">Poliklinik Seçin</option>
                                <?php foreach($poliklinikler as $poliklinik){ ?>
                                 <option value="<?=$poliklinik->poliklinikId?>"><?=$poliklinik->poliklinikAdi?></option>
                                <?php }?>
                                
                            </select>
                            <!--<input type="text" name="poliklinik_id" placeholder="Hastalıkla İlgili Poliklinik" required class="form-control">-->
                            
                    </div>
                            <input type="submit" name="insert" onclick="" value="Gönder">
                     
              
            </form> 
    </div>
</section>   

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    $('.select2').select2();
});
    </script>
</body>
</html>


