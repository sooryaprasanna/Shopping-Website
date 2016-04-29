<?php
require_once('config.php');
try{
	$db = new PDO("mysql:dbname=".DBNAME.";host=".DBHOST, DBUSER, DBPASS);  
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$userid = $db->quote($_GET["newuserid"]);	
	$query = $db->prepare("SELECT * FROM USER WHERE User_Id = $userid");
    $query->execute();
	$rows=$query->fetchAll();
	if($rows)
	{
		echo "1";
	}
}
catch(PDOException $ex){
	echo "<script type='text/javascript'>alert('$ex->getMessage();');</script>";
	}
?>