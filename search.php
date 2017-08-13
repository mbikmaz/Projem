<?php 
if (!empty($_GET['arama'])){
$sorgu = $db->query("SELECT * FROM gonderiler AS icerik INNER JOIN kategoriler AS kategori ON icerik.k_adi=kategori.id WHERE icerik.baslik LIKE '%".$_GET['arama']."%' OR icerik.icerik LIKE '%".$_GET['arama']."%' OR kategori.kat_adi LIKE '%".$_GET['arama']."%'", PDO::FETCH_ASSOC);
} else {
$sorgu = $db -> query("select * from gonderiler,PDO::FETCH_ASSOC);
}
 ?>
