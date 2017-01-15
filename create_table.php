 <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "History";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE History (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(100) NOT NULL,
email VARCHAR(50) NOT NULL,
filename VARCHAR(500) NOT NULL,
upload_time TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table History created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
