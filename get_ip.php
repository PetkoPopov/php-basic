<?php
session_start();?>
<meta http-equiv="refresh" content="20"/>
<body style="background-color: #66ccff">
    <?php
    
    if(!isset($_SESSION['count']))
{
    $_SESSION['count']=0;
    $_SESSION['summ']=0;
    $_SESSION['start']=time();
}else{
    $_SESSION['count']++;
}
//////////////////////
$count=$_SESSION['count'];
$_SESSION['m'][$count]=microtime();
$random=rand(1,7);
$_SESSION['summ']=$_SESSION['summ']+$random;
echo '<center><table border=1 bgcolor=yellowgreen width=55% height=55% >'
. '<tr><td size=55%>'.$random.'---'.$_SESSION['count'].'</td></tr>'
        .'<tr>'.$_SESSION['summ'].'</tr>'
        . '</table></center>';
echo '<br/>';
//echo $_SESSION['summ'];
// var_dump(microtime());
//$_SESSION['mtime']='';
//echo microtime();
//$_SESSION['mtime'][$count]=microtime();
//echo'<pre>';
//print_r($_SESSION);
//echo'</pre>';
$_SESSION['end']=time();
if(($_SESSION['end']-$_SESSION['start'])>=300)
{
    echo 'END SESSION';
    session_destroy();
}
elseif(!empty($_GET['reset']))
{
    session_destroy();
}
//session_destroy();