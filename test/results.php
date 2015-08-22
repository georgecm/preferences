<?php
	include "connect.php";
    $sql = "SELECT * FROM participants 
LEFT JOIN rankings ON participants.ID = rankings.user_ID
LEFT JOIN tests ON participants.ID = tests.user_ID
LEFT JOIN personal ON participants.ID = personal.user_ID";

    $result = mysql_query($sql, $link);

    if (!$result) {
        echo "DB Error, could not query the database\n";
        echo 'MySQL Error: ' . mysql_error();
        exit;
    }
    else {
        $table = "<table><tr>";
        $table .= "<th>#</th><th>ID</th><th>Email</th><th>Name</th><th>Nation</th>
        <th>Native</th><th>Gender></th><th>Age</th><th>Education</th>
        <th>Level1</th><th>Level2</th>
        <th>L3.Br</th><th>L3.Cl</th><th>L3.Sy</th><th>L3.Cn</th><th>L3.Sm</th>
        <th>L3.Ty</th><th>L3.De</th>
        <th>T1.Br</th><th>T1.Cl</th><th>T1.Sy</th><th>T1.Cn</th><th>T1.Sm</th>
        <th>T1.Ty</th><th>T1.De</th>
        <th>T2.+1</th><th>T2.-1</th><th>T2.+2</th><th>T2.-2</th><th>T2.+3</th>
        <th>T2.-3</th><th>T2.+4</th>
        <th>P.Br</th><th>P.Sy</th><th>P.Cn</th><th>P.Sm</th><th>P.Ty</th><th>P.De</th></tr>";
        $i = 1;
        while ($row = mysql_fetch_assoc($result)) {
            if( $row["preferences"] != "" && $row["level3"] != "" && $row["ID"] != "" )
            {
                //level3 decode
                $l = 0;
                $dec = json_decode($row["level3"]);
                foreach ($dec as $value) {
                	//$tmp = json_decode($value);
                    $level3[$l] = $value->value;
                    //echo $level3[$l];
                    $l = $l + 1;
                }
                //var_dump($dec);
                
				//Split tests
                $test1 = explode(",", $row["test1"]);
                foreach ($test1 as &$value) {
                	if( $value == "left" )
                        $value = 0;
                    else
                        $value = 1;
                }
                $test2 = explode(",", $row["test2"]);
                foreach ($test2 as &$value) {
                	if( $value == "left" )
                        $value = 0;
                    else
                        $value = 1;
                }
                
                //Preferences better view
                $obj = json_decode($row["preferences"]);
				$prefs[0] = $obj->{'brightness'}; // 12345
				$prefs[1] = $obj->{'symmetry'}; // 12345
				$prefs[2] = $obj->{'contrast'}; // 12345
				$prefs[3] = $obj->{'simplicity'}; // 12345
				$prefs[4] = $obj->{'type'}; // 12345
				$prefs[5] = $obj->{'depth'}; // 12345
                
                
                $table .= "<tr>";
                $table .= "<td>".$i."</td><td>".$row["ID"]."</td><td>".$row["email"]."</td><td>".$row["name"]."</td><td>".$row["nation"]."</td><td>".$row["native"]."</td><td>".$row["gender"]."</td><td>".$row["age"]."</td><td>".$row["education"]."</td><td>".$row["level1"]."</td><td>".$row["level2"]."</td>";
                $table .= "<td>".$level3[0]."</td><td>".$level3[1]."</td>
                <td>".$level3[2]."</td><td>".$level3[3]."</td>
                <td>".$level3[4]."</td><td>".$level3[5]."</td>
                <td>".$level3[6]."</td>";
                $table .= "<td>".$test1[0]."</td><td>".$test1[1]."</td><td>".$test1[2]."</td><td>".$test1[3]."</td><td>".$test1[4]."</td><td>".$test1[5]."</td><td>".$test1[6]."</td>";
                $table .= "<td>".$test2[0]."</td><td>".$test2[1]."</td><td>".$test2[2]."</td><td>".$test2[3]."</td><td>".$test2[4]."</td><td>".$test2[5]."</td><td>".$test2[6]."</td>";
                $table .= "<td>".$prefs[0]."</td><td>".$prefs[1]."</td><td>".$prefs[2]."</td><td>".$prefs[3]."</td><td>".$prefs[4]."</td><td>".$prefs[5]."</td>";
        	$table .= "</tr>";
            $i = $i + 1;
            }
        }
		$table .= "</table>";
        echo $table;
        mysql_free_result($result);
    }


?>