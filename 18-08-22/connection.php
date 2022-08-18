<?php
$dbname = "Morning_9_10";
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn) {
    echo "Connected";
} else {
    echo "Not Connected";
}
