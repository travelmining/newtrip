<?php // header.php
session_start();
$userstr = ' (Guest)';
if (isset($_SESSION['user']))
{
	$user = $_SESSION['user'];
	$loggedin = TRUE;
	$userstr = " ($user)";
}
else $loggedin = FALSE;
 
if ($loggedin)
{
}
else
{

}
?>