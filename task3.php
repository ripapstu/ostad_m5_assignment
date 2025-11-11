<?php

session_start();

if(isset($_SESSION['name']) && isset($_SESSION['budget'])){
    echo "Welcome, {$_SESSION['name']}! Your budget is {$_SESSION['budget']}.";
}

if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['budget'] = $_POST['budget'];
}

echo "<form action='task3.php' method='post'>";
echo "Name: <input type='text' name='name' />";
echo "Budget: <input type='number' name='budget' />";
echo "<input type='submit' name='submit' value='Submit' />";
echo "</form>";

echo "<br><br>";

echo "<form action='task3.php' method='post'>";
echo "<input type='submit' name='delete' value='Delete Session' />";
echo "</form>";

echo "<br><br>";


if(isset($_POST['delete'])){
    session_unset();
    session_destroy();
}

function recursiveSum($array){
    $sum = 0;
    foreach($array as $item){
        if(is_array($item)){
            $sum += recursiveSum($item);
        }else{
            $sum += $item;
        }
    }
    return $sum;
}

echo "Sum of Array : ".recursiveSum([1, 2, [3, 4], 5]);


echo "<br><br>";
function applyDiscount($price, $callback){
    return $callback($price);
}

function discount($price){
    return $price * 0.9;
}   

echo "Discounted Price : ".applyDiscount(100, "discount");

echo "<br><br>";
function divide($a, $b){
    try{
        if($b == 0){
            throw new Exception('Cannot divide by zero');
        }
        return $a / $b;
    }catch(Exception $e){
        echo $e->getMessage();
    }finally{
        echo "<br>";
    }
}

if(isset($_POST['divide'])){
    try{
        $result = divide($_POST['a'], $_POST['b']);
        echo "Result: $result";
    }catch(Exception $e){
        echo $e->getMessage();
    }
}



echo "<form action='task3.php' method='post'>";
echo "a: <input type='number' name='a' />";
echo "b: <input type='number' name='b' />";
echo "<input type='submit' name='divide' value='Divide' />";
echo "</form>";

?>