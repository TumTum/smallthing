<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrationsformular</title>
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
            /* Change background color of links on hover */
            ul.topnav li a:hover {background-color: #555;}

        </style>
    </head>
    <body>

        <ul class="topnav" id="myTopnav">
            <li><a href="/index.php" class="active">Home</a></li>
            <li><a href="/speisekarte.php">Speisekarte</a></li>
            <li><a href="/bestellung.php">Bestellung</a></li>
            <li><a href="/kontakt.php">Kontakt</a></li>
            <li><a href="/mitarbeiter_login.php">Mitarbeiter-Login</a></li>
        </ul>
        <!-- Anmeldeformular für die Ausgabe, wenn die POST-Variablen nicht gesetzt sind
        oder wenn das Anmelde-Skript einen Fehler verursacht hat. -->
        <h1>Registrieren Sie sich</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Benutzernamen dürfen nur Ziffern, Groß- und Kleinbuchstaben und Unterstriche enthalten.</li>
            <li>E-Mail-Adressen müssen ein gültiges Format haben.</li>
            <li>Passwörter müssen mindest sechs Zeichen lang sein.</li>
            <li>Passwörter müssen enthalten
                <ul>
                    <li>mindestens einen Großbuchstaben (A..Z)</li>
                    <li>mindestens einen Kleinbuchstabenr (a..z)</li>
                    <li>mindestens eine Ziffer (0..9)</li>
                </ul>
            </li>
            <li>Das Passwort und die Bestätigung müssen exakt übereinstimmen.</li>
        </ul>
        <form action="#" method="post" name="registration_form">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type='text' name='username' id='username' /></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" id="email" /></td>
                </tr>
                <tr>
				<tr>
					<td>Vorname:</td>
					<td><input type="text" name="vorname" id="vorname" /></td>
				</tr>
				<tr>
					<td>Nachname:</td>
					<td><input type="text" name="nachname" id="nachname" /></td>
				</tr>
				<tr>
					<td>Straße:</td>
					<td><input type="text" name="strasse" id="strasse" /></td>
				</tr>
				<tr>
					<td>Hausnummer:</td>
					<td><input type="text" name="hausnummer" id="hausnummer" /></td>
				</tr>
				<tr>
					<td>PLZ:</td>
					<td><input type="number" name="plz" id="plz" /></td>
				</tr>
				<tr>
					<td>Ort:</td>
					<td><input type="text" name="ort" id="ort" /></td>
				</tr>
				<tr>
					<td>Telefonnummer:</td>
					<td><input type="text" name="telefonnummer" id="telefonnummer" /></td>
				</tr>
                <tr>
                    <td>Passwort:</td>
                    <td><input type="password" name="password" id="password"/></td>
                </tr>
                <tr>
                    <td>Passwort wiederholen:</td>
                    <td><input type="password" name="confirmpwd" id="confirmpwd" /></td>
                </tr>
            </table>
            
            <input type="button" 
                   value="Registrieren"
                   style=float:left;margin-left:270px;" />
        </form>
        <br>
        <p>Zurück zum <a href="login.php">Loginfenster</a></p>
    </body>
</html>