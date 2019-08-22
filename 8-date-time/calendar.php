<?php
//calendar.php
$year=!empty($_GET['y'])? $_GET['y']:date('Y');//...
$month=!empty($_GET['m'])? $_GET['m']:date('j');

$firstDayTimestamp=mktime(3,0,0,$month,1,$year);

$totalDays=date('t',$firstDayTimestamp);//показва колко дни има месеца 
//echo $totalDays.'TOTALDAYS<br/>';

$days= range(1, $totalDays);//прави дните на масив 
//echo $days.'DAYS<br/>';
//display like tab;e 

//ако последния ден не е неделя допълваме числа от едно до края на седмицата 
$lastDayTimestamp= mktime(3,0,0, $month, $totalDays, $year);
$lastdayOfWeek=date('N',$lastDayTimestamp);
$daysToFill=7-$lastdayOfWeek;//брой дни за допълване
$firstDayOfWeek=date('N',$firstDayTimestamp);
if($firstDayOfWeek>1){
    if($month==1){
        $prevMonth=12;
    }else{
        $prevMonth=$month-1;
    }
    $prevMonthFirstTimestamp=mktime(0,0,0,$prevMonth);
    $prevMonthTotalDays=date('t',$prevMonthFirstTimestamp);
    for($i=1;$i<$firstDayOfWeek;$i++){
        array_unshift($days,$prevMonthTotalDays--);
    }
}

for($i=1;$i<=$daysToFill;$i++){
    $days[]=$i;
}

$displayDays=array_chunk($days,7);//
///разбива масива на двумерен масив със седем елемента 
//използва се за таблици 

echo'<table>';
echo '<tr><th colspan="7">'.date('F Y',$firstDayTimestamp).'</th></tr>';
echo '<tr>'
. '<th>mon</th>'
.'<th>tue</th>'
.'<th>wed</th>'
.'<th>thu</th>'
.'<th>fri</th>'
.'<th>sut</th>'
.'<th>sun</th>'        
. '</tr>';
foreach($displayDays as $week){
    echo'<tr>';
    foreach($week as $day)
    {
        echo '<td>'.$day.'</td>';
    }    
    echo'</tr>';
}


echo'</table>';