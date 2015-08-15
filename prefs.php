<?php
include 'test/connect.php';
	$symmetry = 1;
	$depth = 1;
	$color = 1;
	$brightness = 1;
	$contrast = 1;
	$simplicity = 1;
	$ctype = 1;

	if( isset($_GET["id"]) ) {
		$user_ID = $_GET['id'];
    }
	else {
        $user_ID = 2;
    }

    $sql = "Select level3 FROM rankings where user_ID='$user_ID' limit 0,1";

    $result = mysql_query($sql, $link);
	//echo $result;
	//var_dump(json_decode($result));	
    if (!$result) {
        echo "DB Error, could not query the database\n";
        echo 'MySQL Error: ' . mysql_error();
        exit;
    }
    else {
        $result = mysql_result($result,0);
        $obj = json_decode($result);
        foreach ($obj as $result)
        {
            $name = $result->type ;
            $$name = $result->value;
            //echo $name." ".$result->value."\n";
        }
    }

	//Dummy values
//	$symmetry = 2;
//	$depth = 7;
//	$color = 3;
//	$brightness = 7;
//	$contrast = 2;
//	$simplicity = 5;
//	$ctype = 4;

	//GET values 
	if( isset($_GET["symmetry"]) )
		$symmetry = $_GET["symmetry"];
	if( isset($_GET["depth"]) )
        $depth = $_GET["depth"];
	if( isset($_GET["color"]) )
        $color = $_GET["color"];
	if( isset($_GET["brightness"]) )
        $brightness = $_GET["brightness"];
	if( isset($_GET["contrast"]) )
        $contrast = $_GET["contrast"];
	if( isset($_GET["simplicity"]) )
        $simplicity = $_GET["simplicity"];
	if( isset($_GET["ctype"]) )
        $ctype = $_GET["ctype"];
	
	$prefs["symmetry"] = $symmetry;
	$prefs["depth"] = $depth;
	$prefs["color"] = $color;
	$prefs["brightness"] = $brightness;
	$prefs["contrast"] = $contrast;
	$prefs["simplicity"] = $simplicity;
	$prefs["ctype"] = $ctype;

	if( isset($_GET["json"]) )
		echo json_encode($prefs);
?>