
<?php
    $destino= "oficina.primaria@centroeducativomexico.edu.mx";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $alumno = $_POST["alumno"];
    $grado = $_POST["grado"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nAlumno: " . $alumno ."\nGrado: " . $grado . "\nMensaje: " . $mensaje;
    mail($destino,"Datos", $contenido);
    header("Location:gracias.html");
?>