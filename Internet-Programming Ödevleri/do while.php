<?php
$sehirler = array("istanbul", "ankara", "izmir", "bursa","adana");
$i = 0;
do {
	  
	   $a = $sehirler[$i];
   $i++;
   echo $a ."\n";     
}
while ($i < count($sehirler))
?>