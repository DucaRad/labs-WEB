<?php

$name		= filter_input(INPUT_POST,'nume');
$telefon	= filter_input(INPUT_POST,'telefon');
$camere		= filter_input(INPUT_POST,'camere');
$etaj		= filter_input(INPUT_POST,'etajul');
$descriere  = filter_input(INPUT_POST,'description');
$pret 		= filter_input(INPUT_POST,'ppret');
$data		= filter_input(INPUT_POST,'ddata');

/* if(!empty($name)){
	if(!empty($telefon)){
		if(!empty($camere)){
			if(!empty($etaj)){
				if(!empty($descriere)){
					if(!empty($pret)){
						if(!empty($data)){  */
						
						$host = "localhost";
						$dbusername = "root";
						$dbpassword = "";
						$dbname = "radudb";

						$conn = new mysqli($host, $dbusername, $dbpassword,$dbname );

						if(mysqli_connect_error()){
						die('Connect Error'.mysqli_connect-errno().mysqli_connect_error() );
						}

						else{
						$sql="INSERT INTO vanzari_apartamente ( nume_vanzator , telefon_vanzator , nr_de_camere_apartament , etajul , descriere , pret , data )
						values ('$name' , '$telefon' , '$camere' , '$etaj'  , '$descriere' , '$pret' , '$data')" ;
						}

						if($conn->query($sql)){
						echo "new record created";
						}

						else{
						echo "Error".$sql.$conn->error;
						}

						$conn->close();
					
						/*
						

						
					}	
						else{
						echo "Date should not be empty";	
						die();
						}
					}	

					else{
					echo "Price should not be empty";	
					die();
					}
				}

				else{
				echo "Description should not be empty";	
				die();
				}
			}

			else{
			echo "Etaj number should not be empty";	
			die();
			}	
				
		}
		else{
		echo "Number of chambers should not be empty";	
		die();
		}
	
	}	
	else{
	echo "Phone number should not be empty";	
	die();
	}
 
}	
else{ 
	echo "Name of the merchant should not be empty";
	die();
}	 
*/

?>