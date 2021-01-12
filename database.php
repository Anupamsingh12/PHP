 <?php
$user='root';
$pass = '';
$db='tripzilaa';

$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
echo "connection eastiblished","<br>";

// connection eastiblished....

$sql = "CREATE TABLE passenger (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(20),
lastName VARCHAR(20),
email VARCHAR(50) ,
phone VARCHAR(13),
name  VARCHAR(25),
age   VARCHAR(3),
gender varchar(6),
password VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($db, $sql)) {
  echo "Table created successfully","<br>";
} else {
  echo "Error creating table: ,<br>" . mysqli_error($db);
}


$sql2 = "CREATE TABLE travel_history (
email VARCHAR(50) PRIMARY KEY ,
starting_point VARCHAR(50),
ending_point VARCHAR(50),
price VARCHAR(5),
driver VARCHAR(50),
payment_mode VARCHAR(20),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";



if (mysqli_query($db, $sql2)) {
  echo "Table created successfully","<br>";
} else {
  echo "Error creating table: ,<br>" . mysqli_error($db);
}

//close connection
mysqli_close($db);
?>


