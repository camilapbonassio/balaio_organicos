<?php

	$velement_1=$_POST["element_1"];
	$velement_2=$_POST["element_2"];
	$velement_3=$_POST["element_3"];
	$velement_4_1=$_POST["element_4_1"];
	$velement_4_2=$_POST["element_4_2"];
	$velement_4_3=$_POST["element_4_3"];
	$velement_4_4=$_POST["element_4_4"];
	$velement_4_5=$_POST["element_4_5"];
	$velement_4_6=$_POST["element_4_6"];
	$velement_4_7=$_POST["element_4_7"];
	$velement_4_8=$_POST["element_4_8"];
	
	$to = "camilabonassio@gmail.com";
	$subject = "balaio_de_organicos"
	
	mail ($to,$subject);
	
	echo "message sent!"
?>