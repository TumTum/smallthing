<?php include "src/bootstrap.php" ?>
<html>
    <head>
        <title>Bitte Einloggen</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link type="text/css" rel="stylesheet" media="screen" href="style.css"/>
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
                left:0%;
                top:0;
                z-index: 1;
                width: 100%;
                /* Float the list items side by side */

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
            html {
                background: url(images/1.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
            }
        </style>
    </head>
    <body>
    <ul class="topnav" id="myTopnav">
        <li><a href="/index.php" >Home</a></li>
        <li><a href="/speisekarte.php">Speisekarte</a></li>
        <li><a href="/bestellung.php">Bestellung</a></li>
        <li><a href="/kontakt.php">Kontakt</a></li>
        <li><a href="/mitarbeiter_login.php" class="active">Mitarbeiter-Login</a></li>
    </ul>
    <div id="logincontainer">
	<div class="formular">
	<br>
   <form action="include/process_login_mitarbeiter.php" method="post" name="login_form"> 
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Fehler bei der Anmeldung!</p>';
        }
        ?> 
        <form action="include/process_login_mitarbeiter.php" method="post" name="login_form">                      
            <br>Email:<br><input class="text" type="" name="email" /> <br><br>
            Passwort:<br> <input class="text" 
							 type="password"
                             name="password" /> <br><br>
            <input class="button" type="submit"
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> <br><br> 
        </form>
        <p>Sie sind aktuell <?php echo $logged ?>.</p>
		</div>
		</div>
    </body>
</html>