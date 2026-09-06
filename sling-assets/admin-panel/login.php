<?php
session_start();

if (!empty($_SESSION['admin_logged_in'])) {
    header('Location: index.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $config = require __DIR__ . '/admin_config.php';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (hash_equals($config['username'], $username) && password_verify($password, $config['password_hash'])) {
        session_regenerate_id(true);
        $_SESSION['admin_logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta content="width=device-width, initial-scale=1.0" name="viewport">
 <title>Sling Software || Admin Login</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" crossorigin="anonymous" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous" />
 <style>
  body {
   font-family: "Open Sans", Arial, sans-serif;
   background: #fffdf8;
   min-height: 100vh;
   display: flex;
   align-items: center;
  }
  .login-card {
   width: 100%;
   max-width: 380px;
   margin: 0 auto;
   background: #fff;
   border: 1px solid #e6e6e2;
   border-radius: 8px;
   padding: 40px 32px;
  }
  .login-icon {
   width: 60px;
   height: 60px;
   margin: 0 auto 16px auto;
   border-radius: 50%;
   border: 2px solid #19ad9f;
   display: flex;
   align-items: center;
   justify-content: center;
   font-size: 24px;
   color: #19ad9f;
  }
  .login-card h3 {
   color: #1b1e2c;
   font-weight: 700;
  }
  .form-group {
   margin-bottom: 1rem;
  }
  .form-label {
   color: #1b1e2c;
   font-weight: 600;
  }
  .form-control:focus {
   border-color: #19ad9f;
   box-shadow: none;
  }
  .btn-brand {
   background: #f8931d;
   border: none;
   color: #fff;
   font-weight: 700;
  }
  .btn-brand:hover {
   background: #e67e22;
   color: #fff;
  }
 </style>
</head>
<body>
 <div class="container">
  <div class="login-card">
   <div class="login-icon"><i class="fa fa-lock"></i></div>
   <h3 class="text-center mb-4">Admin Login</h3>
   <?php if ($error): ?>
    <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
   <?php endif; ?>
   <form method="POST">
    <div class="form-group">
     <label class="form-label">Username</label>
     <input type="text" name="username" class="form-control" required autofocus />
    </div>
    <div class="form-group">
     <label class="form-label">Password</label>
     <input type="password" name="password" class="form-control" required />
    </div>
    <button type="submit" class="btn btn-brand w-100">Login</button>
   </form>
  </div>
 </div>
</body>
</html>
