<?php
include 'connect.php';
$user = $_POST['user'];
$level1 = $_POST['level1'];
$level2 = $_POST['level2'];
$level3 = $_POST['level3'];

$sql = "INSERT INTO rankings(user_ID, level1, level2, level3) VALUES ('$user','$level1','$level2','$level3')";

$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
else {
	echo "We now have your personal preferences! Isn't that cool?";
}
//
//while ($row = mysql_fetch_assoc($result)) {
//    echo $row['symmetry'];
//}

//mysql_free_result($result);


?>