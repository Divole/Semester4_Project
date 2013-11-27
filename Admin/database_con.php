<?php
$mysqli = new mysqli("localhost", "root", null, "s4webdev");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
