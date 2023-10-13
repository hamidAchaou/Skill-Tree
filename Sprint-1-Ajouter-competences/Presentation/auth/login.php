<!-- end cheack Login -->
<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page bg-light">
    <div class="login-box">
        <div class="login-logo">
            <img src="../asset/images/logo.png" alt="Logo" style="width: 60px;">
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <h2 class="login-box-msg">Bienvenue</h2>
                <form action="../includec/login.inc.php" method="post">
                    <!-- flashbag -->
                    <?php include_once "../layouts/flashbag.php"; ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select class="custom-select" name="role" id="role" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="loginSubmit" class="btn btn-primary btn-block">Se connecter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>