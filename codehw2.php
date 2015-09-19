<!DOCTYPE html>
<html>
<head></head>
<body>
<h1> Challenge: ISBN Validation </h1>
    
<?php

$isbn_entry= "0143105426";
//calls the function $isbn_validator and uses the $isbn_entry as the parameter
$isbn_validated= isbn_validator($isbn_entry);  

echo "Checking ISBN " . $isbn_entry . " ... <br> <br>";

// this does the actual validation, checking to see if the returned value is true or not
if (is_int($isbn_validated) == TRUE){
    echo "This is a valid ISBN";}
else {
    echo "This is not a valid ISBN";}

function isbn_validator($isbn_entry){
    
//the following code separates the isbn into distinct digits 
$digit1= substr($isbn_entry,0,1);
$digit2= substr($isbn_entry,1,1);
$digit3= substr($isbn_entry,2,1);
$digit4= substr($isbn_entry,3,1);
$digit5= substr($isbn_entry,4,1);
$digit6= substr($isbn_entry,5,1);
$digit7= substr($isbn_entry,6,1);
$digit8= substr($isbn_entry,7,1);
$digit9= substr($isbn_entry,8,1);
$digit10= substr($isbn_entry,9,1);
    
//the if statement converts an X into a 10 so it can be solved mathematically
if ($digit10 === "X" or $digit10=== "x"){
    $digit10= "10";
}    

$isbn_formula = ((10 * $digit1) + (9 * $digit2) + (8 * $digit3) + (7 * $digit4) + (6 * $digit5) + (5 * $digit6) + (4 * $digit7) + (3 * $digit8) + (2 * $digit9) + (1 * $digit10))/11;
    
return $isbn_formula; 

}

?>
 
<h1> Challenge: Coin Toss </h1>    

<?php

$flip_number = mt_rand(1,9);   

//this while loop makes sure that only odds are returned
while ($flip_number % 2 == 0){
    mt_rand(1,9);
}

echo "Flipping a coin 1 time: <br>";
heads_or_tails();
echo "<br><br>";

echo "Flipping a coin 3 times: <br>";
for($flip_number = 0; $flip_number <= 2; $flip_number++){
    heads_or_tails();  
} 
echo "<br><br>";

echo "Flipping a coin 5 times: <br>";
for($flip_number = 0; $flip_number <= 4; $flip_number++){
    heads_or_tails();  
} 
echo "<br><br>";

echo "Flipping a coin 7 times: <br>";
for($flip_number = 0; $flip_number <= 6; $flip_number++){
    heads_or_tails();  
} 
echo "<br><br>";

echo "Flipping a coin 9 times: <br>";
for($flip_number = 0; $flip_number <= 8; $flip_number++){
    heads_or_tails();  
} 
echo "<br><br>";

?>
    
<h3> Now flip until you get two heads in a row! </h3>
<p> Beginning the coin flipping...</p>   
    
<?php 
//last_face will track the most recent flip, starting with tails so that the loop will continue even if heads is flipped first
$last_face = 1;
$face = 0;
//the count variable will count the number of loop iterations
$count = 0;

//The while loop will run as long as both the current and last flip didn't return heads, aka as long as it is true.
while(true) {
    $face = heads_or_tails();  
    $count++;
    if ($face == 0 and $last_face == 0){
    break;
    }
    $last_face = $face;
}

echo "<br>";
echo "It took " . $count . " flips to get two heads! <br>";

//The heads_or_tails function will choose between two numbers (0 or 1) to simulate flipping a coin and print out the resulting image    
function heads_or_tails(){
    if (mt_rand(0,1) == 0) {
        echo "<img src= \"heads.jpg\" alt=\"Heads\" height=\"70\" width=\"60\">";
        $side=0;
    }
    else {
        echo "<img src=\"tails.jpg\" alt=\"Tails\"height=\"70\" width=\"60\" >";
        $side=1;
    }
    return $side;
}

?>    
</body>
</html>