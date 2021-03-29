<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "USERNAME", "", "javatpoint");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$height = mysqli_real_escape_string($link, $_REQUEST['height']);
$Weights = mysqli_real_escape_string($link, $_REQUEST['Weights']);
$sports = mysqli_real_escape_string($link, $_REQUEST['sports']);
$reason = mysqli_real_escape_string($link, $_REQUEST['reason']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mobileNo = mysqli_real_escape_string($link, $_REQUEST['mobileNo']);

 
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email, mobileNo, height, Weights, sports, reason) VALUES ('$first_name', '$last_name', '$email', '$mobileNo', '$height', '$Weights' , '$sports', '$reason')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>