<?php
 
require_once ('lib/nusoap.php');

$n1= $_GET['num1'];
$n2= $_GET['num2'];
$tipo= $_GET['oper'];



$wsdl="http://localhost/calculadora/calc_server.php?wsdl";
$client = new nusoap_client($wsdl,'wsdl');
$params = array('a' => $n1, 'b'=>$n2);
switch ($tipo) {

	case '1':
				$result= $client->call('suma', $params);
				
	break;


	case '2':
				$result= $client->call('resta', $params);
				
	break;

	case '3':
				$result= $client->call('multiplica', $params);
				
	break;

	case '4':
				$result= $client->call('dividir', $params);
				
	break;
	
}

echo '<h2>Resultat</h2><pre>';
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<p><b>Error: '.$err.'</b></p>';
} else {
	// Display the result
	print_r($result);
}



?>



