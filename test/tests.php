<?php
include 'connect.php';
$user = $_GET['user'];
$test1 = $_GET['test1'];
$test2 = $_GET['test2'];

$sql = "INSERT INTO tests(user_ID, test1, test2) VALUES ('$user','$test1','$test2')";

$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
else {
	echo "We now have your personal preferences! Isn't that cool?";
}

?>