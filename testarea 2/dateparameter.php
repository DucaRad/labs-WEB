<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "radudb";
$result = null;
$data  =  filter_input(INPUT_POST,'deldata');

$conn = new mysqli($host, $dbusername, $dbpassword,$dbname );

	if(mysqli_connect_error()){
	die('Connect Error'.mysqli_connect-errno().mysqli_connect_error() );
	}

		else{
			
		$sql = "DELETE  FROM vanzari_apartamente WHERE data='".$data."'"	;
		$result = $conn->query($sql);
		
		echo "Inregistrarile au fost sterse cu succes ";
		
		}
		

 $conn->close();

?>