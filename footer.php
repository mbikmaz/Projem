<footer>
   <div class="row">
     <?php
     $query = $db->query("SELECT * FROM website", PDO::FETCH_ASSOC);
               if ( $query->rowCount() ){
               foreach( $query as $row ){
      ?>
     <div class="twelve columns">
     <ul class="social-links">

            <li><a  target="_blank" href="http://www.facebok.com/<?php echo $row['site_fb']?>"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" href="https://www.twitter.com/<?php echo $row['site_tw']?>"><i class="fa fa-twitter"></i></a></li>
            <li><a target="_blank" href="https://plus.google.com/<?php echo $row['site_gp']?>"><i class="fa fa-google-plus"></i></a></li>
            <li><a target="_blank" href="https://www.github.com/<?php echo $row['site_git']?>"><i class="fa fa-github-square"></i></a></li>
            <li><a target="_blank" href="https://www.instagram.com/<?php echo $row['site_ins']?>"><i class="fa fa-instagram"></i></a></li>
            <li><a  target="_blank" href="https://www.flickr.com/<?php echo $row['site_flickr']?>"><i class="fa fa-flickr"></i></a></li>
            <li><a target="_blank" href="https://www.skype.com/tr/
<?php echo $row['site_skype']?>"><i class="fa fa-skype"></i></a></li>
         </ul>

     </div>
     <?php } } ?>


      <div class="six columns info">
        <?php
        $query = $db->query("SELECT * FROM website", PDO::FETCH_ASSOC);
                  if ( $query->rowCount() ){
                  foreach( $query as $row ){

         ?>

         <h3><?php echo $row['site_basligi'] ?></h3>
<?php } } ?>
         <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
         Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
         nibh id elit.
         </p>

         <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint
         sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

      </div>


      <div class="four columns">

         <h3>Photostream</h3>

         <ul class="photostream group">
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
         </ul>

      </div>

      <div class="two columns">
         <h3 class="social">Navigate</h3>

         <ul class="navigate group">
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="hakkinda.php">Hakkında</a></li>
            <li><a href="iletisim.php">İletisim</a></li>
            <li><a href="galeri.php">Galeri</a></li>
         </ul>
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
