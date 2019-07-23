<?php
//controle/register/display.php
$viewFile=VIEWS_DIR.'/register.php';

if(!empty($_GET['error']))
{
    
    $errorMessage='';
    switch($_GET['error'])
    {
    case 1:
        $error='email required';
        break;
    case 2:
        $errorMessage='first name required ';
break;        
    case 3:
        $errorMessage='last name reùired';
        break;
    case 4:
        $errorMessage='password required';
        break;
    case 5:
        $errorMessage='confirm The password';
        break;
    case 6:
        $errorMessage='Terms are not accepted';
        break;
    case 7:
        $errorMessage='not enought lenght';
        break;
    case 8:
        $errorMessage='The password is not confirmed';
        break;
    default:
        $errorMessage='error ocurred';
}
}
require_once VIEWS_DIR.'/template.php';
