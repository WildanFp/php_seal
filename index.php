<?php

$nama = "Wildan Abdul Rachman Saleh";
$kampus = "POLITEKNIK NEGERI MALANG";
$program = "Studi Independen SEAL";
$semester = 5;
$seluruhSemester = 8;
$selisihSemester = $seluruhSemester- $semester;



echo "<center> ABOUT ME </center><br>";

 ?>
 
 <center> <img src="img/profile.jpg" alt="" height="300"> </center>

 <?php

echo "<br> <center>Halo perkenalkan nama saya $nama </br> Saya sekarang sedang menjalani program $program</center>";
echo "</br> <center> saya sekarang sedang menjalani perkuliahan semester $semester </center>";
echo "</br> <center> berarti saya kurang $selisihSemester semester lagi lulus </center>";
 ?>