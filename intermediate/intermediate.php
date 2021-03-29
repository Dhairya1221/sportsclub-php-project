<!DOCTYPE html>
<html lang="en">

<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


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
  background: #36486b;
 
}

.header a
{
  color:#f0f0f0;
}

.header h1 {
  font-size: 93px;
  font-family: 'Permanent Marker', cursive;
}

.navbar {
  overflow: hidden;
  background-color: #d6cbd3;
  font-weight:600;
}

.navbar a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}



.main {   
  -ms-flex: 70%;
  flex: 70%;
  background-color: white;
  padding: 20px;
}



img {
  width: 10%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}




</style>
</head>
<body style="background-color:#f0f0f0;">


<div class="header">
  <h1><a href="/homepage/homepage.php">SPORTSCLUB</a></h1>
</div>

<div class="navbar">
  <a href="/psms/login.php">LOG IN </a>
</div>

<div class="main">
    <h2>INSTRUCTOR INFORMATION</h2>
    <img src="coach.jpg" alt="HTML5 Icon" style="height:300px;">
	<p> <a href="/coaches/coaches.php">CLICK HERE</a> TO KNOW INFORMATION ABOUT INSTRUCTORS.<br></p>
    <br>
   
    <h2>CAMP AND PRACTICE SCHEDULE</h2>
    <img src="clock.jpg" alt="HTML5 Icon" style="height:300px;">
    <p> <a href="/schedule/table.php">CLICK HERE</a> TO KNOW ABOUT CAMPS AND ITS TIMINGS.<br></p>
    <br>
   
    
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
