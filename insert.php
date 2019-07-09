<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loga_survey";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$checkbox1 = $_POST['q1'] ;  
if ($_POST["Submit" ]=="Submit")  
{  
for ($i=0; $i<sizeof ($checkbox1);$i++) {  
    $sql="INSERT INTO answer(q_id,answer,email) VALUES (1,'".$checkboxl[$i]. "','".$_POST["q11_c1"]."')"; }
}
echo "Record is inserted";  

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
