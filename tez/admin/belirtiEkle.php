<?php

session_start();
if(!isset($_SESSION['admin_login'])) header("Location: giris.php");
  require_once '../baglanti.php';

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

<section id="belirtiEkle">
        <div class="container">
            <form action="belirtiCek.php" method="post">
                
                    <div class="formgroup">
                            
                            <input type="text" name="belirtiAdi" placeholder="Belirti Adi" required class="form-control">
                        
                            
                            
                            <!--<input type="text" name="poliklinik_id" placeholder="Hastalıkla İlgili Poliklinik" required class="form-control">-->
                            
                    </div>
                            <input type="submit" name="insert" onclick="" value="Gönder">
                     
              
            </form> 
    </div>
</section>   

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


</body>
</html>


