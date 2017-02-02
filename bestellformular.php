<?php
session_start();
if(isset($_SESSION['email'])) {
   echo "Herzlich Willkommen  " .$_SESSION['email'];
} else {
   echo "Bitte erst einloggen";
}
?>

<ul class="topnav" id="myTopnav">
  <li><a href="/index.php">Home</a></li>
  <li><a href="/speisekarte.php">Speisekarte</a></li>
  <li><a href="/bestellung.php">Bestellung</a></li>
  <li><a href="/kontakt.php">Kontakt</a></li>
</ul>


<style type="text/css">
ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    /* Float the list items side by side */
    
}
/* Float the list items side by side */
ul.topnav li {float: left;}

ul.topnav li a {
    display: inline-block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}
/* Change background color of links on hover */
ul.topnav li a:hover {background-color: #555;}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {display: none;}

</style>
    <style type="text/css">
    html {
    background: url(images/1.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
}
    </style>