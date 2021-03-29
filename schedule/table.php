<!DOCTYPE html>
<html>
<body style="background-color:#f0f0f0;">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

table,tr,th
{
    width:50%;
    border-collapse:separate;
    table-layout:fixed;
    color:#383838;
    text-align:center;
    border: 1px solid black;
    margin-left: auto;
    margin-right: auto;
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


}
</style>

<div class="header">
  <h1><a href="/homepage/homepage.php">SPORTSCLUB</a></h1>
</div>

<div class="navbar">
  <a href="/psms/login.php">LOG IN </a>
</div>

<h2 style="text-align:center">INFORMATION AND SCHEDULE TABLE</h2><br>

<table>
  <tr>
  <th style="color:black;">ID</th>
  <th style="color:black;">CAMP</th>
  <th style="color:black;">SPORT</th>
  <th style="color:black;">AGE GROUP</th>   
  <th style="color:black;">DATE</th>
  <th style="color:black;">TIME</th>
  </tr>
</table>

<?php
$link = mysqli_connect("localhost", "USERNAME", "", "javatpoint");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT id,camp,sport,age,dates,timee FROM timetable";
$result = $link->query($sql);

if($result-> num_rows>0)
    
{
    
    while ($row=$result->fetch_assoc())
    {
        echo "<table>";
        echo "<tr>";
        echo"<th>".$row["id"]."</th><th>".$row["camp"]."</th><th>".$row["sport"]."</th><th>".$row["age"]."</th><th>".$row["dates"]."</th><th>".$row["timee"]."</th>";
        echo "</tr>";
        echo "</table>";
    }
    
}

else{
    echo "0 result";
}
?>

</body>
</html>

