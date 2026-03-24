<?php
    session_start();
    $uname=$_SESSION['username'];
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
    elseif ($_SESSION['usertype']=='admin') {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <style>
        .syllabus{
            background: #3b82f6;
            color: white;
        }
        iframe{
            width: 100%;
            height:100vh;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="">Student Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </header>
    <aside class="sidebar">
       <ul>
            <li>
                <a href="mycourses.php" class="mycourses">My Courses</a>
            </li>
            <li>
                <a href="myresult.php" class="myres">My Result</a>
            </li>
            <li>
                <a href="myattendance.php" class="myattendance">My Attendance</a>
            </li>
            <li>
                <a href="ac.php" class="ac">Academic Calender</a>
            </li>
            <li>
                <a href="syllabus.php" class="syllabus">Syllabus</a>
            </li>
            <li>
                <a href="un.php" class="un">Updates & Notifications</a>
            </li>
            
        </ul>
    </aside>
    <div class="content">
        <center>
            <h1>Syllabus</h1>
            <iframe src='bos.pdf' frameborder="0"></iframe>
        </center>
    </div>
</body>
</html>