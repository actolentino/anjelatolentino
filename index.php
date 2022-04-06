<center>
Welcome to My Simple Calculator

<form action="site.php" method="GET">
     Num1: <input type="number" name="num1">
     Num2: <input type="number" name="num2">
     <input type="submit">
     
</form>

<?php
 echo "<body style='background-color:red'>";
     $num1 = $_GET["input number1"];
     $num2 = $_GET["input number2"];
     echo $num1 + $num2;
?>
