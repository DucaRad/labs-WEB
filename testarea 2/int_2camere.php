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
			
		$sql = "SELECT * FROM vanzari_apartamente WHERE nr_de_camere_apartament = 2	";
		
		$result = $conn->query($sql);
		echo "<br> id: ". " |	Nume:	"."|	Telefon		"." |	Camere	 "."|	 Etajul		"."|	 Descriere	 "."|	Pret	"."|	Data".   "<br>";
		}


					
if ($result->num_rows > 0) {
    // afisarea
	
    while($row = $result->fetch_assoc()) {
		
	echo "<br>". $row["id"]. "|". $row["nume_vanzator"]."|".$row["telefon_vanzator"]."|".$row["nr_de_camere_apartament"]."|".$row["etajul"]."|".$row["descriere"]."|".$row["pret"]."|".$row["data"].   "<br>";
	
	
    }
} else {
    echo "0 results";
}



 
 $conn->close();
?>
