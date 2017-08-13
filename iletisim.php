<?php
  include "header.php"

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/newform.css">

  </head>
  <body>
    <center>
      <h2>İLETİŞİM FORMU </h2>
    <form  action="gonder.php" method="post">
      <input type="text" placeholder="Ad-Soyad" name="adsoyad">
      <input type="text" placeholder="Email" name="eposta">
      <textarea rows="80" cols="40" name="mesaj" placeholder="Lütfen Mesajınızı Buraya Giriniz..."></textarea>

      <button type="submit" name="gonder">Gönder</button>

    </form>
  </center>
  </body>
</html>


 <?php
 echo "<hr>";
  include "footer.php"

  ?>
