<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $ubicacion = $_POST["ubicacion"];
    $giro = $_POST["giro"];
    $poblacion = implode(", ", $_POST["poblacion"]);
    $num_empleados = $_POST["num_empleados"];



    // Por ejemplo, puedes enviar un correo electrónico con los datos
    $to = "gorz12@gmail.com";
    $subject = "Nuevo formulario de contacto";
    $message = "Nombre: $name\n";
    $message .= "Correo Electrónico: $email\n";
    $message .= "Teléfono: $phone\n";
    $message .= "Empresa: $company\n";
    $message .= "Ubicación: $ubicacion\n";
    $message .= "Giro/Industria: $giro\n";
    $message .= "Población a cubrir: $poblacion\n";
    $message .= "Número de Empleados: $num_empleados\n";

    // Utiliza la función mail() para enviar el correo
    mail($to, $subject, $message);

    // Redirige al usuario a una página de confirmación o muestra un mensaje de éxito
    // header("Location: index.html");
    exit();
}
?>
