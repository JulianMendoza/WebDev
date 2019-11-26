<!DOCTYPE HTML>
<html>

<head>
	<title>Shopping Cart Contents</title>
	<meta charset="utf-8" />
</head>
<body>
  <h1>Your Shopping Cart</h1>
  <div>To date, your shopping cart contains:</br>

<?php
/**
Author: Julian Mendoza 101067270
Saving states of a website using sessions.
Flaws: User can input numbers or letters in any of the fields in the shopping Cart
Doesn't allow the user to add duplicate items.
*/

//If the user comes from the page shop.html it will perform the logic to create or
//add to the shopping cart.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start(); //Creates a session if a session doesn't already exist,
    if (!isset($_SESSION['item']) && !isset($_SESSION['amount'])) { //creates two arrays which will contain the item and the amount
        $_SESSION['item']=array();
        $_SESSION['amount']=array();
    }
    if ($_POST['item']!=''&&$_POST['amount']!='') { // if any of the fields were empty, don't add to the array
      if (!in_array($_POST['item'], $_SESSION['item'])) { //Don't allow duplicate items
        array_push($_SESSION['item'], $_POST['item']);
          array_push($_SESSION['amount'], $_POST['amount']);
      }
    }
    /*
     Display the contents of the shopping cart
    */
    if (count($_SESSION['item'])!=0) {
        for ($i=0;$i<count($_SESSION['item']);$i++) {
            echo $_SESSION['amount'][$i].' '.$_SESSION['item'][$i].'</br>';
        }
    } else {
        echo 'Nothing, your shopping cart is empty';
    }
} else { //the only other way we got to this page was from clearing the shopping cart, so destroy the session
    session_start();
    session_destroy();
    echo 'Nothing, your shopping cart is empty';
}
?>
<p>
<a href='shop.html'>Continue Shopping</a></br>
<a href='showCart.php'>Clear shopping cart</a>
</p>
