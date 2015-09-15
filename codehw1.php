<!DOCTYPE html>
<html>
<head></head>
<body>

<h1>  Challenge: Correct Change </h1>

<?php

//Change should be in cents
$change = 245;

//floor is used to round to the next lowest whole number
If ($change >= 0) {
    echo "You are due back " . $change . " cents in change total.";
    
    $dollars = floor($change/100);
    $change = $change - ($dollars * 100);

    $quarters = floor($change/25);
    $change = $change - ($quarters * 25);

    $dimes = floor($change/10);
    $change = $change - ($dimes * 10);

    $nickles = floor($change/5);
    $change = $change - ($nickles * 5);

    $pennies = $change;

    echo "<br>";
    echo "You are due back " . $dollars . " dollar(s), " . $quarters . " quarter(s), " . $dimes . " dime(s), " . $nickles . " nickle(s), and " . $pennies . " cent(s).";
}

//else statement is added in case a negative number is entered
else
{
    echo "You owe me money!";
}

?> 

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