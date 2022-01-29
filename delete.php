<?php
include("connection.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM teach WHERE id=$id");
header("Location:index.php");
?>