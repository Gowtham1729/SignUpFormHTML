<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$servername = "localhost";
$username = "root";
$password = "gowtham";
$dbname = "History";

// Check if image file is a actual image or fake image

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}$sql = "INSERT INTO history (name, email, filename)
			VALUES ('John Doen', 'john@example.com', 'callofduty')";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>
