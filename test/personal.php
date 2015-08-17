<?php
include 'connect.php';

if( isset($_GET["id"]) && isset($_GET['data']) ) {
    $user_ID = $_GET['id'];
    $preferences = $_GET['data'];
    
	$sql = "INSERT INTO personal(user_ID, preferences) VALUES ('$user_ID','$preferences')";

    $result = mysql_query($sql, $link);
    if (!$result) {
        echo "DB Error, could not query the database\n";
        echo 'MySQL Error: ' . mysql_error();
        exit;
    }
}


?>