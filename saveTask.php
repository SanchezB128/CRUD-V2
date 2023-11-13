<?php

include('db.php');

if (isset($_POST['saveTask'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $fechaR = $_POST['fechaR'];
  $fechaN = $_POST['fechaN'];
  $query = "INSERT INTO tbl_clientes(nombre, apellido,direccion,telefono,correo,fechaR,fechaN) VALUES ('$nombre', '$apellido', '$direccion', '$telefono', '$correo', '$fechaR', '$fechaN')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>