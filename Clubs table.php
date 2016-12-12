<?php
/**
 * Created by PhpStorm.
 * User: 1403578
 * Date: 05/12/2016
 * Time: 13:59
 */<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 29/11/2016
 * Time: 21:13
 */
<!DOCTYPE html>
<html>
<body>


<?php
echo "Sport club " . $color . "<br>";
echo "Sport club 1 " . $COLOR . "<br>";
echo "Sport club 2  " . $coLOR . "<br>";
CREATE TABLE Club (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
VARCHAR(30) NOT NULL,
Sport club 2 VARCHAR(30) NOT NULL,
Sport club 3 VARCHAR(50),
reg_date TIMESTAMP


<?php
$sportclub1 = "localhost";
$sportclub2 = "username";
$sportclub3 = "password";
$dbname = "myDB";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// sql to create table
$sql = "CREATE TABLE Clubs  (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Aberdeenshire South Hockey Club VARCHAR(30) NOT NULL,
Portlethen Badminton ClubVARCHAR(30) NOT NULL,
Newtonhill Netball Club   VARCHAR(50),
Portlethen Tennis Club VARCHAR(30) NOT NULL,
Portlethen & District Bowling club VARCHAR(30) NOT NULL,
Portlethen Sports Club VARCHAR(50),
Sooyang Do VARCHAR(30) NOT NULL,
Rebel PT VARCHAR(30) NOT NULL,
Newtonhill & District Bowling Club VARCHAR(50),
Jazzercise VARCHAR(30) NOT NULL,
Junior Jazzercise VARCHAR(50),


reg_date TIMESTAMP
)";


if (mysqli_query($conn, $sql)) {
    echo "Table Sports clubs created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
)
?>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO  (firstname, lastname, club)
   VALUES ('Aberdeenshire South Hockey Club', ' Portlethen Badminton Club', 'Newtonhill Netball Club' 'Portlethen Tennis Club
''Portlethen & District Bowling club' 'Portlethen Sports Club' 'Sooyang Do''Rebel PT' 'Newtonhill & District Bowling Club''Jazzercise''Junior Jazzercise')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}


$conn = null;
?>


</body>
</html>
