<?php
// Start the session
session_start();
?>
     <!--Header-->
    <?php include 'menu.php';?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <link href="styles/default.css" rel="stylesheet">
    <title>About</title>
</head>
<body id="aboutusbody">

    <!--Config-->
    <?php require_once('config.php');?>
     <span id="userid" class="hide"><?php echo $_SESSION[SESSION_USER][USERID_COLUMN] ?></span> 
     <span class="hide"><?php echo $_SESSION[SESSION_USER][USERID_COLUMN] ?></span>

    <img class="aboutimage" src="img/home/Black.png"/>
    <div class="about">
        <p>
            Grab it Up is an Online Technology Store that offers wide range of latest techs. As our company has grown and our software has evolved, our focus has remained unchanged since the inception of Grab it Up in 2016. We provide effective online tools to help people connect with the rapidly evolving technology.
        </p>
        
        <p>
        <ol>
        <li>'Grab it Up' is an online technology store that offers wide range of latest tech products in the market
        <li>Users can register in the sign-up page to become a customer and to purchase a product
        <li>Our system supports 'search' and 'filter by brand' functionalities
        <li>Customers can click buy button to purchase a product
        <li>Clicking buy button adds the product to the cart. We provide an option to modify / delete the products that are added to the cart
        <li>Once the checkout button is clicked, we ask for a confirmation to double check on the products. Acknowledging will result in purchasing the product
        <li>We maintain the purchase history of our customers and we also show them the amount they saved by shopping with us
        <li>Guests are allowed to browse our products, but will not be able to add any product to the cart without signing in
        <li>Guest can register a new user account. To be an admin, an account has to be created by a DBA of our technical team
        </ol>
        </p>


    </div>

    <div class="clear"></div>
    <!--Footer-->
    <?php include 'footer.php';?>        
</body>
</html>