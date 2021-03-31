<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 40px;
  font-weight:900;
  text-align: center;
  background: #f9d5e5;
  color: #333;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 93px;
  font-family: 'Permanent Marker', cursive;
}

.header p{
  font-size: 35px;
  font-family: 'Permanent Marker', cursive;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #d6cbd3;
  font-weight:600;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color:#f0efef ;
  padding: 20px;
}

.side h2{
  font-size: 35px;

}

.side p{
  font-size: 20px;
  
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}



img {
  width: 30%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}



/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>EASYGO</h1>
  <p>A More Rewarding Way To Travel.</p>
</div>

<div class="navbar">
  <a href="/psms/login.php">LOG IN </a>
</div>

<div class="row">
  <div class="side">
    <h2>ABOUT US</h2>
   
    <p>

EASYGO is an Indian company of online travel and was founded by alumnus of Indian Institute of Management Ahmadabad, STUDENTS in 2021.<br><br>The company provides services related to online travel booking and travel services such as domestic and international holiday packages and booking of buses, rails and flight tickets. <br><br> It has also acquired three companies in 2011 named as My Guest House Accommodation (New Delhi, India), Le Travenues Technology Private Limited (Gurgaon, India) and Luxury Tours and Travel Private Limited (Singapore).
 </p>
   
  </div>

  <div class="main">
    <h2>FLIGHT SERVICE</h2>
    <img src="sports.jpg" alt="HTML5 Icon" style="height:300px;">
    <p>HERE WE GIVE CHEAPEST FLIGHT TICKETS AND BEST OFFERS. <br>    </p>
    <br>
   
    <h2>TRAIN SERVICE</h2>
    <img src="sports1.jpg" alt="HTML5 Icon" style="height:300px;">
    <p>HERE WE GIVE CHEAPEST TRAIN TICKETS AND BEST OFFERS.<br></p>
    <br>
   
    <h2>REGISTRATION</h2>
    <img src="registration.jpg" alt="HTML5 Icon" style="height:300px;">
    <p> <a href="/registration/registration.php">CLICK HERE</a><br></p>
    <br>
  </div>
</div>

<div class="footer">
  <h2><i class="fa fa-instagram" style="font-size:48px;color:red"></i>
  <i class="fa fa-facebook" style="font-size:48px;color:#0000CD"></i>
  <i class="fa fa-twitter" style="font-size:48px;color:#00BFFF"></i>
  <i class="fa fa-whatsapp" style="font-size:48px;color:green"></i>
</h2>
</div>

</body>
</html>
