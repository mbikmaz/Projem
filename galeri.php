<?php
    include "header.php";
 ?>

<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script>
      !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
    </script>
    <script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript">
          $("a[rel=example_group]").fancybox({
            'transitionIn'		: 'none',
            'transitionOut'		: 'none',
            'titlePosition' 	: 'over',
            'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
              return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
            }
          });
    </script>
  </head>

  <body>

    <div style="margin-left:10px; padding:5px; ">
    <p>

      <a rel="example_group" href="images/g1_b.jpg" title="Lorem ipsum dolor sit amet"><img alt="" src="images/g1_k.jpg" /></a>

      <a rel="example_group" href="images/g2_b.jpg" title=""><img  class ="last " alt="" src="images/g2_k.jpg" /></a>

      <a rel="example_group" href="images/g3_b.jpg" title=""><img alt="" class="last" src="images/g3_k.jpg" /></a>

      <a rel="example_group" href="images/g4_b.jpg" title=""><img class="last" alt="" src="images/g4_k.jpg" /></a>

      <a rel="example_group" href="images/g5_b.jpg" title=""><img class="last" alt="" src="images/g5_k.jpg" /></a>

      <a rel="example_group" href="images/g6_b.jpg" title=""><img class="last" alt="" src="images/g6_k.jpg" /></a>

      <a rel="example_group" href="images/g7_b.jpg" title=""><img class="last" alt="" src="images/g7_k.jpg" /></a>

      <a rel="example_group" href="images/g8_b.jpg" title=""><img class="last" alt="" src="images/g8_k.jpg" /></a>

        <a rel="example_group" href="images/g9_b.jpg" title=""><img class="last" alt="" src="images/g9_k.jpg" /></a>

      <a rel="example_group" href="images/g10_b.jpg" title=""><img class="last" alt="" src="images/g10_k.jpg" /></a>

      <a rel="example_group" href="images/g11_b.jpg" title=""><img class="last" alt="" src="images/g11_k.jpg" /></a>

      <a rel="example_group" href="images/g12_b.jpg" title=""><img class="last" alt="" src="images/g12_k.jpg" /></a>

      <a rel="example_group" href="images/g13_b.jpg" title=""><img class="last" alt="" src="images/g13_k.jpg" /></a>

      <a rel="example_group" href="images/g14_b.jpg" title=""><img class="last" alt="" src="images/g14_k.jpg" /></a>

      <a rel="example_group" href="images/g15_b.jpg" title=""><img class="last" alt="" src="images/g15_k.jpg" /></a>

      <a rel="example_group" href="images/g16_b.jpg" title=""><img class="last" alt="" src="images/g16_k.jpg" /></a>
      <a rel="example_group" href="images/g17_b.jpg" title=""><img class="last" alt="" src="images/g17_k.jpg" /></a>

    </p>
  </div>
  </body>
</html>


<?php
        echo "<hr />";
        include "footer.php";

 ?>
