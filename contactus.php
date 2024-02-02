<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert form data into database
$name = $_POST['name'];
$number=$_POST['phone'];
$email = $_POST['email'];
$message = $_POST['msg'];
$sql = "INSERT INTO contact(name, phone, email, msg)  VALUES ('$name', '$number','$email', '$message')";

if ($conn->query($sql) === TRUE) {
echo '<div style="background-image: url(https://images.pexels.com/photos/1202413/pexels-photo-1202413.jpeg); background-size: cover; background-position: center; width: 100%; height: 800px;">';
echo "<h2><center><i>Thank you for contacting us. We will reach you soon.</i></center></h2>";
echo '</div>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
