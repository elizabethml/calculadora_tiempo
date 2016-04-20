<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  type="text/css" href="pub/style.css">
</head>
<body>

<div class="contenedor">
<h1 align="center">Calculadora</h1>

<form align="center" method="GET" action="calc_client.php">

	<select name="oper">
		<option value="1">Suma</option>
		<option value="2">Resta</option>
		<option value="3">Multiplicación</option>
		<option value="4">División</option>
	</select>

	<p>Num1<input type="text" name="num1"></p>
	<p>Num2<input type="text" name="num2"></p>
	<p><input type="submit" value="Enviar"></p>

</form>
</div>



<div class="contenedor">
<h1 align="center">Tiempo</h1>
<form align="center" method="GET" action="t_client.php">

	<p>Ciudad <input type="text" name="ciudad"></p>
	<p>País <input type="text" name="pais"></p>
	<p><input type="submit" value="Enviar"></p>

</form>
</div>

</body>
</html>