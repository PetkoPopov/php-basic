<?php

//8-datetime/datetime.php

///unix timestamp-брой секунди 
$timestamp=time();
//echo $timestamp;
$half=$timestamp-(24*3600);
$birthday= mktime(16, 30,23,6,25,1976);
//echo $birthday;
$date=date('Y-m-d , H:i:s ',$birthday);//форматира дати и време'Y-m-d , H:i:s '
//това е стандартен формат за бази данни 
 
echo $date;

        