<?php

include("antet.html");

?>

<tr>
<?php
	include("menu.html");
	$k=$_GET['k'];
	if (isset($k)) {include($k);}
	else{
		include("form1.html");

}
?>
</tr>

<?php	

	include("subsol.html");
?>