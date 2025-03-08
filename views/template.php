<?php

$path = TemplateController::path();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Estructura correcta de un proyecto web" />
    <meta name="author" content="" />
    <title>Freelance - Start Bootstrap Theme</title>
    
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo $path; ?>views/assets/img/favicon.png" />
    
    <!-- Font Awesome (SIN CORS BLOQUEADO) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo $path; ?>views/assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

<div class="wrapper">
        <?php
        // Incluir solo módulos y páginas, pero NO el template otra vez
        include 'modules/nav.php';
        include 'modules/header.php';
        include 'pages/portfolio/portfolio.php';
        include 'pages/contact/contact.php';
        include 'modules/footer.php';
        include 'modules/copyright.php';
        ?>
    </div>

<!--  ✅ MODAL DE LOGIN (CORREGIDO)  -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">🖥️Login🖥️</h5>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">📬 E-mail</label>
                        <input type="email" class="form-control" id="loginEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"> 🔑 Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100">🛡️ Enter as Owner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Core theme JS -->
    <script src="<?php echo $path; ?>views/assets/js/scripts.js"></script>
    
    <!-- 🚫 Eliminado sb-forms-latest.js (No es necesario y causa errores) -->
    <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->

</body>
</html>
