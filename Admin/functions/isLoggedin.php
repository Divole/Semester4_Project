<?php
// check if the user is logged in into the system
session_start(); // Start the session.
require_once("functions/functions.php");
// If no session value is present, redirect the user:
if (!isset($_SESSION['name'])) {
	redirect();
}

require_once("../../../dbcons/dbc_s4webdev.php");
