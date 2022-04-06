
<center>
<form action="site.php" method="GET">
     Num1: <input type="number" name="num1">
     Num2: <input type="number" name="num2">
     <input type="submit">
     
</form>

<?php
 echo "<body style='background-color:pink'>";
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     echo $num1 + $num2;
?>
