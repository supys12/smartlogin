<?php

session_start();

require ("connection.php");

$query = " SELECT * FROM master_websites ";
     $result=mysql_query($query,$connection);
     
	if(!$result)
        die("Connection Error");
    else
    {
         $row = mysql_fetch_array($result);        
	}
$output = array('websitesdata' => $row);
echo json_encode($output);
mysql_close();
		 
?>