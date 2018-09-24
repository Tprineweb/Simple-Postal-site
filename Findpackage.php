<!DOCTYPE html>
<html>
<title>Poor Man's Postal Service</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body onload="Findpackage.php?PackID=1#Find">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="potentialsite.php#home" class="w3-bar-item w3-button"><img src="PMPSlogo.jpg" alt="PMPS logo" width="40" height="50"></a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="potentialsite.php#about" class="w3-bar-item w3-button">About</a>
      <a href="potentialsite.php#Find" class="w3-bar-item w3-button">Find Package</a>
      <a href="potentialsite.php#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>
<br><br>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
    <div class="w3-row w3-padding-64" id="Find">
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pmps";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$ID = $_GET["PackID"];

$sql = "SELECT Package_ID, Package_Info, Last_Location, Destination, Supplier FROM customer_packages WHERE Package_ID = $ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table border='1' align='center'>
<tr>
<th colspan = '2'>Package Info</th>
</tr>
<tr>
<td>Package ID</td>
<td>". $row["Package_ID"]."</td>
</tr>
<tr>
<td>Current Location</td>
<td>". $row["Last_Location"]."</td>
</tr>
<tr>
<td>Destination</td>
<td>". $row["Destination"]."</td>
</tr>
<tr>
<td>Package Details</td>
<td>". $row["Package_Info"]."</td>
</tr>
<tr>
<td>Supplier</td>
<td>". $row["Supplier"]."</td>
</tr>
</table>";
    }
} else {
    echo "No Record of Package ID. Please try again or Call 1 (800) TRY-PMPS";
}

$conn->close();
?><br>
<div class='w3-margin-left'>
<button onclick="window.open('', '_self', ''); window.close();">Close Window</button>
</div>
	

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>