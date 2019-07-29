
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
      $user=$_SESSION['user'];     
if(!empty($_POST['password'])){
    $user['first_name']=$_POST['first_name'];
$user['last_name']=$_POST['last_name'];
//print_r($user);die;
if(password_verify($_POST['password'], $user['password'])&&$_POST['new_password']==$_POST['confirm_new_password']){
    $user['password']= password_hash($_POST['new_password'],PASSWORD_DEFAULT);//сменме паролата с нова 
     $user['modified_on']=date('d.m.Y, H:i:s');                              //дата на промяна
            
}
else
{   
    
    $param['error']=9;//грешката е 10-паролата не съществува или не съвпадат
    redirect('profile',$param);
}

}
else 
{
    //echo 'EMPTY';DIE;
    $user['first_name']=$_POST['first_name'];
$user['last_name']=$_POST['last_name'];

}
//print_r($user);die;
$_SESSION['user']=$user;
$users[$email]=$user;
    $userString=json_encode($users);
    file_put_contents($userFile,$userString);
 
 redirect();









