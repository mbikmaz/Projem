<?php
  $host ="localhost";
  $user ="root";
  $pass ="";
  $dbname="m_blog";
  try {
     $db = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", $user,$pass);
} catch ( PDOException $e ){
     print $e->getMessage();
}
 ?>
