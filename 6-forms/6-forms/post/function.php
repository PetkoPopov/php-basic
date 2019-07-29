<?php
function redirect(string $page='',array $params=[]){
    //header('Location: index.php?page='.$page);
    $url= build_url($page,$params);
     header('Location:'. $url);
    exit();
 // echo  header('Location:'. $url);
}
//redirect('login');
/**
 * buildss URL by given page name
 * @param string $page
 * @return string the build URL
 */
function build_url(string $page='' , array $params=[]): string
{
    //втория параметър има стойност по подразбиране празен масив 
    //и ако бъде извикана само с един ппараметър той ще има стойност зададена  
    // при дефинирането 
    //$паге='Логин' $params=['$error'=>1,'logout'=>1]
    //index.php?page=login&error=1&logout= 1
    $params['page']=$page;
    $urlParams= http_build_query($params);
    return 'index.php?'.$urlParams;
}
//redirect();
//$url=build_url('');
//echo'<br/>'. $url;

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

