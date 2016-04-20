<?php
	require_once 'lib/nusoap.php';

	$soap = new soap_server;
	$soap->configureWSDL('AddService', 'http://localhost/calculadora');
	$soap->wsdl->schemaTargetNamespace = 'http://localhost/serveis1';
	$soap->register('suma', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/serveis1');
	$soap->register('resta', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/serveis1');
	$soap->register('multiplica', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/serveis1');
	$soap->register('dividir', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/serveis1');
	$soap->service(isset($HTTP_RAW_POST_DATA) ?$HTTP_RAW_POST_DATA : '');

function suma($a, $b){
	return $a + $b;
}

function resta($a, $b){
	return $a - $b;
}


function multiplica($a, $b){
	return $a * $b;
}

function dividir($a, $b){
	return $a / $b;
}




?>

