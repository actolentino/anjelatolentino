<center>
Welcome to My Simple Calculator

<form action="site.php" method="GET">
     Input Num1: <input type="number" name="num1">
     Input Num2: <input type="number" name="num2">
     <input type="submit">
     
</form>

<?php
 echo "<body style='background-color:red'>";
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     print $num1 + $num2;
?>
