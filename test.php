 <?php
$servername = "ilinkserver.cs.utep.edu";
$username = "camontgomery";
$password = "raiders73";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 