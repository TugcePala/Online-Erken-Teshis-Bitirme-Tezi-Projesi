<?php

  require_once '../baglanti.php';
  $sorgu=$db->prepare("SELECT * FROM belirtiler ");
  $sorgu->execute();
  $belirtiler=$sorgu->fetchAll(PDO::FETCH_OBJ);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css">
    

</head>
<body class="">
    <div class="row">
    <div class="col-3 d-flex vh-100" style="">
    <div class="d-flex flex-column flex-shrink-0 bg-light w-100">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">İşlemler</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="index.php" class="nav-link link-dark" >
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          İletişim
        </a>
      </li>
      <li>
        <a href="hastalikEkle.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Hastalık Ekle
        </a>
      </li>
      <li>
        <a href="hastalik_belirtileriEkle.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Hastalık Belirtileri EKle
        </a>
      </li>
      <li>
        <a href="poliklinikEkle.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Poliklinik Ekle
        </a>
      </li>
      <li>
        <a href="belirtiEkle.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Belirti Ekle
        </a>
      </li>
      <li>
        <a href="hastaliklarListele.php" class="nav-link link-dark" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Hastaliklar
        </a>
      </li>
      <li>
        <a href="poliklinikListele.php" class="nav-link link-dark" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Polikilinikler
        </a>
      </li>
      
      
      <li>
        <a href="belirtiListele.php" class="nav-link active">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Belirtiler
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
   </div>
   <div class="col-9">
       <div class="card mt-5">
          <div class="card-header">Belirtiler</div>
           <div class="card-body">
               <table class="table table-hover">
            <tr>
    <th>Belirti ID</th>
    <th>Belirti Adı</th>
    
    
    
  </tr>
  <?php
         foreach($belirtiler as $b){  
  ?>
    
  <tr>
      <td><?=$b->belirtiId?></td>
      <td><?=$b->belirtiAdi?></td>
      
      
      
  </tr>
       <?php
             }
                     ?>
       </table>
           </div>
       </div>
        </div>
        
  </div>
</body>
</html>   