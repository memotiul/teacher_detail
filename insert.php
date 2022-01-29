<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
$contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);
$subject = mysqli_real_escape_string($conn, $_REQUEST['subject']);
$sql = "INSERT INTO teach (name, age, contact,subject) VALUES ('$name', '$age', '$contact','$subject')";
if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>alert('Record added successfully');location='index.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>