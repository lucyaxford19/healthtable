<?php
/**
 * Created by PhpStorm.
 * User: Lucy
 * Date: 05/12/2016
 * Time: 12:30
 */
<?php
$IteamID = "localhost";
$Title = "username";
$Content = "password";
$UserID = "myDB";
$PhotoID = "localhost";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE  (
ItemID INT (10) PRIMARY KEY
Title VARCHAR (20)
Content NVARCHAR (10)
UserID VARCHAR (10) NOT NULL 
PhotoID VARCHAR 

)";

if ($conn->query($sql) === TRUE) {
    echo "Table Health news created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
<?php
$IteamID = "IteamID";
$Title = "Title";
$Content= "Content";
$UserID = "user";
$PhotoID = "photo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
ItemID INT (10) PRIMARY KEY
Title VARCHAR (20)
Content NVARCHAR (10)
UserID VARCHAR (10) NOT NULL 
PhotoID VARCHAR 
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Health news created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

Example (PDO)
<?php
$servername = "servername";
$Title = "Title";
$Content = "Content";
$UserID = "User";
$PhotoID = "ID";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE Health club (
    ItemID INT (10) PRIMARY KEY
    Title VARCHAR (20)
    Content VARCHAR (10)
    UserID VARCHAR (10) NOT NULL 
    PhotoID VARCHAR
    File uploads on 
    
    
    //place an upload of user photo 
    //look through list of stuff that is needed on health club page
    
  
)";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table Health news created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
