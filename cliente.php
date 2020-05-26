<h1>Calculadora</h1>
<form action="cliente.php" method="get">
  Nuemro1: <input type="text" name="a"><br>
  Numero2: <input type="text" name="b"><br>
  Operacion: <select name="action">
    <option value="suma">Sumar</option>
    <option value="multiplica">Multiplicar</option>
</select><br><br>
<input type="submit" value="Calcular">
</form>

<?php
  require_once('lib/nusoap.php');
  $cliente= new nusoap_client('http://localhost/Calculadora/servicio.php');
  $resultado = $cliente->call('calculadora',
    array( 'x' => $_GET["a"],
           'y' => $_GET["b"],
           'operacion' => $_GET["action"]));
  echo "Resultado: ".$resultado;
?>
