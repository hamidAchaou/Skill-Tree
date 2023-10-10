<!-- cheack Login -->
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
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><img src="path/to/logo.png" alt="Logo"></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="../includec/login.inc.php" method="post">
                    <!-- flashbag -->
                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyinput") {
                            echo '<p class="text-center error-message  pt-2 pb-2">Please fill in all fields ??</p>';
                        } elseif ($_GET['error'] == "usernotfoundEmail") {
                            echo '<p class="text-center error-message  pt-2 pb-2">User not found ??</p>';
                        } elseif ($_GET['error'] == "worningpassword") {
                            echo '<p class="text-center error-message  pt-2 pb-2">Incorrect password ??</p>';
                        } elseif ($_GET['error'] == "stmtfailed") {
                            echo '<p class="text-center error-message  pt-2 pb-2">Something went wrong ?? Please try again.</p>';
                        }
                    } elseif (isset($_GET['login'])) {
                        if ($_GET['login'] == "success") {
                            echo '<p class="text-success text-center success-message  pt-2 pb-2">Login successful.</p>';
                        }
                    }
                    ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
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
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="loginSubmit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>