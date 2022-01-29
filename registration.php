<!DOCTYPE html>
<html lang="en">
<head>
<style>
  body {
 background-image: url("1.jpg");
 background-color: #cccccc;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<a href="index.php">Back</a>
<form action="insert.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Name..">
        <input type="text" name="age" id="age" placeholder="Enter Age.">
        <input type="text" name="contact" id="contact" placeholder="Enter Contact..">
        <input type="text" name="subject" id="subject" placeholder="Enter Subject..">
    <input type="submit" value="Submit" >
</form>
</body>
</html>