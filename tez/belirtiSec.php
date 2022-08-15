<?php
  require_once 'baglanti.php';

  $sorgu=$db->prepare("SELECT belirtiAdi,belirtiId FROM belirtiler ORDER BY belirtiAdi");
  $sorgu->execute();
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="sayfalar.css">
   <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js" nonce="f5677fac-9ba9-4a55-8216-bc007378813c"></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQ29sb3JsaWIlMjAlN0MlMjBGcmVlJTIwQm9vdHN0cmFwJTIwV2Vic2l0ZSUyMFRlbXBsYXRlJTIyJTJDJTIyeCUyMiUzQTAuNjE5NDM0NTYwMjEyNDQ5MSUyQyUyMnclMjIlM0ExMjgwJTJDJTIyaCUyMiUzQTcyMCUyQyUyMmolMjIlM0E2MDklMkMlMjJlJTIyJTNBMTI4MCUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRnByZXZpZXcuY29sb3JsaWIuY29tJTJGJTIzc21hc2glMjIlMkMlMjJyJTIyJTNBJTIyJTIyJTJDJTIyayUyMiUzQTI0JTJDJTIybiUyMiUzQSUyMlVURi04JTIyJTJDJTIybyUyMiUzQS0xODAlMkMlMjJxJTIyJTNBJTVCJTVEJTdE"></script>
    <style>
        

        body {
            margin: 0;
            background-color: #506D8B;
            color: ghostwhite;
            box-sizing: border-box;
            
  font-family: Arial, Helvetica, sans-serif;
  
        }

        h4 {
            margin-top: 15px;
            text-align: center;
            margin-left: 100px;

        }
        form{
            width: 1000px;;
        }
        
        .container{
            
            display: block;
            margin-top: 20px;
            margin-left: 42px;
           
        }
        
        button{
            display: inline ;
            bottom: 0;
            right: 0px;
        }
        
        ul{
            list-style-type: none;
            display: flex;
            justify-content: space-evenly;
        }
        .container li{
             
             position: relative;             
             margin:10px;
     
        }
  

        
    </style>
</head>
    
<body>
   
   
    <a style="float:right; color:white; margin:48px 36px 0px 36px;" href="index.php"><span class="material-symbols-outlined">
home
</span></a>

    <h4 style=" float:left;  margin-top:50px;">Kendinizde Gördüğünüz Belirtileri Seçiniz.</h4>

<div style="float:left;" class=" container mx-3 my-3">
        <ul>
            <form id="hastaliklarForm" action="hastaliginiz.php" method="post" >

                <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)): ?>                
                  <li>
                   <input id="belirti<?=$satir["belirtiId"]?>" class="mx-2 my-2" type="checkbox" name="belirtiler[]" value="<?=$satir["belirtiId"]?>">
                    <label for="belirti<?=$satir["belirtiId"]?>"><?=$satir["belirtiAdi"]?>
                    </label>
                  </li>
                    
                    
                
                <?php endwhile; ?>
                <button class="btn btn-info" id="belirtileriSecButton" name="save_multiple_checkbox" type="submit">GÖNDER</button>
            </form>
            </ul>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
    
    
    $('#belirtileriSecButton').on('click',function(event){
        
        event.preventDefault();
        let count = $('#hastaliklarForm input:checkbox:checked').length;
        
        if(count>0){
            $('#hastaliklarForm').submit();
            return true;
        }
        
        alert("Lütfen Seçim Yapınız")
        
            return false;
            
            
        
     })
    </script>
</body>

</html>
