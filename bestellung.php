<?php include "src/bootstrap.php" ?>
<html>
<head>
    <title>Fastfood MacAPPLE - Bestellung</title>
    <link type="text/css" rel="stylesheet" media="screen" href="css/style.css"/>

    <style type="text/css">
        body {
            font-family: "Open Sans";
            margin: 20px
            0 0 0;
            display: flex;
            justify-content: center;
            background: url(images/Start1.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-attachment: fixed;
        }

        ul.topnav {
            list-style-type: none;
            padding: 0;
            margin: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            left:0;
            top:0;
            z-index: 1;
            width: 100%;
        }

        ul.topnav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            /* Float the list items side by side */
        }

        .active {
            border-bottom: 5px solid white;
        }

        li a:hover {
            border-bottom: 5px solid gray;
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

        #logincontainer {
            margin: 3em 0;
            background: whitesmoke;
            padding: 2em;
        }

        #logincontainer .formular {
            font-size: 1.9em;
            opacity: 1;
        }
    </style>
</head>
<body>
    <ul class="topnav" id="myTopnav">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/speisekarte.php">Speisekarte</a></li>
        <li><a href="/bestellung.php" class="active">Bestellung</a></li>
        <li><a href="/kontakt.php">Kontakt</a></li>
        <li><a href="/mitarbeiter_login.php">Mitarbeiter-Login</a></li>
    </ul>

    <div id="logincontainer">
        <div class="formular">
            <p>Für Bestellung Bitte <a href="login.php">Einloggen</a></p>
            <p>Nicht Mitglied? <a href="register.php">Hier Registrieren</a></p>
        </div>
    </div>
</body>
</html>
