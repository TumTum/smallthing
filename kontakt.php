 <ul class="topnav" id="myTopnav">
  <li><a href="/index.php">Home</a></li>
  <li><a href="/speisekarte.php">Speisekarte</a></li>
  <li><a href="/bestellung.php">Bestellung</a></li>
  <li><a href="/kontakt.php" class="active">Kontakt</a></li>
  <li><a href="/mitarbeiter_login.php">Mitarbeiter-Login</a></li>
</ul>


<style type="text/css">

body {
	font-family: "Open Sans";
	display: flex;
	justify-content: center;
    background-color: gray;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-attachment: fixed;
}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	position: fixed;
	top:0;
	left:0;
	z-index: 1;
	width: 100%;
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

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {display: none;}

</style>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        .before::before, .after::after {
            content: "\A";
            white-space: pre;
        }
    </style>
</head>
<body>
  <main>
	<div style= "font-Size:30px; position:absolute;top:11%;width:Auto;height:77.5% size:20%">So finden Sie Uns!</div>
	<div id="googleMap" style="position:absolute;top:20%;left:20%;width:79%;height:77.5%;"></div>
	<div style="position:absolute;top:20%;left:1%;width:Auto;height:77.5%">
	Kontakt:<span class="before">
	Max Mustermann<span class="before">
	Drausnickstasse 45<span class="before">
	91058 Erlangen<span class="before"><span class="before"><span class="before"><span class="before"><span class="before">
	<span class="before"><span class="before"><span class="before"><span class="before"><span class="before">
	<span class="before"><span class="before"><span class="before"><span class="before"><span class="before">
	<span class="before"><span class="before"><span class="before"><span class="before"><span class="before">
	<span class="before"><span class="before">
	Max@Mustermail.de</div>
  </main>
  <script>
	function myMap() {
	var mapProp= {
		center:new google.maps.LatLng(49.596255, 11.028595),
		zoom:15,
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);	
	}
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
</body>
</html>