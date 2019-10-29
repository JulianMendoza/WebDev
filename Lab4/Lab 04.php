<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Lab 04</title>
    <style>
        main {
           position: relative;
        }
        span {
            height: 15px;
            width: 15px;
            border: solid black 1px;
            margin:1px;
            display:inline-block;
            position:absolute;
        }
    </style>
</head>
<body>
<main>
<?php
include('rainbowIterator.php');

echo "<h1> Using iterator: ".$iterator."</h1>";
//YOUR CODE GOES HERE
//$red=$green=$blue=0; Not necessary
$top=50; //make the first palette row 50px below the page
$left=0;
for ($red=0;$red<255;$red+=$iterator) {
    for ($green=0;$green<255;$green+=$iterator) {
        for ($blue=0;$blue<255;$blue+=$iterator) {
            /*
            sprintf('%02x',arg) - > converts the arg to a string with 2 decimals in hex
            lines 37-40 are for legible code
            */
            $redhex=sprintf('%02x', $red);
            $greenhex=sprintf('%02x', $green);
            $bluehex=sprintf('%02x', $blue);
            $stringhex=$redhex.$greenhex.$bluehex;
            echo "<span style =\"left:".$left."px; top:".$top."px;background-color: rgb(".$red.",".$green.",".$blue.");\" title =\"".$stringhex."\"></span>";
            $left+=15;
            /*
            in the for loop logic, all red elements are grouped together so lets just put them on the same row
            spacing them 15px next to eachother (will be moved to 17 since the borders)
            */
        }
    }
    //reset the left spacing and go down a row
    $left=0;
    $top+=22;
}
?>
</main>
</body>
</html>
