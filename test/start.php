<?php
include 'connect.php';
$name = $_POST['full_name'];
$email = $_POST['email'];
$edu = $_POST['education'];
$nation = $_POST['nation'];
$age = $_POST['age'];
$native = $_POST['native'];
$gender = $_POST['gender'];

$sql = "INSERT INTO participants(name, email, education, nation, age, native, gender) VALUES ('$name','$email','$edu','$nation','$age','$native','$gender')";

$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
else {
	echo mysql_insert_id();
}

?>