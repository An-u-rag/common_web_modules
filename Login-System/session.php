<?php
//start a session
session_start();

// set session variables to be used across pages
$_SESSION['username'] = htmlentities($_POST_['username']);

// Destroy a session
session_destroy();



