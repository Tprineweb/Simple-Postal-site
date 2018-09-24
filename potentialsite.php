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
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button"><img src="PMPSlogo.jpg" alt="PMPS logo" width="40" height="50"></a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#Find" class="w3-bar-item w3-button">Find Package</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="boxes.jpg" alt="Boxes" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Poor Man's Postal Service</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="handshake.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About PMPS</h1><br>
      <h5 class="w3-center">Tradition since 2018</h5>
      <p class="w3-large">PMPS was founded in 2018 for a group project in CISY 6103. We work hard to be one of the top 4 shipping services in the united states. Our mission has always been: "Ship for cheap, or what's the point?".</p>
      <p class="w3-large w3-text-grey w3-hide-medium"><h4>Our accomplishments include:</h4><br>Cheapest Shipper 2018<br>Least Profit Shipper 2018<br>Most Pizza Consumed by a Company 2018<br>Highest Rated Shipping Company Ever</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="Find">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Find a Package</h1><br>
      
      <p class="w3-text-grey">In the text box below, enter your package ID number to check the current status of your package. You can find your package ID number through your product receipt or the email sent to you 24 hours after your transaction.</p><br>
    
      <h4>Enter package ID number below:</h4>
      <p class="w3-text-grey "><form action="Findpackage.php" target="_blank" method="get"><input type="text" placeholder="ex. '123'" name="PackID">
		<button class="w3-button w3-light-grey w3-section" type="submit">Search Package</button>
	  </form></p><br>
	
      
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="map.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We are here to cater to your every shipping need. We ship both corporately and domestically to anywhere in the USA. Do not hesitate to contact us at:</p>
    <p class="w3-text-blue-grey w3-large"><b>PMPS HQ, 3800 Main St, 43043 Alfred, NY</b></p>
    <p>You can also contact us by phone 1 (800)TRY-PMPS or email Support@PMPS.com</p>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>
