<?php
include_once("connection.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $contact=$_POST['contact']; 
    $subject=$_POST['subject'];
    if(empty($name) || empty($age) || empty($contact) || empty($subject)) {          
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        if(empty($contact)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }       
        if(empty($subject)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }   
    } else {    
        $result = mysqli_query($conn, "UPDATE teach SET name='$name',age='$age',contact='$contact',subject='$subject', WHERE id=$id");
        header("Location: index.php");
    }
}
?>
<?php
$id = $_GET['id'];
$result =mysqli_query($conn, "SELECT * FROM teach WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $age = $res['age'];
    $contact = $res['contact'];
    $subject = $res['subject'];
}
?>
<html>
<head>  
    <style>
          body {
 background-color: #cccccc;
}
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
</head>
<body>
    <a href="index.php">Back</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $age;?>"></td>
            </tr>
            <tr> 
                <td>Contact</td>
                <td><input type="text" name="contact" value="<?php echo $contact;?>"></td>
            </tr>
            <tr> 
                <td>Subject</td>
                <td><input type="text" name="subject" value="<?php echo $subject;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>