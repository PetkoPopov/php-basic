
    <?php
    //controlers/profile/process.php
    //тук ще се извършва редакция на профила 

   
        // вземаме данните на потребителя и ги валидираме 
        //echo'PROCESS /PROFLE';die;// ако излиза значи сме дошл дотук и сис. работи 

// $userFile= DATA_DIR . '/users';
// $fileContent= file_get_contents($userFile);
// $users=json_decode($fileContent,true);//това е масив с масиви на всички потребители 
                         // като ключ на всеки отделен е негович имаейл
                        ///  echo'<pre>';
                         //print_r($users);
                        //echo'</pre>';//die;
    //$_FILES-съдържа инфо за качен през форма файл 
    //първия разред ключове са имена на инпут тагове 
    //за всеки инпут има допълниителна инфо като масив 
    //
    if(!empty($_FILES['avatar']))
    {
        $file=$_FILES['avatar'];
       //print_r($_FILES);die;//-------------------
  
      
        //if($file['error']!=0)
        if($file['error']!=UPLOAD_ERR_OK)
        {
            $errorCode=$file['error'];
            
           switch($file['error'])
           {
                     case 1:
                           
                       
                           redirect('profile',['error'=>'avatar','errorCode'=>$errorCode]);
                           
                            break;
                     case 2:
                            
                        
                           redirect('profile',['error'=>'avatar','errorCode'=>$errorCode]);
                            break;
                     case 3:
                           
                           redirect('profile',['error'=>'avatar','errorCode'=>$errorCode]);
                            break;
                     case 4:
                            
                           redirect('profile',['error'=>'avatar','errorCode'=>$errorCode]);
                            break;
                     case 5:
                             
                     case 6:
                                    
                           redirect('profile',['error'=>'avatar','errorCode'=>$errorCode]);
                            break; 
                     case 7:
                         
                           redirect('profile',['error'=>'avatar','errorCode'=>$errorCode]);
                         break;
                     case 8:
                        
                           redirect('profile',['error'=>'avatar','errorCode'=>$errorCode]);
                     break;
                
                        default :
                       redirect('profile',['error'=>'avatar','errorCode'=>$errorCode]);
     
           }
    }}
            
        
        $unique=uniqid();
        $avatarName=$unique.'_'.$file['name'];//сглобяв уникалмно име на нашия файл 
        $avatarPath=DATA_DIR.'/avatars/'.$avatarName;// създваме пътя където ще стои нашия файл
        if(move_uploaded_file($file['tmp_name'], $avatarPath)){
            $_SESSION['user']['avatar']='data/avatars/'.$avatarName;
                }
   
    echo 'STEP....1<br/>';//-------------------------------
     $user=$_SESSION['user'];  
   // print_r($user);die;//-------------
if(!empty($_POST['password']))
{
    //print_r($user);die;---------------------
    echo 'YOU HAVE POST..........2<br/>';//---------------------------
    
    $user['first_name']=$_POST['first_name'];
    $user['last_name']=$_POST['last_name'];

        if(password_verify($_POST['password'], $user['password'])&&$_POST['new_password']==$_POST['confirm_new_password'])
        {
            echo 'PASSWORD IS VERFYED......3<br/>';//------------------------
    $user['password']= password_hash($_POST['new_password'],PASSWORD_DEFAULT);//сменме паролата с нова 
     $user['modified_on']=date('d.m.Y, H:i:s');                              //дата на промяна
     //print_r($user);die;------------
       }
        else
       {   
    
    $param['error']=9;//грешката е 10-паролата не съществува или не съвпадат
    redirect('profile',$param);
       }

}
else 
{
    ////echo 'EMPTY PASSWORD';DIE;----------------------
    $user['first_name']=$_POST['first_name'];
$user['last_name']=$_POST['last_name'];
$user['modified_on']=date('d.m.Y, H:i:s');   

}
//print_r($_SESSION['user']['email']);die;//РАЗАРАБОТКА------------------------
$userFile= DATA_DIR . '/users';
$_SESSION['user']=$user;
$users[$_SESSION['user']['email']]=$user;
echo "new user is ......4<br/>";//--------------------------------
///print_r($users[$_SESSION['user']['email']]);die;//------------------
    $userString=json_encode($users);
   if( file_put_contents($userFile,$userString))
   {
       echo 'SUCCESS....5<br/>';//------------------------------------------
      
   }
   
 
//print_r($user);die;
    redirect('home');









