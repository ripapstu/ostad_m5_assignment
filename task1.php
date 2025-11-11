<?php

//1. Create constants
define("APP_NAME", "Expense Calculator");
define("AUTHOR", "Khadiza Tul Kobra");

//2. Print them 
echo "App Name : " . APP_NAME . "<br>";
print "Author : " . AUTHOR . "<br>";
printf("App Name :%s, Author : %s \n", APP_NAME,AUTHOR);
echo "<br>";

//3.Create Variables
$food = 500;
$transport = 300;
$other_expenses = 400;

//4. Calculate total and average expense.
$total_expense = $food + $transport + $other_expenses;
$average_expense = $total_expense / 3;

 echo "Total Expenses : " . $total_expense . "<br>";
 echo "Average Expenses : " . $average_expense . "<br>";

//5. Check if total expense is greater than 1000
  if($total_expense > 1000){
    echo "Budget Exceeded";
  }else{
    echo "Within Budget";
  }
    echo "<br>";

//6.Use ternary and switch case for expense range message:
   $expense_range = ($total_expense > 1000) ? "Budget Exceeded" : "Within Budget";
    echo $expense_range . "<br>";

   switch($total_expense){
    case $total_expense > 1000:
        echo "Budget Exceeded"; 
        break;  
    default:
        echo "Within Budget";
        break;
   }
  echo "<br>";

//7. Create a function to calculate total expense
function total_expense($food,$transport,$other_expenses){
    $totalExpense =$food + $transport + $other_expenses;
    return $totalExpense;
}
  echo $totalExpense = total_expense($food, $transport, $other_expenses);
//8. Create a function to check budget
 function checkBudget($total_expense){
    if($total_expense > 1000){
        echo "Budget Exceeded";
    }else{
        echo "Within Budget";

    }
 }
     echo checkBudget($totalExpense);




    









?>