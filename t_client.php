<?php
 
require_once ('lib/nusoap.php');

$c= $_GET['ciudad'];
$p= $_GET['pais'];

$wsdl="http://www.webservicex.net/globalweather.asmx?wsdl";
$client = new nusoap_client($wsdl,'wsdl');
$params = array('a' => $c, 'b'=>$p);




echo '<h2>Resultat</h2><pre>';
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<p><b>Error: '.$err.'</b></p>';
} else {
	// Display the result
	print_r($result);
}