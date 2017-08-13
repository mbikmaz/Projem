<footer>
   <div class="row">
     <?php
     $query = $db->query("SELECT * FROM sosyal", PDO::FETCH_ASSOC);
               if ( $query->rowCount() ){
               foreach( $query as $row ){
      ?>
     <div class="twelve columns">
     <ul class="social-links">

            <li><a  target="_blank" href="<?php echo $row['facebook']?>"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" href="<?php echo $row['twitter']?>"><i class="fa fa-twitter"></i></a></li>
            <li><a target="_blank" href="<?php echo $row['g_plus']?>"><i class="fa fa-google-plus"></i></a></li>
            <li><a target="_blank" href="<?php echo $row['github']?>"><i class="fa fa-github-square"></i></a></li>
            <li><a target="_blank" href="<?php echo $row['instagram']?>"><i class="fa fa-instagram"></i></a></li>
            <li><a  target="_blank" href="<?php echo $row['flickr']?>"><i class="fa fa-flickr"></i></a></li>
            <li><a target="_blank" href="<?php echo $row['skype']?>"><i class="fa fa-skype"></i></a></li>
         </ul>
<?php } } ?>
     </div>



      <div class="six columns info">
        <?php
        $query = $db->query("SELECT * FROM website", PDO::FETCH_ASSOC);
                  if ( $query->rowCount() ){
                  foreach( $query as $row ){

         ?>

         <h3><?php echo $row['site_basligi'] ?></h3>
<?php } } ?>



            <?php
            $query = $db->query("SELECT * FROM  hakkında", PDO::FETCH_ASSOC);
                      if ( $query->rowCount() ){
                      foreach( $query as $row ){
             ?>
         <p><?php echo $row['yazi'] ?> </p>
         <?php } } ?>



      </div>


      <div class="four columns">

         <h3>Photostream</h3>
         <?php function instagram()
            {
$username = 'gameofthronesnotofficial';
$json = file_get_contents('https://www.instagram.com/'.$username.'/media/');
$instagram_feed_data = json_decode($json, true);
if (isset($instagram_feed_data['items'])) {
    return $instagram_feed_data['items'];
        ?>
        <?php
    }
}
?>

         <ul class="photostream group">
           <?php foreach (instagram() as $item) {
         $link = $item['link'];
         $img_url = $item['images']['low_resolution']['url'];
         $caption = isset($item['caption']) ? $item['caption']['text'] : '';
         echo "<li><a href='$link'><img src='$img_url'></a></li>";
         } ?>

      </div>

      <div class="two columns">
         <h3 class="social">Site Navigasyonu</h3>
         <?php
            $sorgu = $db->query("SELECT * FROM menu",PDO::FETCH_ASSOC);
            if($sorgu -> rowCount())
            {
               foreach ($sorgu as $row) {
 ?>

         <ul class="navigate group">
            <li><a href="index.php"><?php echo $row['anasayfa'] ?></a></li>
            <li><a href="hakkinda.php"><?php echo $row['hakkında'] ?></a></li>
            <li><a href="iletisim.php"><?php echo $row['iletisim'] ?></a></li>
            <li><a href="galeri.php"><?php echo $row['galeri'] ?></a></li>
         </ul>
         <?php } } ?>
      </div>

      <p class="copyright">&copy; Copyright 2017 Mustafa BIKMAZ. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>

   </div> <!-- End row -->

   <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

</footer> <!-- End Footer-->


<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
