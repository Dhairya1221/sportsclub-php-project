<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>REGISTRATION</title>
</head>
<style>
body {
  margin: 0;
}

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

label
{
    color: 	#505050;
    font-weight: bold;
    margin:1%;
}



</style>
<body>

<div class="header">
  <h1><a href="/homepage/homepage.php">SPORTSCLUB</a></h1>
</div>

<div class="navbar">
  <a href="/psms/login.php">LOG IN </a>
</div>

<br>
<h1 style="color:#505050">
REGISTRATION FORM
</h1>

<form action="insert.php" method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>

    <p>
        <label for="height">Height</label>
        <input type="text" name="height" id="height">
    </p>

    <p>
        <label for="Weights">Weight</label>
        <input type="text" name="Weights" id="Weights">
    </p>

     <p>
        <label for="sports">Which sport you need to participate?</label>
        <input type="text" name="sports" id="sports">
    </p>

    <p>
        <label for="reason">REASON TO JOIN.</label>
        <input type="text" name="reason" id="reason">
    </p>

    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>

    <p>
        <label for="mobileNo">Mobile Number</label>
        <input type="text" name="mobileNo" id="mobileNo">
    </p>

    <input type="submit" value="Submit" style="margin:1%">
</form>

<p>ONCE YOU REGISTER WE WILL SEND CONFIRMATION MAIL ALONG WITH ID PASSWORD WITH IN 10 DAYS.<br>
</p>

</body>
</html>
