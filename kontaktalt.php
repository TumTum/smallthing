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
<body>

<h1 style="margin-top: 70px">So finden Sie Uns!</h1>

<div id="googleMap" style="position:absolute;top:20%;left:0;width:100%;height:500px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

</body>
</html>