<html>
<body>

<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];

echo "First name is :".$fname.".<br/>";
echo "Last name is :".$lname.".<br/>";

$con=mysqli_connect('127.0.0.1:3306' ,'root','root','my_db');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="INSERT INTO table1 (fname, lname, age)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
mysqli_close($con);


?>


</body>
</html>
