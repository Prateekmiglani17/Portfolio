<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = '#';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
   
$Name=$_POST['Name'];;   
$Email=$_POST['Email'];;
$Contact=$_POST['Contact'];;
$sql="INSERT INTO porttable (Name,,Email,Contact) VALUES ('$Name','$Email','$Contact')";
if(mysqli_query($conn, $sql)){  
 echo "Record updated successfully";  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  