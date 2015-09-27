<!DOCTYPE html>
<html>
<head></head>
<body>

<style>
table#booktable{
    width:70%;
}
table#booktable, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
table#booktable tr:nth-child(even) {
    background-color: #F0F0F0;
}
table#booktable tr:nth-child(odd) {
   background-color:#fff;
}
table#booktable th	{
    background-color: black;
    color: white;
    text-align: left;
}
#total{
    height: 25px;
    width: 170px;
    border: 2px solid;
    border-color: black;
    background-color: #606060; 
    color: white;
    text-align: center;
    font-size: 18px;
}
    
</style>

<h1>Book Information: </h1>
<?php

//First create the array:
$book_data = array(
    array("PHP and MySQL Web Development","Luke Welling",144,"Paperback","$31.63"),
    array("Web Design with HTML, CSS, JavaScript and jQuery", "Jon Duckett",135,"Paperback", "$41.23"),
    array("PHP Cookbook: Solutions & Examples for PHP Programmers", "David Sklar", 14, "Paperback", "$40.88"),
    array("JavaScript and JQuery: Interactive Front-End Web Development", "Jon Duckett", 251, "Paperback", "$22.09"),
    array("Modern PHP: New Features and Good Practices", "Josh Lockhart", 7, "Paperback", "$28.49"),
    array("Programming PHP", "Kevin Tatroe", 26,"Paperback", "$28.96" )
);

/* print a test:
echo "<pre>";
print_r ($book_data);
echo "</pre> <br>"; */

//use HTML to format the table
echo "<table id=\"booktable\">
  <tr>
    <th> Title </th>
    <th> Author </th>
    <th> Page Count </th>
    <th> Type </th>
    <th> Price </th>
  </tr>
  <tr>
    <td>".$book_data[0][0]."</td>
    <td>".$book_data[0][1]."</td>
    <td>".$book_data[0][2]."</td>
    <td>".$book_data[0][3]."</td>
    <td>".$book_data[0][4]."</td>
 </tr>
    <td>".$book_data[1][0]."</td>
    <td>".$book_data[1][1]."</td>
    <td>".$book_data[1][2]."</td>
    <td>".$book_data[1][3]."</td>
    <td>".$book_data[1][4]."</td>
  <tr>
    <td>".$book_data[2][0]."</td>
    <td>".$book_data[2][1]."</td>
    <td>".$book_data[2][2]."</td>
    <td>".$book_data[2][3]."</td>
    <td>".$book_data[2][4]."</td>
  </tr>
    <tr>
    <td>".$book_data[3][0]."</td>
    <td>".$book_data[3][1]."</td>
    <td>".$book_data[3][2]."</td>
    <td>".$book_data[3][3]."</td>
    <td>".$book_data[3][4]."</td>
  </tr>
    <tr>
    <td>".$book_data[4][0]."</td>
    <td>".$book_data[4][1]."</td>
    <td>".$book_data[4][2]."</td>
    <td>".$book_data[4][3]."</td>
    <td>".$book_data[4][4]."</td>
  </tr>
    <tr>
    <td>".$book_data[5][0]."</td>
    <td>".$book_data[5][1]."</td>
    <td>".$book_data[5][2]."</td>
    <td>".$book_data[5][3]."</td>
    <td>".$book_data[5][4]."</td>
  </tr>
</table>";

//substrings are used to remove the dollar sign and make the remainder "addable"
$total_price = ((substr($book_data[0][4],1, 5))+(substr($book_data[1][4],1, 5))+(substr($book_data[2][4],1, 5))+(substr($book_data[3][4],1, 5))+(substr($book_data[4][4],1, 5))+(substr($book_data[5][4],1, 5)));

echo "<p id=total> Total Price: $" . $total_price . "</p>";      
?>    
    
<h1> Coin Toss Continued: </h1>
    
<?php

//Calling the function
coin_flip(4);

function coin_flip($heads){
    //track_sides will become an array that tracks every time multiple heads are flipped in a row
    $track_sides= array();
    $side=0;
    $count=0;
    $heads_number=0;
    //last_side starts on tails so that if a heads is flipped first, nothing will be added to the array
    $last_side= "tails";

//subtracting 1 from heads because the array is only added to when multiple heads are flipped
while ($heads_number < ($heads-1)){  
    if (mt_rand(0,1) == 0) {
        echo "<img src= \"heads.jpg\" alt=\"Heads\" height=\"70\" width=\"60\">";
        $side="heads";
            //This tells the code to add to the array if heads are flipped in a row
            if ($last_side == $side){
                array_push($track_sides, $side);}
            }
    else {
        echo "<img src=\"tails.jpg\" alt=\"Tails\"height=\"70\" width=\"60\" >";
        $side="tails";
            //if a tails is flipped after a heads, breaking the chain, the array is cleared
            if ($last_side=="heads"){
                unset($track_sides);
                $track_sides=array();
            }
    }
    $last_side=$side;
    $heads_number=count($track_sides);
    $count++;  
}

    echo "<br> Flipped ". $heads . " heads in a row in " . $count . " flips!";
}
    
 ?>    
</body>
</html>