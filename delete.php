<?php


$id = $_GET['id'];

echo $id;

$servername = "ilinkserver.cs.utep.edu";
$username = "camontgomery";
$password = "raiders73";
$dbname = "spr19_team6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else echo "succesful";

$sql = "DELETE FROM dummytable WHERE id=".$id;
// $sql = "SELECT * FROM dummytable";
$result = $conn->query($sql);
header("Location: http://cssrvlab01.utep.edu/Classes/cs4342/Team6/CS4342/tables.php");

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "utep tag: " . $row["uteptag"]. " - cstag: " . $row["cstag"]. " - student id: " . $row["studentid"]. " - studentemail: " . $row["studentemail"].  "<br>";
    }
} else {
    echo "0 results";
}


// if ($conn->query($sql) === TRUE){
//     echo "Record Deleted"
// }
// else {
//     echo "error" . $conn->error;
// }
// $conn->close();

?>

