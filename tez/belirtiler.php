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
        #bg-belirti{
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
                        <a href="hastaliklar.php" class="nav-link ">Hastalıklar</a>
                    </li>
                    <li class="navbar-item">
                        <a href="belirtiler.php" class="nav-link active">Belirtiler</a>
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
   <section id="belirti">
        <div id="bg-belirti" style="color:white">
            
                <h4 style="color:white; text-align:center; padding-top:95px ">Belirtiler</h4>
                <hr>
                
            <div class="container table-responsive">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th>
                                   <p style="margin-left:10px;">Hastalarda Sık Görülen Bazı Belirtiler</p>
                               </th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>Boğaz Ağrısı</td>

                           </tr>
                           <tr>
                               <td>Gözlerde Kızarıklık</td>

                           </tr>
                           <tr>
                               <td>Eklem Ağrısı</td>

                           </tr>
                           <tr>
                               <td>Ateş (vücut sıcaklığının koltuk altından ölçüldüğünde 37 derecenin üstünde olması)
                                   </td>

                           </tr>
                       </tbody>
                   </table>
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