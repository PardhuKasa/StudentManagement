<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        .form_deg{
            padding-top:200px;
        }
        .label_deg{
            display: inline-block;
            color:white;
            width:100px;
            text-align:right;
            padding-top:10px;
            padding-bottom:10px
        }
        .login_form{
            background-color:rgb(186, 41, 41);
            width:400px;
            padding-top:70px;
            padding-bottom:70px;
        }
        .title_deg{
            background-color:rgb(35, 163, 248);
            color:white;
            text-align:center;
            font-weight:bold;
            width:400px;
            padding-top:10px;
            padding-bottom:10px;
            font-size:20px;
        }
        body{
            background:url('2.jpg');
            background-attachment: fixed;
            background-repeat:no-repeat;
            background-size:100%;
        }
        .login_btn{
            margin-top:40px
        }
    </style>
</head>
<body>
    <center>
        <div class="form_deg">
            <center class="title_deg">
                Login Form
                <h4>
                    <?php
                        
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        echo $_SESSION['loginMessage'];
                    ?>
                </h4>
            </center>
            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg">Username:</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label class="label_deg">Password:</label>
                    <input type="password" name="password">
                </div>
                <div class="login_btn">
                    <input type="submit" name="submit" value="Login" class="btn btn-primary">
                </div>
            </form>
        </div>
    </center>
</body>
</html>