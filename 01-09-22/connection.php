<?php
$dbname = "Morning_9_10";
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn) {
    echo "";
} else {
    echo "Not Connected";
}
