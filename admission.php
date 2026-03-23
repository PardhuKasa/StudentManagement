<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
    elseif ($_SESSION['usertype']=='student') {
        header('location:login.php');
    }

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "studentmanagement";   
    $conn = new mysqli($host, $user, $password, $dbname);
    $sql="select * from admission";
    $result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php
        include('admin_css.php');
    ?>
    <style>
        table,th,td{
            border:1px solid black;
            border-collapse:collapse;
            padding:20px;
            font-size:15px;
        }
        .admission{
            background: #3b82f6;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        include('admin_sidebar.php');
    ?>
    <div class="content">
        <center>
            <h1>Applications for Admission</h1><br><br>
            <table>
                <tr>
                    <th>Id No</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                </tr>
                <?php
                    while($info=$result->fetch_assoc()){
                ?>
                <tr>
                    <td>
                        <?php
                            echo "{$info['idno']}";
                        ?>
                    </td>
                    <td>
                        <?php
                            echo "{$info['name']}";
                        ?>
                    </td>
                    <td>
                        <?php
                            echo "{$info['mobile']}";
                        ?>
                    </td>
                    <td>
                        <?php
                            echo "{$info['email']}";
                        ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </center>
    </div>
</body>
</html>