<div id="sidebar" class="four columns">
  <!--<?php
if (!empty($_GET['arama'])){
$sorgu = $db->query("SELECT * FROM blog_icerik AS icerik INNER JOIN blog_katagori AS kategori ON icerik.k_adi=kategori.id WHERE icerik.baslik LIKE '%".$_GET['arama']."%' OR icerik.icerik LIKE '%".$_GET['arama']."%' OR kategori.kat_adi LIKE '%".$_GET['arama']."%'", PDO::FETCH_ASSOC);
} else {
$sorgu = $db -> query("select * from blog_icerik",PDO::FETCH_ASSOC);
}
?> -->
  <div class="widget widget_search">
            <h3>Search</h3>
            <form  method="get">
               <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search" name="arama">
               <input type="submit" value="" class="submit-search">

            </form>
         </div>

         <div class="widget widget_categories group">
             <?php     $sorgu = $db->query("SELECT kategoriler.ad, COUNT(*) as say
                         FROM kategoriler INNER JOIN gonderiler
                         ON kategoriler.id = gonderiler.id
                         GROUP BY kategoriler.id
                         ORDER BY say DESC" ,PDO::FETCH_ASSOC);
                ?>
             <h3>Kategoriler</h3>
             <ul>
         	 <?php
         		foreach($sorgu as $kategori){

         	 ?>
         		<li><a href="#" title=""><?php echo $kategori['ad']?></a> (<?php echo $kategori['say']?>)</li>
         		<?php } ?>
             </ul>
           </div>


  <div class="widget widget_text group">


  </div>

  <div class="widget widget_tags">

    <div class="tagcloud group">

         <h3>Gönderi Etiketleri</h3>

         <?php
         $query = $db->query("SELECT * FROM etiket", PDO::FETCH_ASSOC);
                   if ( $query->rowCount() ){
                   foreach( $query as $row ){
          ?>

            <a href=""><?php echo  $row['Html'] ?></a>
            <a href="#"><?php echo $row['Css'] ?></a>
            <a href="#"><?php echo $row['Php'] ?></a>
            <a href="#"><?php echo $row['Github'] ?></a>
            <a href="#"><?php echo $row['Teknoloji'] ?></a>

<?php } } ?>
         </div>

      </div>




      <div class="widget widget_popular">
         <h3>Popular Yazı.</h3>
         <?php
         $query = $db->query("SELECT * FROM popular_yazi", PDO::FETCH_ASSOC);
                   if ( $query->rowCount() ){
                   foreach( $query as $row ){
          ?>

         <ul class="link-list">
            <li><a href="#"><?php echo $row['baslik1'] ?></a></li>
            <li><a href="#"><?php echo $row['baslik2'] ?></a></li>
        </ul>
<?php } } ?>
      </div>

</div> <!-- end sidebar -->

</div> <!-- end row -->

</div> <!-- end content-wrap -->
