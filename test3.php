<html>
<head>
<link rel="stylesheet" href="css/custom.css">
</head>
<body>
<h1>test table</h1>
<?php
$servername = "ilinkserver.cs.utep.edu";
$username = "camontgomery";
$password = "raiders73";
$dbname = "spr19_team6";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>



<?php
$sql = "SELECT uteptag, cstag, studentid, studentemail FROM dummytable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        #echo "utep tag: " . $row["uteptag"]. " - cstag: " . $row["cstag"]. " - student id: " . $row["studentid"]. " - studentemail: " . $row["studentemail"].  "<br>";
    }
} else {
    echo "0 results";
}



?>
<form action="" method="post">
<table class ="dummy-table">
    <thead>
        <tr>
            <th>UTEP ID</th>
            <th>CS Tag</th>
            <th>Student ID</th>
            <th>Student Email</th>
            <th>Edit</th>
            <th>Remove</th>
        </tr>
    </thead>

<tbody>
    
<?php
$sql = "SELECT uteptag, cstag, studentid, studentemail FROM dummytable";
$result = mysqli_query($conn, $sql);
$sql = "DELETE FROM dummytable where id=3";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
    while ($row = mysqli_fetch_array($result)) {?>
        <tr>
            <td><?php echo $row["uteptag"];?></td>
            <td><?php echo $row["cstag"];?></td>
            <td><?php echo $row["studentid"];?></td>
            <td><?php echo $row["studentemail"];?></td>
            <td><input type="button" class="edit" name="edit" value="Edit"></td>
            <td><input type="button" class="delete" value="Delete" onclick="deleteRow(this)"></td>
        </tr>
    <?php }
    mysqli_close($conn); ?>  
    </tbody>
</table>
</form>

</body>
</html>