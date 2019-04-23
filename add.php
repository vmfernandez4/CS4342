<html>
<head>
<title>666</title>
</head>

<body>
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

$sql = "SELECT * FROM dummytable WHERE id=".$id;
// $sql = "SELECT * FROM dummytable";
$result = $conn->query($sql);
   #header("Location: http://cssrvlab01.utep.edu/Classes/cs4342/Team6/CS4342/tables.php");

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "utep tag: " . $row["uteptag"]. " - cstag: " . $row["cstag"]. " - student id: " . $row["studentid"]. " - studentemail: " . $row["studentemail"].  "<br>";
    }
} else {
    echo "0 results";
}



?>
<form action="add_update.php" method="get">
<input type="hidden" name="id" value="<?=$id;?>">
  uteptag:<br>
  <input type="text" name="uteptag" value="">
  <br>
  cstag:<br>
  <input type="text" name="cstag" value="">
  <br>
  studentid:<br>
  <input type="text" name="studentid" value="">
  <br>
  <!-- studentemail:<br>
  <input type="text" name="studentemail" value="">
  <br> -->
  <br><br>
  <input type="submit" value="Submit">
</form> 
<h1>hello</h1>

</body>
</html>