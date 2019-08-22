<?php

//controlers/logout/display.php

session_destroy();
echo' Welcome to LOGOUT/display.php';
//header('Location: index.php?page=login&logout=1');
//exit();

//$param['logout']=1;
//redirect('login',$param);
$viewFile=VIEWS_DIR.'/logout.php';
require_once VIEWS_DIR . '/template.php';