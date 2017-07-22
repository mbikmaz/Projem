<?php
  include "database.php"
 ?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Mustafa BIKMAZ</title>
	<meta name="description" content="">
	<meta name="author" content="Mustafa BIKMAZ">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="top">

   	<div class="row">

   		<div class="header-content twelve columns">
        <?php
        $query = $db->query("SELECT * FROM website", PDO::FETCH_ASSOC);
                  if ( $query->rowCount() ){
                  foreach( $query as $row ){
                  print $row['site_basligi']."<br />";
         ?>

		      <h1 id="logo-text"><a href="index.php" title=""><?php echo $row['site_basligi'];  ?></a></h1>
				<p id="intro"><?php echo $row['site_slogani'] ?></p>

			</div>
      <?php } } ?>

	   </div>

	   <nav id="nav-wrap">

	   	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		   <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

	   	<div class="row">

			   	<ul id="nav" class="nav">
			      	<li class="current"><a href="index.php">Anasayfa</a></li>
			      	<li class="has-children"><a href="hakkinda.php">Hakkında</a></li>
	               <li><a href="iletisim.php">iletisim</a></li>
	               <li><a href="galeri.php">Galeri</a></li>
			   	</ul> <!-- end #nav -->
	   	</div>

	   </nav> <!-- end #nav-wrap -->

   </header> <!-- Header End -->
