<div id="content-wrap">

 <div class="row">

   <div id="main" class="eight columns">

<?php
if(isset($_GET['gonderi'])){
	?>
   <?php
		$id = $_GET['gonderi'];
           $query = $db->query("SELECT * FROM gonderiler WHERE id=$id", PDO::FETCH_ASSOC);
                     if ( $query->rowCount() ){
                     foreach( $query as $row ){
                     if($row['baslik']!=''){
            ?>
     <article class="entry">

       <header class="entry-header">

         <h2 class="entry-title">

           <a href="#" title=""><?php echo $row['baslik'] ?></a>
         </h2>

         <div class="entry-meta">
           <ul>
             <li><?php  echo $row['zaman'] ?></li>
             <span class="meta-sep">&bull;</span>
             <li><a href="#" title="" rel="category tag">Ghost</a></li>
             <span class="meta-sep">&bull;</span>
             <li><?php echo $row['yazar'] ?></li>
           </ul>
         </div>

       </header>

       <div class="entry-content">

       <p><?php echo $row['icerik']; ?></p>

       </div>


     </article> <!-- end entry -->
<?php } } } ?>
   <?php
}else{
?>
   <?php
           $query = $db->query("SELECT * FROM gonderiler", PDO::FETCH_ASSOC);
                     if ( $query->rowCount() ){
                     foreach( $query as $row ){
                     if($row['baslik']!=''){
            ?>
     <article class="entry">

       <header class="entry-header">

         <h2 class="entry-title">

           <a href="#" title=""><?php echo $row['baslik'] ?></a>
         </h2>

         <div class="entry-meta">
           <ul>
             <li><?php  echo $row['zaman'] ?></li>
             <span class="meta-sep">&bull;</span>
             <li><a href="#" title="" rel="category tag">Ghost</a></li>
             <span class="meta-sep">&bull;</span>
             <li><?php echo $row['yazar'] ?></li>
           </ul>
         </div>

       </header>

       <div class="entry-content">

       <p><?php echo( strlen($row['icerik'])<=200 ? $row['icerik'] : mb_substr($row['icerik'],200).'...' ); ?> <a href="index.php?gonderi=<?=$row['id']?>">Devamını oku..</a></p>

       </div>


     </article> <!-- end entry -->
<?php } } } ?>
<?php }
?>



   </div> <!-- end main -->
