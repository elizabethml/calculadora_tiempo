
<?php

$var= $_GET['pais'];

require_once('lib/nusoap.php');
$wsdl="http://www.webservicex.net/globalweather.asmx?wsdl";
$client= new nusoap_client($wsdl,'wsdl');
$params=array('CountryName'=>$var);
$xml=$client->call('GetCitiesByCountry',$params);
$xml=implode(" ",$xml);
$resultat= new SimpleXMLElement($xml);
echo '<h2>Resultat</h2><pre>';
$err=$client->getError();

	if($err){

		echo '<p><b>Error:'.$err.'</p>';
	}//if
	else{

		echo'<table border=1>';
		echo '<tr><th>Pais</th><th>Ciutat</th></tr>';
		foreach($resultat->Table as $table){

			$pais=(string)$table->Country;
			$ciutat=(string)$table->City;
			echo '<tr><td>'.$pais.'</td><td>'.$ciutat.'</td></tr>';

		}//foreach

		echo '</table>';

	}//else
	