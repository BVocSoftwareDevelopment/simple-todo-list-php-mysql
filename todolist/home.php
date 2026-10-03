<?php
// If the user is already logged in, redirect them to the To-Do List page
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: todolist.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <h1 class="display-4">Welcome to Your To-Do List!</h1>
        <p class="lead">Manage your tasks efficiently with our easy-to-use system.</p>
        
        <div class="row justify-content-center mt-5">
            <div class="col-4">
                <a href="login.php" class="btn btn-primary btn-lg w-100">Login</a>
            </div>
            <div class="col-4">
                <a href="register.php" class="btn btn-success btn-lg w-100">Register</a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
