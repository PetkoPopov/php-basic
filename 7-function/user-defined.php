<?php

/* потребителски  собствени функции 
 * идеята е да съберат блок с код който да се използва посредством с името си 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**this func is very cool
 */
function my_function_name()
{
    echo 'this is in my user defined function ';
}
my_function_name();
/**
 * redirect the browser to specific page 
 * @param string $page redirected
 */
function redirect(string $page,array $params=[]){
    //header('Location: index.php?page='.$page);
    $url= build_url($page,$params);
    //exit();
    echo 'Location'.$url;
}
//redirect('login');
/**
 * buildss URL by given page name
 * @param string $page
 * @return string the build URL
 */
function build_url(string $page , array $params=[]): string
{
    //втория параметър има стойност по подразбиране празен масив 
    //и ако бъде извикана само с един ппараметър той ще има стойност зададена  
    // при дефинирането 
    //$паге='Логин' $params=[''$error''=>1,'logout'=>1]
    //index.php?page=login&error=1&logout=1
    $params['page']=$page;
    $urlParams= http_build_query($params);
    return 'index.php?'.$urlParams;
}

$url=build_url('login');
echo'<br/>'. $url;
//променливите вътре в функц са локални и нямат връзка с проме
//нливите дефинирани извън функциите 
//Проенлливите ивън функцииите се наричат глобални 
//те не си влияят
//вътре във функцията нямаме достъп до глобалните 
//достъп до глобалните вътре във функцията чрезмасива глобалс 
//като имената са ключове но строго не се препоръчва 
//по добре да се подава като параметр или повече фукции или нещо друго
// но не правете глобал във функцията 
//има и суперглобални които са достъпни навсякъде 
//
//



















