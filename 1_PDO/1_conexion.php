<?php

$dbname = 'railway';
$username = 'student';
$password = 'AfaFormacion2023.';
$servername = 'containers-us-west-185.railway.app:5738';

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "SELECT IdProducto,NombreProducto,CantidadPorUnidad,PrecioUnidad,UnidadesEnExistencia FROM productos WHERE UnidadesEnExistencia > 5" ;
$result = $conn->query($sql);

$row = $result->fetch(PDO::FETCH_ASSOC); 