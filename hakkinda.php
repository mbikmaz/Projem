<?php
  include "header.php"
 ?>
<?php
$query = $db->query("SELECT * FROM hakkında", PDO::FETCH_ASSOC);
          if ( $query->rowCount() ){
          foreach( $query as $row ){
?>


  <p style="text-align:center; font-size: sans-serif 20px; "><?php echo $row['yazi'] ?></p>

<?php } } ?>

 <?php
 include "footer.php"

  ?>
