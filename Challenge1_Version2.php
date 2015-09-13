<!DOCTYPE html>
<html>
<head></head>
<body>

<h1>  Challenge: Correct Change </h1>

<?php

//Change should be in cents
$change = 295;

echo "You are due back " . $change . " cents in change total.";

//floor is used to round to the closest whole number
If ($change >= 0) {
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
    echo "You have no change";
}

?>

</body>
</html>