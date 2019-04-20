<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "radudb";
$result = null;

$conn = new mysqli($host, $dbusername, $dbpassword,$dbname );

	if(mysqli_connect_error()){
	die('Connect Error'.mysqli_connect-errno().mysqli_connect_error() );
	}

		else{
			
		$sql = "Delete  FROM vanzari_apartamente WHERE telefon_vanzator is null or telefon_vanzator=''	";
		$result = $conn->query($sql);
		
		echo "Inregistrarile au fost sterse cu succes  ";
		
		
		}
		
		


				

 
 $conn->close();

?>