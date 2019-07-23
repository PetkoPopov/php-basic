<?php

// search.php

/*
 * 1. Форма за търсене на хора
 * 2. Търсенето да става в първото име, фамилията, email-a и слоган.
 * 3. Ако формата не е попълнена да се показва пълен списък с всички хора
 * 
 * Информацията за хората е записана в example_users.json
 */

// Взимане на съдържание на файл:
$fileContent = file_get_contents('../../../example_users.json');
// Превръща низ форматиран в JSON в асоциативен масив:
// (втория параметър true кара резултата да е масив, а не обект!)
$users = json_decode($fileContent, true);

// Цикъл foreach - използва се само за масиви, като ги обхожда от началото до
// края ако не е прекъснат някъде с break.
// foreach ($array as $value) { ... }

// Суперглобална (свръхглобална) променлива $_GET
// Асоциативен масив, генериран от PHP и съдържащ информацията
// URL параметрите.

$keyword = '';

// empty($value) -> true (Null, false, 0, '', [], '0')
// Ако формата НЕ е празна:
if (!empty($_GET)) {
    // Взимаме стойността от текстовото поле и я "почистваме":
    // 1. Премахваме HTML таговете с функция strip_tags():
    // 2. Премахваме водещи интервали с функция trim():
    $keyword = trim(strip_tags($_GET['keyword']));
   
    // Проверяваме дали има изпратена валидна стойност в полето за търсене:
    if (!empty($keyword)) {
        // Ще съдържа филтрирания списък на потребителите:
        $filtered = [];
        // Обхождаме всички потребители и проверяваме дали техните имена
        // съдържат стойността от полето за търсене:
        
        
        foreach ($users as $user) {
            if(!array_key_exists('search_in', $_GET)|| !is_array($_GET['search_in']))  {
                break;
            }
            
            
            //        strstr($haystack, $needle); // Дава true ако $needle се съдържа в $haystack
            // Проверка дали думата се съдържа в името или фамилията:
            if (in_array('names',$_GET['search_in'])&&
                   ( strstr($user['first_name'], $keyword) || 
                strstr($user['last_name'], $keyword)))
            {
                // Ако кода е влезнал в този блок, добавяме потребителия
                // в списъка с филтрирани:
                $filtered[] = $user;
               
            }
            if(in_array('email',$_GET['search_in']) && strstr($user['email'],$keyword) && !in_array($user,$filtered)){
                $filtered[]=$user;
                
            }
            if(in_array('slogans',$_GET['search_in'])&& strstr($user['slogans'],$keyword) && !in_array($user,$filtered)){
                $filtered[]=$user;
            }
        }
        // Задаваме намерените резултати в масива за показване на екрана:
        $users = $filtered;
    }
}

require_once 'template.php';
