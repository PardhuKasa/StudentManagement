<?php
    session_start();
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
</head>
<body>
    <header class="header">
        <a href="">Student Dashboard</a>
        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="">My Courses</a>
            </li>
            <li>
                <a href="">My Result</a>
            </li>
            
        </ul>
    </aside>
    <div class="content">
        <h1>PardhuKasa</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Facere quasi adipisci neque vero aliquid consequuntur,
            architecto unde nisi nemo voluptate corrupti! Id laboriosam 
            ea minus quae omnis dolorum cupiditate repudiandae? Placeat 
            ex tempora cum consequatur repudiandae eum illo magni libero 
            ratione excepturi! Mollitia animi eum dolorem, repudiandae 
            vitae molestiae blanditiis.</p>
    </div>
</body>
</html>