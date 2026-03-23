<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
    body{
        margin: 0;
        height: 100vh;
        background: linear-gradient(135deg, #1e3a8a, #3b82f6);
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
    }

    .form_deg{
        text-align: center;
    }

    .login_container{
        width: 400px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
    }

    .title_deg{
        background: #3b82f6;
        color: white;
        font-weight: bold;
        padding: 15px;
        font-size: 22px;
    }

    .login_form{
        padding: 30px;
        background: white;
    }

    .label_deg{
        display: block;
        text-align: left;
        margin-bottom: 5px;
        color: #374151;
        font-weight: 500;
    }

    input[type="text"],
    input[type="password"]{
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        outline: none;
    }

    input[type="text"]:focus,
    input[type="password"]:focus{
        border-color: #3b82f6;
        box-shadow: 0 0 5px rgba(59,130,246,0.5);
    }

    .login_btn{
        margin-top: 10px;
    }

    .btn-primary{
        width: 100%;
        background: #2563eb;
        border: none;
        border-radius: 8px;
        padding: 10px;
        transition: 0.3s;
    }

    .btn-primary:hover{
        background: #1e40af;
    }

    h4{
        font-size: 14px;
        margin-top: 5px;
        color: #fef3c7;
    }
</style>
</head>
<body>
    <div class="form_deg">
        <div class="login_container">
            
            <div class="title_deg">
                Login Form
                <h4>
                    <?php
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        echo $_SESSION['loginMessage'];
                    ?>
                </h4>
            </div>

            <form action="login_check.php" method="POST" class="login_form">
                
                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username" required>
                </div>

                <div>
                    <label class="label_deg">Password</label>
                    <input type="password" name="password" required>
                </div>

                <div class="login_btn">
                    <input type="submit" name="submit" value="Login" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</body>
</html>