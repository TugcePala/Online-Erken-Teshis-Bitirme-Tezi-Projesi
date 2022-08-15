<?php
  require_once 'baglanti.php';

  $sorgu=$db->prepare("SELECT *FROM poliklinik ORDER BY poliklinikadi asc");
  $sorgu->execute();
  $poliklinikler=$sorgu->fetchAll(PDO::FETCH_OBJ);
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
       
      #bg-poliklinik{
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
.container .card {
    max-width: 300px;
    height: 250px;
    margin: 30px 10px;
    padding: 20px 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
    transition: 0.3s ease-in-out
}

.container .card:hover {
    height: 400px
}

.container .card .imgContainer {
    position: relative;
    width: 250px;
   
    top: -50px;
    left: 10px;
    z-index: 1;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2)
}

.container .card .imgContainer img {
    max-width: 100%;
    border-radius: 4px;
    opacity: 1;
}
.container .card .adContainer {
    position: relative;
    text-align: center;
    width: 250px;
    top: -30px;
    left: 10px;
    
        }
        
.container .card .content {
    position: relative;
    margin-top: -100px;
    padding: 10px 15px;
    text-align: center;
    color: #111;
    visibility: hidden;
    opacity: 0;
    pointer-events: none;
    transition: 0.3s ease-in-out
}

.container .card:hover .content {
    visibility: visible;
    opacity: 1;
    margin-top: -10px;
    transition-delay: 0.3s
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
                        <a href="poliklinikler.php" class="nav-link active">Poliklinikler</a>
                    </li>
                    <li class="navbar-item">
                        <a href="hastaliklar.php" class="nav-link ">Hastalıklar</a>
                    </li>
                    <li class="navbar-item">
                        <a href="belirtiler.php" class="nav-link ">Belirtiler</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#iletisim" class="nav-link ">İletişim</a>
                    </li>
                    <li class="navbar-item">
                       
                    </li>

                </ul>
            
            </div>

        </div>
    </nav>
    
    <section id="poliklinik">
        <div id="bg-poliklinik">     
              <h4 style="color:white; text-align:center; padding-top:70px">Poliklinikler</h4> 
              <hr style="color:white;">
              <div class="container d-flex align-items-center justify-content-center position-relative flex-wrap">
                    <?php
                        foreach($poliklinikler as $a){
                    ?>
                      <div class="card d-flex position-relative flex-column">
                          <div class='imgContainer'> <img src="uploads/<?= $a-> poliklinikresim ?>" alt=""></div>
                          <div class="adContainer">
                               <h2 style="font-size:1.5rem;"><?= $a-> poliklinikadi ?><br></h2>
                               
                           </div>
                          
                          <div class="content">
                              
                              <p><?= $a-> poliklinikaciklama ?></p>
                          </div>
                      </div>
                     <?php
                        }
                     ?>

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
