<?php
session_start();

//remove all session variables
session_unset();

//destroy the session
$destroyed = session_destroy();

echo $destroyed;

//redirect to login page
header("Location: http://intranet/Training");

exit();

?>
