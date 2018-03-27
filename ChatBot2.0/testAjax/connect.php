<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatbot";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }
	catch(Exception $e)
		{
		echo $e->getMessage();
		exit;
		}

$conn = null;
?>