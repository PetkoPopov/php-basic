<?php

//controlers/logout/display.php
session_destroy();
//header('Location: index.php?page=login&logout=1');
//exit();
$param['logout']=1;
redirect('login',$param);