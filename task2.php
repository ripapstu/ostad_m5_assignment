<?php

$expenses =[
    "food" => 500,
    "transport" => 300,
    "other_expenses" => 500
 ];
   
 

     echo "<pre>";
     print_r($expenses);
     echo "</pre>";
// Add and remove elements
    $array_new = [10, 20, 30];

     array_push($array_new, 40);
     echo "<pre> Array Push : ";
     print_r($array_new);
     echo "</pre>";
     echo "<br>";

     array_pop($array_new);
     echo "<pre> Array Pop : ";
     print_r($array_new);
     echo "</pre>";
     echo "<br>";

$array_new2 =  [5, 3, 7];

     $array_new3 =array_merge($array_new,$array_new2);
     echo "<pre> Array Merge : ";
     print_r($array_new3);
     echo "</pre>";

     $array_sum = array_sum($expenses);
     echo("Sum :" .$array_sum);
echo "<br>";
// Convert string to array

 $string_data = "500,300,500";
    $explode_str = explode(",", $string_data);
    echo "<pre>";
    print_r($explode_str);

echo "<br>";
// Convert array to string
    $string_data2 = implode(",", $explode_str);
    echo $string_data2;

echo "<br>";

//4. Use String function    
$name = "Hello world";

 echo strlen($name);
 echo "<br>";
 echo strtoupper($name);
 echo "<br>";
 echo substr($name, 0, 5);
 echo "<br>";
 echo str_replace("world", "PHP", $name);
 echo "<br>";

 //5.File creation
file_put_contents('expenses.txt', implode("\n", $expenses));

//6. File append and read
file_put_contents('expenses.txt', "\n100", FILE_APPEND);

echo file_get_contents('expenses.txt');

?>