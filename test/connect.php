<?php

if (!$link = mysql_connect('localhost', 'root', '')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('york', $link)) {
    echo 'Could not select database';
    exit;
}

?>