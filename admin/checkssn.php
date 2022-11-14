<?php
if(empty($_SESSION['name']))
{
	header(location: "index.php");
}
?>