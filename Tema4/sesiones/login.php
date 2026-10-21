<?php
session_start();

$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_ingresado = trim($_POST['usuario'] ?? '');
    $password_ingresada = trim($_POST['password'] ?? '');

    $encontrado = false;

    if (file_exists('usuarios.txt')) {
        $lineas = file('usuarios.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        foreach ($lineas as $linea) {
            $partes = explode(':', $linea);
            
            if (count($partes) === 2) {
                $usuario_archivo = trim($partes[0]);
                $password_archivo = trim($partes[1]);

                if ($usuario_ingresado === $usuario_archivo && $password_ingresada === $password_archivo) {
                    $encontrado = true;
                    break;
                }
            }
        }
    }

    if ($encontrado) {
        $_SESSION['loginusu'] = $usuario_ingresado;
        header("Location: index.php");
        exit();
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Acceso al Sistema</h3>

            <?php if ($error): ?>
                <div class="alert alert-danger text-center" role="alert">
                    El login o la contraseña son incorrectos.
                </div>
            <?php endif; ?>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>