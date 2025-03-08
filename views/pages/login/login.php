<?php
session_start(); // Iniciar sesión

// Verificar si es una solicitud POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']); // Elimina espacios en blanco
    $password = $_POST['password'];

    $passwordCorrecta = "admin123"; // Contraseña fija para el login

    // 🛠️ Depuración: Verificar qué datos está recibiendo el servidor
    error_log("🔍 Correo recibido: " . $email);
    error_log("🔍 Contraseña recibida: " . $password);

    // ✅ Validar que el email tenga formato correcto o sea del dominio @miumg.edu.gt
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[a-zA-Z0-9._%+-]+@miumg\.edu\.gt$/', $email)) {
        error_log("❌ Correo rechazado: " . $email); // Depuración
        echo json_encode(["success" => false, "message" => "Correo electrónico inválido"]);
        exit;
    }

    // ✅ Validar la contraseña
    if ($password === $passwordCorrecta) {
        $_SESSION['loggedin'] = true;
        error_log("✅ Inicio de sesión exitoso"); // Depuración
        echo json_encode(["success" => true, "message" => "Inicio de sesión exitoso"]);
    } else {
        error_log("❌ Contraseña incorrecta para: " . $email); // Depuración
        echo json_encode(["success" => false, "message" => "Contraseña incorrecta"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Método no permitido"]);
}
