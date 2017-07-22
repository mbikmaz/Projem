<?php
  include "header.php"

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/form.css">
   </head>
   <body>
     <center>
      <form class="" action="index.html" method="post">
        <input type="text" placeholder="Adınız">
        <input type="text" placeholder="Soyadınız">
        <textarea name="mesaj" rows="8" cols="80" placeholder="Lütfen mesajınızı buraya giriniz..."></textarea>
        <input type="submit" value="Gönder">

      </form>
    </center>
   </body>
 </html>

 <?php
 echo "<hr>";
  include "footer.php"

  ?>
