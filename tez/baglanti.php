<?php
  try{
      $db=new PDO("mysql:host=localhost;dbname=tezornek;charset=utf8",'root','12345678');
     // echo "Bağlantı başarılı";
  }
 catch(PDOExeption $e){
    echo $e->getMessage();
}

?>
