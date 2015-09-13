<!DOCTYPE html>
<html>
<head></head>
<body>

<h1> Challenge: Correct Change </h1>

<?php

$change = 234;
$dollars = floor($change/100);
$quarters = floor(($change - ($dollars*100))/25);
$dimes = floor(($change - (($dollars*100) + ($quarters*25)))/10);
$nickles = floor(($change - (($dollars*100)+ ($quarters*25) + ($dimes*10)))/5);
$pennies = ($change -(($dollars*100)+($quarters*25)+($dimes*10)+($nickles*5)));    

If ($change >= 0){
    echo "You are due " . $change . " cents back in change total.";
    echo "<br>";
    echo "You are due back " . $dollars . " dollar(s), " . $quarters . " quarter(s), " . $dimes . " dime(s), " . $nickles . " nickle(s), and " . $pennies . " cent(s).";
}

If ($change <0){
    echo "You owe me money!";
}

?>
    
</body>
</html>