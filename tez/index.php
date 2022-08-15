<?php 

    if(isset($_GET['result'])) {
        if($_GET['result']==1){
            $message ="İşlem başarılı";
        }else{
            $message ="İşlem başarısız";
        }
        
}
    ?>

<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="sayfalar.css">
    <title>Online Erken Teşhis Ve Poliklinik Öneri</title>
    <style>
        *{
  box-sizing: border-box;
}
body{
    margin: 0;
    
}
nav{
    
    line-height: 50px;
    padding: 0.5rem 1rem;
    
    
}
#home{
    height: 600px;
    background-image: url(img/d2.jpg);
    background-size: cover;
    background-attachment: fixed;
   
   
}
#black{
    height: 600px;
    background-color: black;
    opacity: 0.6;
}
        #icerik{
    position: absolute;
    top: 50%;
    left: 40%;
    color: white;
    transform: translate(-50%,-50%);
}
#icerik input{
    position: absolute;
    left:80%;
}
    </style>
</head>

<body>

   <?php print_r($_SESSION)?>
    <nav class="navbar navbar-expand-xlg navbar-dark fixed-top" style="background-color:#506D8B; border-bottom:1px solid gray; ">
        <div class="container">
            <a href="/" class="navbar-brand">
                <i class="fas fa-blog"></i>&nbsp;Online Erken Teşhis Ve Poliklinik Öneri
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="index.php" class="nav-link active">Anasayfa</a>
                    </li>
                    <li class="navbar-item">
                        <a href="poliklinikler.php" class="nav-link link-dark">Poliklinikler</a>
                    </li>
                    <li class="navbar-item">
                        <a href="hastaliklar.php" class="nav-link link-dark">Hastalıklar</a>
                    </li>
                    <li class="navbar-item">
                        <a href="belirtiler.php" class="nav-link link-dark">Belirtiler</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#iletisim" class="nav-link link-dark ">İletişim</a>
                    </li>
                    <li class="navbar-item">
                       
                    </li>

                </ul>
            
            </div>

        </div>
    </nav>
    <section id="home">
        <div id="black">
            <div id="icerik">
                <h3>Kendiniz de gördüğünüz belirtileri girin ve hastalığınızın ne olabileceğini uzmanından öğrenin.</h3>
                <hr>
                <input type="button" class="btn" onclick="window.location='belirtiSec.php';" value="Şimdi Başla">
            </div>
        </div>
    </section>
    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>
            <form action="islem.php" method="post">
                <div id="iletisimopak">
                   <div class="row">
                       <div class="col-md-12 col-lg-7">
                               <div id="formgroup">
                               
                               <div class="row">
                                   <div class="col-12 col-sm-6">
                                                                   <input type="text" name="adsoyad" placeholder="Ad Soyad" required class="form-control">

                                   </div>
                                   <div class="col-12 col-sm-6">
                                                                    <input type="email" name="email" placeholder="E-mail Adresiniz" required class="form-control">

                                   </div>
                                   <div class="col-12 col-sm-6">
                                                                  <input type="text" name="telefon" placeholder="Telefon" required class="form-control">

                                   </div>
                                   <div class="col-12 col-sm-6">
                                                                   <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">

                                   </div>
                                   
                               </div>
                    
                        <textarea name="mesaj" id="" cols="30" placeholder="Mesajı Giriniz" rows="10" class="form-control"></textarea>
                        <input type="submit" name="insert" onclick="" value="Gönder">
                     </div>
                       </div>
                       <div class="col-lg-5 col-md-12">
                           <div id="adres">
                        <h4 id="adresbaslik">Adres:</h4>
                        <p>Mehmet AKif Ersoy Mah. Gaziantep</p>
                        <p>Phone:+123 456 789</p>
                        <p>Email: info@hotmail.com</p>

                    </div>
                       </div>
                   </div>
                
                       
                </div>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
    <?php if(@$message){
    ?>
        alert("<?=$message?>");
        <?php
    }
        ?>
    </script>
    
</body>

</html>

