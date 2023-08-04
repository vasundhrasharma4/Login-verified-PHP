<?php
#session start
session_start();

#unset the whole session
$_SESSION = array();

session_destroy();
header('Location: http://localhost/assignment3_bingosports/index.php');

?>