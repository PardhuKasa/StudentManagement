<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
    elseif ($_SESSION['usertype']=='student') {
        header('location:login.php');
    }
    $host="localhost";
    $user="root";
    $password="";
    $db="studentmanagement";

    $data=mysqli_connect($host,$user,$password,$db);
    $sql="SELECT * FROM teacher";
    $result=mysqli_query($data,$sql);
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
            padding:20px;
            font-size:20px;
        }
    </style>
</head>
<body>
    <?php
        include('admin_sidebar.php');
    ?>
    <div class="content">
        <center> 
            <h1>Teacher Data</h1>
            <table>
                <tr>
                    <th>Teacher Name</th>
                    <th>About Teacher</th>
                    <th>Image</th>
                </tr>
                <?php
                while($info=$result->fetch_assoc())
                {

                ?>
                <tr>
                    <td>
                        <?php echo "{$info['name']}" 
                        ?>
                    </td>
                    <td>
                        <?php echo "{$info['description']}" 
                        ?>
                    </td>
                    <td>
                        <img height="100px" width="100px" src="<?php echo "{$info['image']}" ?>">
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