<?php

$mysqli = new mysqli("$servername", "$username", "$password", "$dbname");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$MovieName = $mysqli->real_escape_string($_REQUEST['MovieName']);
$MovieLink = $mysqli->real_escape_string($_REQUEST['MovieLink']);

 
// attempt insert query execution
$sql = "INSERT INTO movies (movies,link) VALUES ('$MovieName', '$MovieLink')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>