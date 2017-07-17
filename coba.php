<?php 
$date = new DateTime("now");
echo $date->format('d-m-Y H:i:s');


// date_default_timezone_set("UTC"); 
// echo "UTC:".time(); 
// echo "<br>"; 

// date_default_timezone_set("Asia/Jakarta"); 
// echo "Asia/Jakarta:".time(); 
// echo "<br>"; 

date_default_timezone_set("Asia/Jakarta");
echo date_default_timezone_get().date('d-m-Y H:i:s');

 ?>