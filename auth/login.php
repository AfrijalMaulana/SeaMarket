<?php
// login.php - Login page UI (no backend logic)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeaMarket - Login</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa0Y2Yd0h5JD6b+3J1b86R0n0b3D9gDHcVgHKR6U1sA8KDRWZ+8F9W5grK2" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        body {
            background-color: #f0f8ff; /* Light oceanic background */
            font-family: 'Poppins', sans-serif;
        }
        .login-card {
            max-width: 420px;
            margin: 5rem auto;
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 25px rgba(0,0,0,0.08);
            background: white;
        }
        .login-card .card-header {
            background-color: #02367B; /* Ocean Blue */
            color: #fff;
            text-align: center;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            padding: 1.5rem;
        }
        .login-card .card-body {
            padding: 2rem;
        }
        .btn-primary {
            background-color: #2E8B57; /* Sea Green */
            border: none;
        }
        .btn-primary:hover {
            background-color: #256e45;
        }
        .form-control:focus {
            border-color: #2E8B57;
            box-shadow: 0 0 0 0.2rem rgba(46,139,87,.25);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card login-card">
            <div class="card-header">
                <h2 class="h4 mb-0">SeaMarket</h2>
                <small>Login to your account</small>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword"><i class="bi bi-eye"></i></button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <a href="#" class="text-decoration-none">Forgot password?</a>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <p class="mt-3 text-center">Don't have an account? <a href="#" class="text-decoration-none">Register</a></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeo5c6X1WkzW5bi54NdG+eK94xM+2Q9wjue9UMLL4V1F8Ntg" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Custom JS -->
    <script src="../assets/js/app.js"></script>
</body>
</html>
