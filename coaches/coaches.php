<?php

include('db.php');
$status = '';
if (!empty($_POST['sports'])){
  if (is_array($_POST['sports'])) {
	 
	foreach($_POST['sports'] as $sport_id){
		$query = mysqli_query($con,"SELECT * FROM sports WHERE `sport_id`='$sport_id'");
		$row = mysqli_fetch_assoc($query);
        echo "<table>";
        echo "<tr>";
		$status .= "<table>"."<tr>"."<th>".$row['sport_name'] . "</th><th>".$row['manager']. "</th><th>".$row['coach']. "</th><th>".$row['assistant_coach']."</th>"."</tr>.</table>";
        echo "</tr>";
        echo "</table>";
    } 
  } 
} 
?>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color:#f0f0f0
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



.center {
  margin: 0;
  position: absolute;
  top: 64%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>

<!DOCTYPE html>
<html>
<head>
<title>COACH INFO</title>
</head>
<body>

<div class="header">
  <h1><a href="/homepage/homepage.php">SPORTSCLUB</a></h1>
</div>

<div class="navbar">
  <a href="/psms/login.php">LOG IN </a>
</div>


<h1 style="text-align:center">COACH INFORMATION</h1>
<form name="form" method="post" action="">

<table border="0" width="60%">
<tr>
<?php
$count = 0;
$query = mysqli_query($con,"SELECT * FROM sports");
foreach($query as $row){
	$count++;
?>
<td width="3%"><input type="radio" name="sports[]" value="<?php echo $row["sport_id"]; ?>"></td>
<td width="30%"><strong><?php echo $row["sport_name"]; ?></strong></td>
<?php
if($count == 1) { // three items in a row
        echo '</tr><tr>';
        $count = 0;
    }
} ?>
</tr>
</table>
<div class="center">
<input type="submit" name="submit" value="Submit">
</div>
</form>
<br>
<br><br>
<table>
  <tr>
  <th style="color:blue;">SPORT</th>
  <th style="color:blue;">MANAGER</th>
  <th style="color:blue;">COACH</th>
  <th style="color:blue;">ASSISTANT COACH</th>   
  </tr>
</table>


<?php echo $status; ?>


</body>
</html>
