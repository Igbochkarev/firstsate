<?php
header('Content-Type: text/html;charset=utf-8');

echo "Hello World Igor"."<br>";
// это было

//задание 1
echo "Задание 1". "<br>";
$name = "Igor";
$age =52;
echo "Меня зовут ", $name."<br>";
echo "мне ", $age, " года". "<br>";

echo "Задание 2". "<br>";

$name2="Игорь";
$age2=52;
echo " меня зовут ", $name2,",", " мне ", $age2, "года". "<br>";

echo "задание 3". "<br>";//Объявляем константу Самарский регион.
define("Самарская область",63,true);
if (defined("Самарская область")==true) echo "Константа Самарская область объявлена"."<br>";
echo "Задание 4". "<br>"; // оператор если
$age4=80; // создали переменную и присвоили значение 25
//if ($age4<18) echo "Вам еще рано работать";
if ($age4<65 && $age4>17)echo "Вам еще работать и работать"."<br>";
if ($age4<17) echo "Вам еще рано работать"."<br>";
if ($age4>65) echo "Вам пора на пенсию"."<br>";

echo "Задание 5"."<br>";
$day=15;
switch($day){
    case ($day>=1 && $day<=5):
    //case 2:
   // case 3:
        echo "Рабочий день". "<br>";
        break;
    case 6:
    case 7:
         echo "Выходной". "<br>";
         break;
    default: echo "нет таких". "<br>";
}
echo "Задание 6"."<BR>";
//создание многомерного ассоциативного массива
$A["BMW"]=array("model"=>" X5","speed"=>" 190","doors"=>" 5","year"=>" 2015");
$A ["toyota"]=array("model"=>"korola","speed"=>"180","doors"=>"4","year"=>"2014");
echo "BMW";
echo $A["BMW"]["model"];
echo $A["BMW"]["speed"]; echo $A["BMW"]["doors"];echo $A["BMW"]["year"];