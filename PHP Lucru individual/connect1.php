<?php

$fname  = filter_input(INPUT_POST,'nume');
$lname  = filter_input(INPUT_POST,'prenume');
$adresa = filter_input(INPUT_POST,'adresa');
$telefon= filter_input(INPUT_POST,'telefon');
$email  = filter_input(INPUT_POST,'email');
 if(!empty($fname)){
	if(!empty($lname)){
		if(!empty($adresa)){
			if(!empty($telefon)){
				if(!empty($email)){
					$host = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "dbtest";

					$conn = new mysqli($host, $dbusername, $dbpassword,$dbname );

					if(mysqli_connect_error()){
					die('Connect Error'.mysqli_connect-errno().')'.mysqli_connect_error() );
					}
					else{
					$sql="INSERT INTO account ( nume , prenume , Adresa , Telefon , Email )
					values ('$fname' , '$lname' , '$adresa' , '$telefon' , '$email')";
					}
					if($conn->query($sql)){
					echo "new record created";
					}
					else{
					echo "Error".$sql.$conn->error;
					}
					$conn->close();
				}
				else{
				echo "email should not be empty";	
				die();
				}
			}
			else{
			echo "Phone number should not be empty";	
			die();
			}	
			
			
		}
		else{
		echo "Adress should not be empty";	
		die();
		}
	}
	
	else{
	echo "Last name should not be empty";	
	die();
	}
 }	
else{ 
	echo "fname should not be empty";
	die();
 }	 


?>