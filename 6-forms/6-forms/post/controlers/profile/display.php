

<?php
//controleers/profile/display.php
//echo'PROFILE/display.php';
if(empty($_SESSION['logged'])){
    redirect('login');
}

if(!empty($_GET['errorCode'])){
    $errorMessage='';
    if($_GET['error']=='avatar'&&!empty($_GET['errorCode'])){
        switch($_GET['errorCode']){
            case 1://UPLOAD_ERR_INISIZE:
                $errorMessage='твърде голям';
                echo$errorMessage;
                break;
            case 2://UPLOAD_ERR_FORM_SIZE:
                $errorMessage='твърде голям за формата';
                echo$errorMessage;
                break; 
            case 3://UPLOAD_ERR_PARTIAL:
                $errorMessage='качен частично';
                echo$errorMessage;
                
                //die;//-------------------
                break;
            case 4://UPLOAD_ERR_NO_FILE:
                $errorMessage='файла не беше качен';
                echo$errorMessage;
                break;
            case 5://UPLOAD_ERR_NO_TMP_DIR:
                $errorMessage='the file size is too large';
                echo$errorMessage;
                break; 
            case 6://UPLOAD_ERR_CANT_WRITE:
                $errorMessage='файла неможе да бъде записан';
                echo$errorMessage;
                break;
            case 7://UPLOAD_ERR_EXTENSION:
                $errorMessage='не се поддържат файлове с такива разширения';
                echo$errorMessage;
                break;
           
        }
    }
}
$viewFile=VIEWS_DIR.'/profile.php';

require_once VIEWS_DIR.'/template.php';