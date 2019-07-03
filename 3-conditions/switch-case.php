<?php

//3-conditions/switch-case.php

//да изпълняват различен код при дадени условия 
//switch-case- когато условието очаква определи  "известни" стойноси 
//switch(<condition>){
// case "value1":
//     //code...
//     //code...
//     break;
//     
//     case "value2":
//     //code...
//     //code...
//     break;
// .
// .
// .
// .
// case "valueN":
//     //code...
//     //code...
//     break;
// 
// default:
//     //code...
//     //code...
//     //изплнв когато няма цайс случай 
//     //ако е най отдолу не се нуждае от бреак 
//     
//                   }
$randomInt=rand(1,10);
//switch($randomInt){
//case 1:
//echo 'зипехвсуьшь ';
//break;
//case 2:
//    echo 'Zdrasti';
//default:
//    echo "$randomInt no such number";
//}
echo $randomInt."<br/>";
switch($randomInt){
    case 1:
    case 3:
    case 5:
    case 7:
    case 9:
        echo 'the value is odd';
        break;
    default:
        echo "the num is even";

        
        
        
        
        
}







