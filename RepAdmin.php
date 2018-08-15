<?php
require_once 'Lib.php';


$usuarios = getUser();

echo "<table border = '1', align = 'center' , style = 'border-collapse: collapse; text-align: center;'> ";
echo "<tr>";
echo "<td>Matricula</td>";
echo "<td>Nombre</td>";
echo "<td>RFC</td>";
echo "<td>Action</td>";
echo "</tr>";

foreach ($usuarios as $key => $val) {
  echo "<tr>";
  echo "<td>{$val->mat_user}</td>";
  echo "<td>{$val->nom_user}</td>";
  echo "<td>{$val->rfc_user}</td>";
  echo "<td> <button onclick = 'aceptar({$val->mat_user})'>Aceptar</button>
  <button onclick =\"descartar({$val->mat_user})\">Descartar</button> </td>";
  echo "</tr>";
}
echo "</table>";
?>
