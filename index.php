<?php include 'header.php'; ?>
<div class="container">
<div class="well well-small">
  		<?php 
include("koneksi.php"); 
echo '<div class="alert alert-info"> <CENTER><H2>Sistem Diagnosa Kerusakan LAPTOP</H2></CENTER> </div>' ; 
echo "<CENTER><IMG SRC='images/homepage.JPG' ' BORDER=0 ALT=''></CENTER>"; 


echo "<br>";

echo' <div class="row-fluid"><ul class="thumbnails">
  <li class="span4">
  <h4>Diagnosa Kerusakan kelistrikan</h4>
    <a href="diagnosa_psu.php" class="thumbnail">
	
      <img src="images/listik.jpg" alt="">
    </a>
	
  </li>
   <li class="span4">
    <h4>Diagnosa Kerusakan Tampilan</h4>
    <a href="diagnosa_vga.php" class="thumbnail">
      <img src="images/image.jpg" alt="">
    </a>
  </li>

  

</ul></div>   ';
echo '<div class=" well">
<center><p><strong>NAMA : </strong><br>
<span class="label label-warning">Nurul Huda</span>

</center> </div>';
?>
</div>
</div>
</div>
