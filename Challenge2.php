<!DOCTYPE html>
<html>
<head></head>
<body>

<h1> Challenge: 99 Bottles of Beer </h1>
   
<?php

// change the $starting variable to change starting number of bottles
$starting = 99;

for ($bottles = $starting; $bottles >= 0; --$bottles) 
{
    echo $bottles . " bottles of beer on the wall. " . $bottles . " bottles of beer!"; 
    echo "<br>";
    echo "Take one down and pass it around. " . $bottles . " bottles of beer on the wall!";
    echo "<br>";
}
?>
    
</body>
</html>