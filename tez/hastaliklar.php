<?php
  require_once 'baglanti.php';
  $sorgu=$db->prepare("SELECT * FROM hastaliklar ORDER BY hastalikadi ");
  $sorgu->execute();
  $hastaliklar=$sorgu->fetchAll(PDO::FETCH_OBJ);
  
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
    <title>Online Erken Teşhis Ve Poliklinik Öneri</title>
    <style>
 
      #bg-hastalik{
        min-height:650px;
        background-color:#7C92A8;
       
        background-size: cover;
        background-attachment: fixed;
        color: black;
        }
        hr{
        border:none;
        height: 20px;
        width: 50%;
        height: 50px;
        margin-top: 0;
        border-bottom: 1px solid white;
        box-shadow: 0 10px 10px -10px white;
        margin: -50px auto 30px;
        }
       .box{
    
    font-family: 'Nanum Gothic', sans-serif;
    border-radius: 25px 0;
    position: relative;
    overflow: hidden;
    z-index: 1;
}
.box:before,
.box:after,
.box .box-content:before,
.box .box-content:after{
    content: "";
    background: #fff;
    width: 50%;
    height: 4px;
    transform: scaleX(0);
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 1;
    transition: all 600ms ease;
}
.box:after{
    top: auto;
    bottom: 15px;
    left: auto;
    right: 15px;
}
.box .box-content:before,
.box .box-content:after{
    width: 4px;
    height: 50%;
    transform: scaleY(0);
}
.box .box-content:after{
    left: auto;
    right: 15px;
    top: auto;
    bottom: 15px;
}
.box:hover:before,
.box:hover:after,
.box:hover .box-content:before,
.box:hover .box-content:after{
    transform: scale(1);
}
.box img{
    width: 100%;
    height: auto;
    transform: scale3d(1.1, 1.1, 1);
    transition: all 0.25s linear;
}
.box:hover img{
    opacity: 0.25;
    transform: scale(1.25);
}
.box .inner-content{
    color: #fff;
    text-align: center;
    width: 70%;
    opacity: 0;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    top: 70%;
    left: 50%;
    transition: all 600ms ease;
}
.box:hover .inner-content{
    opacity: 1;
    top: 50%;
}
.box .title{
    font-size: 20px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin: 0 0 3px;
    display: block;
    
}
.box:hover .title{
           display: none; 
        }
     
.box .post{
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin: 0 0 12px;
    display: block;
    
        }
        
   

@media screen and (max-width: 620px) {
.searchBox:hover > .searchInput {
    width: 150px;
    padding: 0 6px;
}
}
       
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#506D8B; border-bottom:1px solid gray; ">
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
                        <a href="index.php" class="nav-link ">Anasayfa</a>
                    </li>
                    <li class="navbar-item">
                        <a href="poliklinikler.php" class="nav-link ">Poliklinikler</a>
                    </li>
                    <li class="navbar-item">
                        <a href="hastaliklar.php" class="nav-link active">Hastalıklar</a>
                    </li>
                    <li class="navbar-item">
                        <a href="belirtiler.php" class="nav-link ">Belirtiler</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#iletisim" class="nav-link">İletişim</a>
                    </li>
                    <li class="navbar-item">
                        

                    </li>

                </ul>
            
            </div>

        </div>
    </nav>
     
    <section  id="hastalik">
       
        <div style="" id="bg-hastalik">   
            
              <h4 style="color:white; text-align:center; padding-top:70px;">Hastalıklar</h4>
              
              
              <hr style="color:white;">
              <div class="container" style="">
                 <div class="row">
                    <?php
                        foreach($hastaliklar as $u){
                    ?>
                       <div style="" class="col-md-4 col-sm-6 mb-4">
                           <div class="box">
                              <div class="boxImg" style="position:relative;">
                               <img src="img/cells-gcec8eaa1a_1920.jpg">
                               <h3 class="title" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color:white;"><?= $u-> hastalikadi ?></h3>
                               </div>
                               <div class="box-content">
                                   <div class="inner-content">
                                       
                                       <span class="post"><?= $u-> hastaliktanim ?></span>
                                       
                                   </div>
                               </div>
                           </div>
                       </div>
                     <?php
                        }
                     ?>

                </div>

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
</body>

</html>
<?= $u-> hastalikadi ?>